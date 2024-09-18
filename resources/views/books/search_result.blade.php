@if ($books->isEmpty())
    <p>No books found.</p>
@else
    @foreach ($books as $book)
        <div class="bg-blue-50 border rounded shadow-md p-4 mb-4 hover:bg-blue-500">
            <h3 class="font-bold text-lg mb-4">Title: {{ $book->title }}</h3>
            <h4>Author: {{ $book->author }}</h4>

            <div class="mt-4">
                <a href="/books/{{ $book->id }}" class="bg-gray-800 p-2 rounded text-white">View Book</a>
            </div>
        </div>
    @endforeach
@endif
