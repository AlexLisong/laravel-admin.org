<?php

namespace App\Admin\Controllers\Cc;

use App\Http\Controllers\Controller;
use App\Models\Cc\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
     public function Themes(Request $request)
    {
        $q = $request->get('q');

        return Theme::where('title', 'like', "%$q%")->paginate();
    }
}