<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="/posts/store" method="post">
            @csrf
            <p><input type="text" name="title" placeholder="Title" value={{ old('title') }}></p>
            @error('title')
                <div>{{ $message }}</div>
            @enderror
            <p><textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea></p>
            @error('content')
                <div>{{ $message }}</div>
            @enderror
            <p><button type="submit">submit</button></p>
        </form>
    </div>
</body>
</html>