<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>New book</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title goes here" value="{{ old('title') }}">
        <input type="text" name="author" placeholder="Author goes here" value="{{ old('author') }}">
        <input type="date" name="released_at" placeholder="Date goes here" value="{{ old('released_at') }}">
        <input type="submit" value="Create">
    </form>
</body>
</html>
