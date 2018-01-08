<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Dashboard');
            $content->description('Description...');

            $content->row(Dashboard::title());
            if(Admin::user()->isRole('administrator')){
                $this->getMaterialCreatorIndex($content);
            }else if(Admin::user()->isRole('materialcreator')){
                $this->getMaterialCreatorIndex($content);
            }else{
                $this->getAdminIndex($content);
            }
        });
    }
    public function getAdminIndex($content){
        $content->row(function (Row $row) {

            $row->column(4, function (Column $column) {
                $column->append(Dashboard::environment());
            });

            $row->column(4, function (Column $column) {
                $column->append(Dashboard::extensions());
            });

            $row->column(4, function (Column $column) {
                $column->append(Dashboard::dependencies());
            });
        });
    }

    public function getMaterialCreatorIndex($content){
        $content->row(function (Row $row) {

            $row->column(6, function (Column $column) {
                $column->append('<a href="/admin/cc/theme/create">创造新课程</a> ');
            });

            $row->column(6, function (Column $column) {
                $column->append('<a href="/admin/cc/theme">修改现有课程</a>');
            });
        });
    }
}