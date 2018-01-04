<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@foreach($activities as $key=>$val)
    {{$val->id}} -
    <a href="/cc/activity/{{$val->id}}">{{$val->title}}</a> - {{$val->description}} - {{isset($val->Theme->title) ? $val->Theme->title : ''}} - {{$val->example}} - {{$val->solution_sheet}} - {{$val->showcase}} - {{$val->lesson_plan}} - <br />
@endforeach
</body>
</html>