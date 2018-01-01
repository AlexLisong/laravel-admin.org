<?php

namespace App\Admin\Controllers\Cc;

use App\Models\Cc\Activitie;
use App\Models\Cc\Theme;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ActivitieController extends Controller
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
            
            $content->header('Activitie');
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

            $content->header('Activitie');
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

            $content->header('Activitie');
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
        return Admin::grid(Activitie::class, function (Grid $grid) {
            $grid->id('id')->sortable();
            $grid->title();
            $grid->sortorder();
            $grid->theme()->title();
            $grid->description();
            $grid->example();
            $grid->solution_sheet();
            $grid->showcase();
            $grid->lesson_plan();

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
        return Admin::form(Activitie::class, function (Form $form) {
            
            $form->display('id','ID');
            
            $form->text('title')->rules('required');
            $form->text('sortorder')->rules('required');
            $form->select('cc_theme_id')->options(Theme::all()->pluck('title', 'id'));
            $form->text('description')->rules('required');
            $form->text('example')->rules('required');
            $form->text('solution_sheet')->rules('required');
            $form->text('showcase')->rules('required');
            $form->text('lesson_plan')->rules('required');
        });
    }
}
