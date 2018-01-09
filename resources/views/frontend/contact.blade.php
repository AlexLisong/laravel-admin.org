@extends('frontend.layouts.app')

@section('title', app_name() . ' | Contact Us')

@section('content')
    <div class="controlPanel">
        <button id="go">Run</button>
    </div>

    <textarea type="text" id="js" placeholder="javascript">
    var index = 0;
    var loop = setInterval(function(){
    $('#index').html('Frame '+index);
    index++;
    $('#frame').attr("src","/images/"+index+".jpg");
    if(index == 142){
    clearInterval(loop);
  }
}, 135);

</textarea>

    <iframe id='frame1' src="javascript:false;"></iframe>
    <textarea type="text"  id="html" placeholder="html">
  <img src="" id="frame" width="100%;">
  <p id="index"></p>
</textarea>
    <textarea type="text" id="css" placeholder="css"></textarea>
@endsection