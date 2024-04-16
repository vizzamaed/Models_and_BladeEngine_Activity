@include('partials.header')

<div class="container mx-auto px-4">
    <h1>Books List</h1>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>id</th>
                <th>ISBN</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials.footer')
