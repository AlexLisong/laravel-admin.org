
<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>

<style>
    .files > li {
        float: left;
        width: 150px;
        border: 1px solid #eee;
        margin-bottom: 10px;
        margin-right: 10px;
        position: relative;
    }

    .file-icon {
        text-align: left;
        font-size: 25px;
        color: #666;
        display: block;
        float: left;
    }

    .action-row {
        text-align: center;
    }

    .file-name {
        font-weight: bold;
        color: #666;
        display: block;
        overflow: hidden !important;
        white-space: nowrap !important;
        text-overflow: ellipsis !important;
        float: left;
        margin: 7px 0px 0px 10px;
    }

    .file-icon.has-img>img {
         max-width: 100%;
         height: auto;
         max-height: 30px;
     }

</style>

<script data-exec-on-popstate>

$(function () {
    $('.file-delete').click(function () {

        var path = $(this).data('path');

        swal({
            title: "{{ trans('admin.delete_confirm') }}",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "{{ trans('admin.confirm') }}",
            closeOnConfirm: false,
            cancelButtonText: "{{ trans('admin.cancel') }}"
        },
        function(){
            $.ajax({
                method: 'delete',
                url: '{{ $url['delete'] }}',
                data: {
                    'files[]':[path],
                    _token:LA.token,
                },
                success: function (data) {
                    $.pjax.reload('#pjax-container');

                    if (typeof data === 'object') {
                        if (data.status) {
                            swal(data.message, '', 'success');
                        } else {
                            swal(data.message, '', 'error');
                        }
                    }
                }
            });
        });
    });

    $('#moveModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var name = button.data('name');

        var modal = $(this);
        modal.find('[name=path]').val(name)
        modal.find('[name=new]').val(name)
    });

    $('#urlModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var url = button.data('url');

        $(this).find('input').val(url)
    });

    $('#file-move').on('submit', function (event) {

        event.preventDefault();

        var form = $(this);

        var path = form.find('[name=path]').val();
        var name = form.find('[name=new]').val();

        $.ajax({
            method: 'put',
            url: '{{ $url['move'] }}',
            data: {
                path: path,
                'new': name,
                _token:LA.token,
            },
            success: function (data) {
                $.pjax.reload('#pjax-container');

                if (typeof data === 'object') {
                    if (data.status) {
                        toastr.success(data.message);
                    } else {
                        toastr.error(data.message);
                    }
                }
            }
        });

        closeModal();
    });

    $('.file-upload').on('change', function () {
        $('.file-upload-form').submit();
    });

    $('#new-folder').on('submit', function (event) {

        event.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            method: 'POST',
            url: '{{ $url['new-folder'] }}',
            data: formData,
            async: false,
            success: function (data) {
                $.pjax.reload('#pjax-container');

                if (typeof data === 'object') {
                    if (data.status) {
                        toastr.success(data.message);
                    } else {
                        toastr.error(data.message);
                    }
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });

        closeModal();
    });

    function closeModal() {
        $("#moveModal").modal('toggle');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    }

    $('.media-reload').click(function () {
        $.pjax.reload('#pjax-container');
    });

    $('.goto-url button').click(function () {
        var path = $('.goto-url input').val();
        $.pjax({container:'#pjax-container', url: '{{ $url['index'] }}?path=' + path });
    });

    $('.files-select-all').on('ifChanged', function(event) {
        if (this.checked) {
            $('.grid-row-checkbox').iCheck('check');
        } else {
            $('.grid-row-checkbox').iCheck('uncheck');
        }
    });

    $('.file-select input').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChanged', function () {
        if (this.checked) {
            $(this).closest('tr').css('background-color', '#ffffd5');
        } else {
            $(this).closest('tr').css('background-color', '');
        }
    });

    $('.file-select-all input').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChanged', function () {
        if (this.checked) {
            $('.file-select input').iCheck('check');
        } else {
            $('.file-select input').iCheck('uncheck');
        }
    });

    $('.file-delete-multiple').click(function () {
        var files = $(".file-select input:checked").map(function(){
            return $(this).val();
        }).toArray();

        if (!files.length) {
            return;
        }

        swal({
            title: "{{ trans('admin.delete_confirm') }}",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "{{ trans('admin.confirm') }}",
            closeOnConfirm: false,
            cancelButtonText: "{{ trans('admin.cancel') }}"
        },
        function(){
            $.ajax({
                method: 'delete',
                url: '{{ $url['delete'] }}',
                data: {
                    'files[]': files,
                    _token:LA.token,
                },
                success: function (data) {
                    $.pjax.reload('#pjax-container');

                    if (typeof data === 'object') {
                        if (data.status) {
                            swal(data.message, '', 'success');
                        } else {
                            swal(data.message, '', 'error');
                        }
                    }
                }
            });
        });
    });

    $('table>tbody>tr').mouseover(function () {
        $(this).find('.btn-group').removeClass('hide');
    }).mouseout(function () {
        $(this).find('.btn-group').addClass('hide');
    });

});

</script>

<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="box box-primary">

            {{--<div class="box-body no-padding">--}}

                {{--<div class="mailbox-controls with-border">--}}
                    {{--<div class="btn-group">--}}
                        {{--<a href="" type="button" class="btn btn-default btn media-reload" title="Refresh">--}}
                            {{--<i class="fa fa-refresh"></i>--}}
                        {{--</a>--}}
                        {{--<a type="button" class="btn btn-default btn file-delete-multiple" title="Delete">--}}
                            {{--<i class="fa fa-trash-o"></i>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<!-- /.btn-group -->--}}
                    {{--<label class="btn btn-default btn"--}}{{-- data-toggle="modal" data-target="#uploadModal"--}}{{-->--}}
                        {{--<i class="fa fa-upload"></i>&nbsp;&nbsp;{{ trans('admin.upload') }}--}}
                        {{--<form action="{{ $url['upload'] }}" method="post" class="file-upload-form" enctype="multipart/form-data" pjax-container>--}}
                            {{--<input type="file" name="files[]" class="hidden file-upload" multiple>--}}
                            {{--<input type="hidden" name="dir" value="{{ $url['path'] }}" />--}}
                            {{--{{ csrf_field() }}--}}
                        {{--</form>--}}
                    {{--</label>--}}

                    {{--<!-- /.btn-group -->--}}
                    {{--<a class="btn btn-default btn" data-toggle="modal" data-target="#newFolderModal">--}}
                        {{--<i class="fa fa-folder"></i>&nbsp;&nbsp;{{ trans('admin.new_folder') }}--}}
                    {{--</a>--}}

                    {{--<div class="btn-group">--}}
                        {{--<a href="{{ route('media-index', ['path' => $url['path'], 'view' => 'table']) }}" class="btn btn-default active"><i class="fa fa-list"></i></a>--}}
                        {{--<a href="{{ route('media-index', ['path' => $url['path'], 'view' => 'list']) }}" class="btn btn-default"><i class="fa fa-th"></i></a>--}}
                    {{--</div>--}}

                    {{--<form action="{{ $url['index'] }}" method="get" pjax-container>--}}
                    {{--<div class="input-group input-group-sm pull-right goto-url" style="width: 250px;">--}}
                        {{--<input type="text" name="path" class="form-control pull-right" value="{{ '/'.trim($url['path'], '/') }}">--}}

                        {{--<div class="input-group-btn">--}}
                            {{--<button type="submit" class="btn btn-default"><i class="fa fa-arrow-right"></i></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}

                {{--</div>--}}

                {{--<!-- /.mailbox-read-message -->--}}
            {{--</div>--}}
            <!-- /.box-body -->
            <div class="box-footer">
                <ol class="breadcrumb" style="margin-bottom: 10px;">

                    <li><a href="{{ route('media-index') }}"><i class="fa fa-th-large"></i> </a></li>

                    @foreach($nav as $item)
                    <li><a href="{{ $item['url'] }}"> {{ $item['name'] }}</a></li>
                    @endforeach
                </ol>

                @if (!empty($list))
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th width="40px;">
                            <span class="file-select-all">
                            <input type="checkbox" value=""/>
                            </span>
                        </th>
                        <th>{{ trans('admin.name') }}</th>
                        <th width="200px;">Url</th>
                        <th width="100px;">封面Url</th>
                    </tr>
                    @foreach($list as $item)
                    <tr>
                        <td style="padding-top: 15px;">
                            {{--<span class="file-select">--}}
                            {{--<input type="checkbox" value="{{ $item['title'] }}"/>--}}
                            {{--</span>--}}
                        </td>
                        <td>
                             {{ basename($item['title']) }}
                        </td>

                        {{--<td class="action-row">--}}
                            {{--<div class="btn-group btn-group-xs hide">--}}
                                {{--<a class="btn btn-default file-rename" data-toggle="modal" data-target="#moveModal" data-name="{{ $item['name'] }}"><i class="fa fa-edit"></i></a>--}}
                                {{--<a class="btn btn-default file-delete" data-path="{{ $item['name'] }}"><i class="fa fa-trash"></i></a>--}}
                                {{--@unless($item['isDir'])--}}
                                {{--<a href="{{ $item['download'] }}" class="btn btn-default"><i class="fa fa-download"></i></a>--}}
                                {{--@endunless--}}
                                {{--<a class="btn btn-default" data-toggle="modal" data-target="#urlModal" data-url="{{ $item['url'] }}"><i class="fa fa-internet-explorer"></i></a>--}}
                            {{--</div>--}}

                        {{--</td>--}}
                        <td>{{ $item['url'] }}&nbsp;</td>
                        <td>{{ $item['cover_url'] }}&nbsp;</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif

            </div>
            <!-- /.box-footer -->
            <!-- /.box-footer -->
        </div>
        <!-- /. box -->
    </div>
    <!-- /.col -->
</div>

<div class="modal fade" id="moveModal" tabindex="-1" role="dialog" aria-labelledby="moveModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="moveModalLabel">Rename & Move</h4>
            </div>
            <form id="file-move">
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Path:</label>
                    <input type="text" class="form-control" name="new" />
                </div>
                <input type="hidden" name="path"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="urlModal" tabindex="-1" role="dialog" aria-labelledby="urlModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="urlModalLabel">Url</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newFolderModal" tabindex="-1" role="dialog" aria-labelledby="newFolderModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="newFolderModalLabel">New folder</h4>
            </div>
            <form id="new-folder">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" />
                    </div>
                    <input type="hidden" name="dir" value="{{ $url['path'] }}"/>
                    {{ csrf_field() }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



    <div class="container bs-docs-container">
        <h4>上传视频和封面</h4>

        {{--<div class="row" style="padding:10px;">--}}
            {{--<p>--}}
                {{--1.示例中的签名是直接从demo后台获取签名。<br>--}}
                {{--2.示例1点击“直接上传视频”按钮即可上传视频。<br>--}}
                {{--3.示例2点击“添加视频”添加视频文件，点击“添加封面”添加封面文件，然后点击“上传视频和封面”按钮即可上传视频和封面。<br>--}}
                {{--4.取消上传为取消上传中的视频，上传成功的视频不能取消上传。--}}

            {{--</p>--}}
        {{--</div>--}}


        <form id="form1">
            <input id="uploadVideoNow-file" type="file" style="display:none;">
        </form>

        {{--<div>--}}
            {{--<img width="320" height="240" src="http://1254109501.vod2.myqcloud.com/73bb799bvodgzp1254109501/957394c84564972818747043130/4564972818747043131.jpg">--}}
            {{--<video width="320" height="240" controls>--}}
                {{--<source src="http://1254109501.vod2.myqcloud.com/73bb799bvodgzp1254109501/95875b524564972818747056361/CQJv9A95Y8sA.mp4" type="video/mp4">--}}
                {{--<source src="http://1254109501.vod2.myqcloud.com/73bb799bvodgzp1254109501/95875b524564972818747056361/CQJv9A95Y8sA.ogg" type="video/ogg">--}}
                {{--Your browser does not support the video tag.--}}
            {{--</video>--}}
            {{--<video width="320" height="240" controls>--}}
                {{--<source src="http://1254109501.vod2.myqcloud.com/73bb799bvodgzp1254109501/957394c84564972818747043130/m5sOic9z7kMA.mp4" type="video/mp4">--}}
                {{--Your browser does not support the video tag.--}}
            {{--</video>--}}
        {{--</div>--}}
        {{--<div class="row" style="padding:10px;">--}}
            {{--<h4>示例1：直接上传视频</h4>--}}
            {{--<a id="uploadVideoNow" href="javascript:void(0);" class="btn btn-outline">直接上传视频</a>--}}
        {{--</div>--}}

        <form id="form2">
            <input id="addVideo-file" type="file" style="display:none;">
            <input id="addCover-file" type="file" style="display:none;">
        </form>
        <div class="row" style="background-color: #0c5480; padding:10px;">
            <a id="addVideo" href="javascript:void(0);" class="btn btn-outline">添加视频</a>
            <a id="addCover" href="javascript:void(0);" class="btn btn-outline">添加封面</a>
            <a id="uploadFile" href="javascript:void(0);" class="btn btn-outline">上传视频和封面</a>
        </div>

        <form id="form3">
            <input id="changeCover-file" type="file" style="display:none;">
        </form>
        {{--<div class="row form-group form-group-sm" style="padding:10px;">--}}
            {{--<h4>示例3：修改封面</h4>--}}
            {{--<label class="col-sm-1" style="padding: 0;">fileId：</label>--}}
            {{--<div class="col-sm-4">--}}
                {{--<input name="fileId" class="form-control">--}}
            {{--</div>--}}
            {{--<div class="col-sm-4">--}}
                {{--<a id="changeCover" href="javascript:void(0);" class="btn btn-outline">修改封面</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row" id="resultBox"></div>

    </div>


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

                        $.ajax({
                            url: '{{ $url['upload'] }}',
                            data: {
                                videoUrl : result.videoUrl,
                                coverUrl : result.coverUrl,
                                videoName : result.videoName,
                                "_token": "{{ csrf_token() }}",
                            },
                            type: 'POST',
                            dataType: 'json',
                            success: function(res){
                                if(res) {
                                    window.location.reload(false);
                                    return res;
                                } else {
                                    return '提交失败了';
                                }

                            }
                        });

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
