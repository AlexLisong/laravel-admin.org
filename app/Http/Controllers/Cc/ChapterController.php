<?php

namespace App\Http\Controllers\Cc;

use App\Models\Cc\Activitie;
use App\Models\Cc\Chapter;
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
  
     public function index($id)
    {
       $chapters = Chapter::where('cc_activity_id',$id)->get();
       return view('cc/chapter',compact('chapters'));
    }
}