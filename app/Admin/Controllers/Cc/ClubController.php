<?php

namespace App\Admin\Controllers\Cc;

use App\Models\Cc\Club;
use App\Models\User;
use App\Models\Cc\Theme;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ClubController extends Controller
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
        return Admin::grid(Club::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            $grid->name('Name');
            $grid->club_code('club_code');
            $grid->user()->name('User');
            $grid->theme()->title('Theme');

            $grid->filter(function ($filter) {
                $filter->like('name');
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
        return Admin::form(Club::class, function (Form $form) {
            $arr = array('1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','z','k','m','n','p','q','r','s','t','u','v','w','x','y','z');
            $club_code = '';
            for($i=1;$i<=7;$i++){
                $code_key = mt_rand(1,count($arr)) - 1;
                $club_code .= $arr[$code_key];
            };

            $form->display('id','ID');
            $form->text('name')->rules('required');
            $form->hidden('club_code')->value($club_code);
            $form->select('teacher_id')->options(User::all()->pluck('name', 'id'));
            $form->select('cc_theme_id')->options(Theme::all()->pluck('title', 'id'));
        });
    }
}
