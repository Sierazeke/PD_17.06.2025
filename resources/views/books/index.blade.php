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
                    @if (session('status'))
                        <div>
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-danger-button style="background: rgb(59, 200, 40);"><a href="{{ route('book.create') }}">Create a book</a></x-danger-button>
                    <ul>
                        @foreach($books as $book)
                            <li>
                                <h2>Title: {{ $book->title }}</h2>
                                <h2>Author: {{ $book->author }}</h2>
                                <h2>Release date: {{ $book->released_at }}</h2>
                                <div>
                                    <x-danger-button style="background: rgb(55, 40, 200);"><a href="{{ route('book.show', $book) }}">Show</a></x-danger-button>
                                    <x-danger-button style="background: rgb(39, 189, 119);"><a href="{{ route('book.edit', $book) }}">Edit</a></x-danger-button>
                                </div>
                            </li>
                        @endforeach
                    </ul>     
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>