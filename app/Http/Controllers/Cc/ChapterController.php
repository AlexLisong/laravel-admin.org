<?php

namespace App\Http\Controllers\Cc;

use App\Models\Cc\Activity;
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
       $chapter = Chapter::find($id);
       return view('cc/chapter',compact('chapter'));
    }
}