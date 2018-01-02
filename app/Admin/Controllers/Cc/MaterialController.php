<?php

namespace App\Admin\Controllers\Cc;

use App\Models\Cc\Material;

use App\Models\Cc\Theme;
use App\Models\Cc\Activity;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MaterialController extends Controller
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
            
            $content->header('Material');
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

            $content->header('Material');
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

            $content->header('Material');
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
        return Admin::grid(Material::class, function (Grid $grid) {
            $grid->id('id')->sortable();
            $grid->title();
            $grid->icon();
            $grid->description();
            $grid->theme()->title('theme');
            $grid->activity()->title('title');

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
        return Admin::form(Material::class, function (Form $form) {
            $form->display('id', 'ID');
            
            $form->text('title')->rules('required');
            $form->icon('icon');
            $form->image('icon_file');
            $form->editor('description')->rules('required');
            $form->select('cc_theme_id')->options(Theme::all()->pluck('title', 'id'));
            $form->select('cc_activity_id')->options(Activity::all()->pluck('title', 'id'));
        });
    }
}
