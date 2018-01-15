<?php

namespace App\Admin\Controllers\Cc;
use Encore\Admin\Reporter\Reporter;
use Illuminate\Support\Facades\Log;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        return Admin::content(function (Content $content) use ($request) {
            Log::info('111 index');

            $content->header('Video manager');
            $urls = [
                'path'       => '\\',
                'index'      => route('media-index'),
                'move'       => route('media-move'),
                'delete'     => route('media-delete'),
                'upload'     => route('media-upload'),
                'new-folder' => route('media-new-folder'),
            ];

            $content->body(view('cc/table', [
                'list'   => [],
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
        Log::info( $request->input('videoName'));
        Log::info( $request->input('videoUrl'));
        Log::info( $request->input('coverUrl'));
        return response()->json([
            'status' => true,
            'message' => '',
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
        $files = $request->get('files');

        $manager = new MediaManager();

        try {
            if ($manager->delete($files)) {
                return response()->json([
                    'status' => true,
                    'message' => trans('admin.delete_succeeded')
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function move(Request $request)
    {
        $path = $request->get('path');
        $new  = $request->get('new');

        $manager = new MediaManager($path);

        try {
            if ($manager->move($new)) {
                return response()->json([
                    'status' => true,
                    'message' => trans('admin.move_succeeded')
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function newFolder(Request $request)
    {
        $dir = $request->get('dir');
        $name  = $request->get('name');

        $manager = new MediaManager($dir);

        try {
            if ($manager->newFolder($name)) {
                return response()->json([
                    'status' => true,
                    'message' => trans('admin.move_succeeded')
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }
}