<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
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
                        <x-danger-button style="background: rgb(54, 153, 34);"><input type="submit" value="Create"></x-danger-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>
