<?php

namespace App\Admin\Controllers\Cc;

use App\Models\Cc\StudentClub;
use App\Models\User;
use App\Models\Cc\Club;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class StudentClubController extends Controller
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

            $content->header('Student Club');
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

            $content->header('Chapter');
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

            $content->header('Club');
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
        return Admin::grid(StudentClub::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->user()->name('Student Name');
            $grid->club()->name('Cc Club Name');
            $grid->active('active');

            $grid->filter(function ($filter) {
                $filter->like('id');
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
        return Admin::form(StudentClub::class, function (Form $form) {
            $form->display('id','ID');
            $form->select('student_id','User')->options(User::all()->pluck('name', 'id'));
            $form->select('cc_club_id','Club')->options(Club::all()->pluck('name', 'id'));
            $form->select('active')->options(['true'=>'true','false'=>'false']);
        });
    }
}
