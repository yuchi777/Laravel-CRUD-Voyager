<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        {{menu('frontend')}}
    </nav>
    <div style="padding: 10%">
        @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <img src="{{asset('storage/'.$post->image)}}" alt="" width="150">
        <div>
            {!!$post->body!!}
        </div>
        @endforeach
    </div>
</body>
</html>