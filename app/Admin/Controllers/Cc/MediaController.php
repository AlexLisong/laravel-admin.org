<?php

namespace App\Admin\Controllers\Cc;
use Illuminate\Support\Facades\Log;
use App\Models\Cc\Video;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        // Validate the request...


        return Admin::content(function (Content $content) use ($request) {
            Log::info('111 index');

            $content->header('Video manager');
            $urls = [
                'path'       => '\\',
                'index'      => route('media-index'),
                'move'       => route('media-move'),
                'delete'     => route('media-delete'),
                'upload'     => route('vmanager-upload'),
                'new-folder' => route('media-new-folder'),
            ];

            $content->body(view('cc/vmanager-table', [
                'list'   => Video::all(),
                'nav'    => [],
                'url'    => $urls,
            ]));

        });
    }

    public function download(Request $request)
    {
        $file = $request->get('file');

        $manager = new MediaManager($file);

        return $manager->download();
    }

    public function upload(Request $request)
    {
//        Log::info('upload:'. $request->get('videoUrl'));
        Log::info( $request->get('videoName', ''));
        Log::info( $request->get('videoUrl', ''));
        Log::info( $request->get('coverUrl', ''));

        $video = new Video;
        $video->title = $request->get('videoName', '');
        $video->url = $request->get('videoUrl', '');
        $video->status = "0";
        $video->cover_url = $request->get('coverUrl', '');

        $video->save();
        //return redirect('/cc-admin/vmanager');

        return response()->json([
            'status' => 200,
            'message' => 'uploaded',
        ]);

//        result.videoUrl
//        $files = $request->file('files');
//        $dir = $request->get('dir', '/');
//
//        $manager = new MediaManager($dir);
//
//        try {
//            if ($manager->upload($files)) {
//                admin_toastr(trans('admin.upload_succeeded'));
//            }
//        } catch (\Exception $e) {
//            admin_toastr($e->getMessage(), 'error');
//        }
//
//        return back();
    }

    public function delete(Request $request)
    {

    }


}