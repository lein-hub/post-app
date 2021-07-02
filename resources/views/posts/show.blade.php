<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('posts.index', ['page'=>$currentPage]) }}">목록 보기</a><br>
    {{ $post->content }}<br>
    {{ $post->created_at->diffForHumans() }}
</body>
</html>