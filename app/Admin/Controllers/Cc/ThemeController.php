<?php

namespace App\Admin\Controllers\Cc;

use App\Models\Cc\Theme;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ThemeController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Theme');
            $content->description('description');
            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Theme');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Theme');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Theme::class, function (Grid $grid) {
            $grid->id('id')->sortable();
            $grid->title();
            $grid->description();
            $grid->level();
            $grid->icon();
            $grid->sortorder();

            $grid->filter(function ($filter) {
                $filter->like('title');
            });
            $grid->paginate(15);

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Theme::class, function (Form $form) {
            $form->display('id','编号');
            $form->text('title', '标题');
            $form->image('icon_file', '图标');
            // $form->icon('icon');
            $form->textarea('description','描述')->rules('required');
            $form->select('level','级别')->rules('required')->options([1 => '初级', 2 => '中等', 3 => '高级']);

            $form->saved(function () {
                admin_toastr(trans('admin.update_succeeded'));

                return redirect(admin_base_path('cc/activity/create'));
                
            });
            
            // $form->text('sortorder');
            
            // 修改图片上传路径和文件名
            // $form->image('icon_file')->move($dir, $name);
            // 剪裁图片
            // $form->image('icon_file')->crop(int $width, int $height, [int $x, int $y]);
            // 加水印
            // $form->image('icon_file')->insert($watermark, 'center');
        });
    }
}
