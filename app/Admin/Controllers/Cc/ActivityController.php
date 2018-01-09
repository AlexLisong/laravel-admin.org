<?php

namespace App\Admin\Controllers\Cc;

use App\Models\Cc\Activity;
use App\Models\Cc\Theme;
use App\Models\Cc\Chapter;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ActivityController extends Controller
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

            $content->header('Activity');
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

            $content->header('Activity');
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

            $content->header('Activity');
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
        return Admin::grid(Activity::class, function (Grid $grid) {
            $grid->id('id')->sortable();
            $grid->title();
            $grid->theme()->title();
            $grid->description();
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
        return Admin::form(Activity::class, function (Form $form) {
          $form->html('<h3>1. 若有视频，音频或测试附件，请先去<a href="http://www.google.ca">google</a>去上传</h3>');
          $form->tab('添加课程', function ($form) {
            $form->text('title', '标题');
            // $form->icon('icon');
            $form->image('icon_file', '图标');
            // $form->text('sortorder')->rules('required');
            $form->select('cc_theme_id', '所属主题')->options(Theme::all()->pluck('title', 'id'));
            $form->text('description','描述')->rules('required');
            // $form->text('example')->rules('required');
            // $form->text('solution_sheet')->rules('required');
            // $form->text('showcase')->rules('required');
            $form->editor('lesson_plan')->rules('required');
        })->tab('课程章节', function ($form) {
            $form->html('<h3>2. 每个章节都可以附带音频，视频，以及测试模块，先选择‘类型’然后再添加模块 ');
            $form->hasMany('chapters', '章节', function (Form\NestedForm $form) {
                $form->text('title')->rules('required');
                $form->select('province', '类别')->options([1 => '视频', 2 => '音频', 3 => '文字', 4 => '测试'])->load('city', '/api/city');
                $form->select('city', '模块');
            });
            $form->saved(function (Form $form) {
             admin_toastr(trans('admin.update_succeeded'));
         });
        });
    });
    }
}
