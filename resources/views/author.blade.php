<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="flex justify-between">
        <div class="p-4">First name</div>
        <div class="p-4">{{ $author->first_name }}
        </div>
    </div>
    <div class="flex justify-between">
        <div class="p-4">Last name</div>
        <div class="p-4">{{ $author->last_name }}</div>
    </div>
    <div class="flex justify-between">
        <div class="p-4">Books:</div>
        <div>@foreach($author->books as $book)
            <div class="p-4">{{ $book ->title}}</div>
            @endforeach
        </div>
    </div>
</body>

</html>
