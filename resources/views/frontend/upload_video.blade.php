@extends('frontend.layouts.internal')

@section('content')
    <div class="container bs-docs-container">
        <div class="row" style="padding:10px;">
            <p>
                1.示例中的签名是直接从demo后台获取签名。<br>
                2.示例1点击“直接上传视频”按钮即可上传视频。<br>
                3.示例2点击“添加视频”添加视频文件，点击“添加封面”添加封面文件，然后点击“上传视频和封面”按钮即可上传视频和封面。<br>
                4.取消上传为取消上传中的视频，上传成功的视频不能取消上传。

            </p>
        </div>


        <form id="form1">
            <input id="uploadVideoNow-file" type="file" style="display:none;">
        </form>

        <div>
            <img width="320" height="240" src="http://1254109501.vod2.myqcloud.com/73bb799bvodgzp1254109501/957394c84564972818747043130/4564972818747043131.jpg">
            <video width="320" height="240" controls>
                <source src="http://1254109501.vod2.myqcloud.com/73bb799bvodgzp1254109501/95875b524564972818747056361/CQJv9A95Y8sA.mp4" type="video/mp4">
                {{--<source src="http://1254109501.vod2.myqcloud.com/73bb799bvodgzp1254109501/95875b524564972818747056361/CQJv9A95Y8sA.ogg" type="video/ogg">--}}
                Your browser does not support the video tag.
            </video>
            <video width="320" height="240" controls>
                <source src="http://1254109501.vod2.myqcloud.com/73bb799bvodgzp1254109501/957394c84564972818747043130/m5sOic9z7kMA.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="row" style="padding:10px;">
            <h4>示例1：直接上传视频</h4>
            <a id="uploadVideoNow" href="javascript:void(0);" class="btn btn-outline">直接上传视频</a>
        </div>

        <form id="form2">
            <input id="addVideo-file" type="file" style="display:none;">
            <input id="addCover-file" type="file" style="display:none;">
        </form>
        <div class="row" style="padding:10px;">
            <h4>示例2：上传视频和封面</h4>
            <a id="addVideo" href="javascript:void(0);" class="btn btn-outline">添加视频</a>
            <a id="addCover" href="javascript:void(0);" class="btn btn-outline">添加封面</a>
            <a id="uploadFile" href="javascript:void(0);" class="btn btn-outline">上传视频和封面</a>
        </div>

        <form id="form3">
            <input id="changeCover-file" type="file" style="display:none;">
        </form>
        <div class="row form-group form-group-sm" style="padding:10px;">
            <h4>示例3：修改封面</h4>
            <label class="col-sm-1" style="padding: 0;">fileId：</label>
            <div class="col-sm-4">
                <input name="fileId" class="form-control">
            </div>
            <div class="col-sm-4">
                <a id="changeCover" href="javascript:void(0);" class="btn btn-outline">修改封面</a>
            </div>
        </div>
        <div class="row" id="resultBox"></div>

    </div>

@endsection
@section('after-scripts')
    {{--<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>--}}
    <!-- <script src="//imgcache.qq.com/open/qcloud/js/vod/crypto.js"></script> -->
    <script src="//imgcache.qq.com/open/qcloud/js/vod/sdk/ugcUploader.js"></script>
    <!-- <script src="//video.qcloud.com/signature/lib/ugcUploader.js"></script> -->

    <script type="text/javascript">


        var index = 0;
        var cosBox = [];
        /**
         * 计算签名
         **/
        var getSignature = function(callback){
            $.ajax({
                //url: 'http://123.206.83.120:80/interface.php',
                //url: 'http://58.250.10.156/v8/index.php',
                url: '/tecent/api-sign.php',
                data: JSON.stringify({
                    "Action":"GetVodSignatureV2"
                }),
                type: 'POST',
                dataType: 'json',
                success: function(res){
                    if(res.returnData && res.returnData.signature) {
                        callback(res.returnData.signature);
                    } else {
                        return '获取签名失败';
                    }

                }
            });
        };

        /**
         * 添加上传信息模块
         */

        var addUploaderMsgBox = function(type){
            var html = '<div class="uploaderMsgBox" name="box'+index+'">';
            if(!type || type == 'hasVideo') {
                html += '视频名称：<span name="videoname'+index+'"></span>；' +
                    '计算sha进度：<span name="videosha'+index+'">0%</span>；' +
                    '上传进度：<span name="videocurr'+index+'">0%</span>；' +
                    'fileId：<span name="videofileId'+index+'">   </span>；' +
                    '上传结果：<span name="videoresult'+index+'">   </span>；<br>' +
                    '地址：<span name="videourl'+index+'">   </span>；'+
                    '<a href="javascript:void(0);" name="cancel'+index+'" cosnum='+index+' act="cancel-upload">取消上传</a><br>';
            }

            if(!type || type == 'hasCover') {
                html += '封面名称：<span name="covername'+index+'"></span>；' +
                    '计算sha进度：<span name="coversha'+index+'">0%</span>；' +
                    '上传进度：<span name="covercurr'+index+'">0%</span>；' +
                    '上传结果：<span name="coverresult'+index+'">   </span>；<br>' +
                    '地址：<span name="coverurl'+index+'">   </span>；<br>' +
                    '</div>'
            }
            html += '</div>';

            $('#resultBox').append(html);
            return index++;
        };

        /**
         * 示例1：直接上传视频
         **/
        $('#uploadVideoNow-file').on('change', function (e) {
            var num = addUploaderMsgBox('hasVideo');
            var videoFile = this.files[0];
            $('#result').append(videoFile.name +　'\n');
            var resultMsg = qcVideo.ugcUploader.start({
                videoFile: videoFile,
                getSignature: getSignature,
                allowAudio: 1,
                success: function(result){
                    if(result.type == 'video') {
                        $('[name=videoresult'+num+']').text('上传成功');
                        $('[name=cancel'+num+']').remove();
                        cosBox[num] = null;
                    } else if (result.type == 'cover') {
                        $('[name=coverresult'+num+']').text('上传成功');
                    }
                },
                error: function(result){
                    if(result.type == 'video') {
                        $('[name=videoresult'+num+']').text('上传失败>>'+result.msg);
                    } else if (result.type == 'cover') {
                        $('[name=coverresult'+num+']').text('上传失败>>'+result.msg);
                    }
                },
                progress: function(result){
                    if(result.type == 'video') {
                        $('[name=videoname'+num+']').text(result.name);
                        $('[name=videosha'+num+']').text(Math.floor(result.shacurr*100)+'%');
                        $('[name=videocurr'+num+']').text(Math.floor(result.curr*100)+'%');
                        $('[name=cancel'+num+']').attr('taskId', result.taskId);
                        cosBox[num] = result.cos;
                    } else if (result.type == 'cover') {
                        $('[name=covername'+num+']').text(result.name);
                        $('[name=coversha'+num+']').text(Math.floor(result.shacurr*100)+'%');
                        $('[name=covercurr'+num+']').text(Math.floor(result.curr*100)+'%');
                    }

                },
                finish: function(result){
                    $('[name=videofileId'+num+']').text(result.fileId);
                    $('[name=videourl'+num+']').text(result.videoUrl);
                    if(result.message) {
                        $('[name=videofileId'+num+']').text(result.message);
                    }
                }
            });
            if(resultMsg){
                $('[name=box'+num+']').text(resultMsg);
            }
            $('#form1')[0].reset();
        });
        $('#uploadVideoNow').on('click', function () {
            $('#uploadVideoNow-file').click();
        });
        /*
         * 取消上传绑定事件，示例一与示例二通用
         */
        $('#resultBox').on('click', '[act=cancel-upload]', function() {
            var cancelresult = qcVideo.ugcUploader.cancel({
                cos: cosBox[$(this).attr('cosnum')],
                taskId: $(this).attr('taskId')
            });
            console.log(cancelresult);
        });


        /**
         * 示例2：上传视频+封面
         **/
        var videoFileList = [];
        var coverFileList = [];
        // 给addVideo添加监听事件
        $('#addVideo-file').on('change', function (e) {
            var videoFile = this.files[0];
            videoFileList[0] = videoFile;
            $('#result').append(videoFile.name +　'\n');

        });
        $('#addVideo').on('click', function () {
            $('#addVideo-file').click();
        });
        // 给addCover添加监听事件
        $('#addCover-file').on('change', function (e) {
            var coverFile = this.files[0];
            coverFileList[0] = coverFile;
            $('#result').append(coverFile.name +　'\n');

        });
        $('#addCover').on('click', function () {
            $('#addCover-file').click();
        });

        var startUploader = function(){
            if(videoFileList.length){
                var num = addUploaderMsgBox();
                if(!coverFileList[0]){
                    $('[name=covername'+num+']').text('没有上传封面');
                }
                var resultMsg = qcVideo.ugcUploader.start({
                    videoFile: videoFileList[0],
                    coverFile: coverFileList[0],
                    getSignature: getSignature,
                    allowAudio: 1,
                    success: function(result){
                        if(result.type == 'video') {
                            $('[name=videoresult'+num+']').text('上传成功');
                            $('[name=cancel'+num+']').remove();
                            cosBox[num] = null;
                        } else if (result.type == 'cover') {
                            $('[name=coverresult'+num+']').text('上传成功');
                        }
                    },
                    error: function(result){
                        if(result.type == 'video') {
                            $('[name=videoresult'+num+']').text('上传失败>>'+result.msg);
                        } else if (result.type == 'cover') {
                            $('[name=coverresult'+num+']').text('上传失败>>'+result.msg);
                        }
                    },
                    progress: function(result){
                        if(result.type == 'video') {
                            $('[name=videoname'+num+']').text(result.name);
                            $('[name=videosha'+num+']').text(Math.floor(result.shacurr*100)+'%');
                            $('[name=videocurr'+num+']').text(Math.floor(result.curr*100)+'%');
                            $('[name=cancel'+num+']').attr('taskId', result.taskId);
                            cosBox[num] = result.cos;
                        } else if (result.type == 'cover') {
                            $('[name=covername'+num+']').text(result.name);
                            $('[name=coversha'+num+']').text(Math.floor(result.shacurr*100)+'%');
                            $('[name=covercurr'+num+']').text(Math.floor(result.curr*100)+'%');
                        }
                    },
                    finish: function(result){
                        $('[name=videofileId'+num+']').text(result.fileId);
                        $('[name=videourl'+num+']').text(result.videoUrl);
                        if(result.coverUrl) {
                            $('[name=coverurl'+num+']').text(result.coverUrl);
                        }
                        if(result.message) {
                            $('[name=videofileId'+num+']').text(result.message);
                        }
                    }
                });
                if(resultMsg){
                    $('[name=box'+num+']').text(resultMsg);
                }
            } else {
                $('#result').append('请添加视频！\n');
            }

        }

        // 上传按钮点击事件
        $('#uploadFile').on('click', function () {
            var secretId = $('#secretId').val();
            var secretKey = $('#secretKey').val();
            startUploader();
            $('#form2')[0].reset();
        });

        /**
         * 示例3：直修改封面
         **/
        $('#changeCover-file').on('change', function (e) {
            var num = addUploaderMsgBox('hasCover');
            var changeCoverFile = this.files[0];
            var fileId = $('[name=fileId]').val();
            var resultMsg = qcVideo.ugcUploader.start({
                fileId: fileId,
                coverFile: changeCoverFile,
                getSignature: getSignature,
                success: function(result){
                    if(result.type == 'video') {
                        $('[name=videoresult'+num+']').text('上传成功');
                    } else if (result.type == 'cover') {
                        $('[name=coverresult'+num+']').text('上传成功');
                    }
                },
                error: function(result){
                    if(result.type == 'video') {
                        $('[name=videoresult'+num+']').text('上传失败>>'+result.msg);
                    } else if (result.type == 'cover') {
                        $('[name=coverresult'+num+']').text('上传失败>>'+result.msg);
                    }
                },
                progress: function(result){
                    if(result.type == 'video') {
                        $('[name=videoname'+num+']').text(result.name);
                        $('[name=videosha'+num+']').text(Math.floor(result.shacurr*100)+'%');
                        $('[name=videocurr'+num+']').text(Math.floor(result.curr*100)+'%');
                    } else if (result.type == 'cover') {
                        $('[name=covername'+num+']').text(result.name);
                        $('[name=coversha'+num+']').text(Math.floor(result.shacurr*100)+'%');
                        $('[name=covercurr'+num+']').text(Math.floor(result.curr*100)+'%');
                    }

                },
                finish: function(result){
                    $('[name=coverurl'+num+']').text(result.coverUrl);
                    if(result.message) {
                        $('[name=coverurl'+num+']').text(result.message);
                    }
                }
            });
            if(resultMsg){
                $('[name=box'+num+']').text(resultMsg);
            }
            $('#form1')[0].reset();
        });
        $('#changeCover').on('click', function () {
            $('#changeCover-file').click();
        });
    </script>
@endsection