<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
 @foreach($theme as $key=>$val)
       {{$val->id}}
 <a href="/cc/activity/{{$val->id}}">{{$val->title}}</a>
       {{$val->description}}
 @endforeach
</body>
</html>