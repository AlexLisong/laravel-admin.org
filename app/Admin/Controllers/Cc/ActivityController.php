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

            $form->tab('Activity Info', function ($form) {
                $form->display('id','编号');
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
            })->tab('Chapter Info', function ($form) {
                $form->hasMany('chapters', '页面', function (Form\NestedForm $form) {
                $form->text('title');//->rules('required');
                $form->text('content');//->rules('required');
            });
                $form->saved(function (Form $form) {
                   admin_toastr(trans('admin.update_succeeded'));
               });
            });
        });
    }
}
