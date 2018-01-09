<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@foreach($chapters as $key=>$val)
    <a href="/chapter/{{$val->id}}">{{$val->id}}</a> - {{$val->video}} - {{$val->content}} - {{$val->iframe_url}}<br />
@endforeach
</body>
</html>