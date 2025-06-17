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
                
                    
                    <h2>Title: {{ $singleBook->title }}</h2>
                    <h3>Author: {{ $singleBook->author }}</h3>  
                    <p>Release date: {{ $singleBook->released_at }}</p>

                    <x-danger-button style="background: rgb(177, 93, 180);"><a href="{{ route('book.index') }}">All books</a></x-danger-button>
                
                    <form action="{{ route('book.destroy', $singleBook->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-danger-button>=Delete=</x-danger-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>