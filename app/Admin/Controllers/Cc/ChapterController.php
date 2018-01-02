<?php

namespace App\Admin\Controllers\Cc;

use App\Models\Cc\Chapter;
use App\Models\Cc\Activity;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ChapterController extends Controller
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
        return Admin::grid(Chapter::class, function (Grid $grid) {
            $grid->id('id')->sortable();
            $grid->title();
            $grid->sortorder();
            $grid->Activity()->title('Activity');
            $grid->video();
            $grid->content();
            $grid->type();
            $grid->iframe_url();

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
        return Admin::form(Chapter::class, function (Form $form) {
            
            $form->display('id','ID');
            $form->textbox('title');
            $form->icon('icon');
            $form->image('icon_file');
            $form->text('sortorder')->rules('required');
            $form->select('cc_activity_id')->options(Activity::all()->pluck('title', 'id'));
            $form->textbox('video');
            $form->textarea('content')->rules('required');
            $form->text('type')->rules('required');
            $form->text('iframe_url')->rules('required');
        });
    }
}
