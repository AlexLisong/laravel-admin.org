<?php

namespace App\Http\Controllers\Cc;

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
       return view('cc/activitie');
    }
}