<x-layout>
    <div class="container">
    <h1 class="my-4">I nostri Libri</h1>
    <div class="row">
        @foreach ($books as $book)
        <div class="card mb-4">
            <div class="card-body">
                <h3>{{$book['titolo']}}</h3>
                <p>{{$book['autore']}}</p>
                <a href="{{ route('book.show', ['id' => $book['id']])}}" class="btn btn-primary">dettaglio</a>
            </div>
        </div>
        @endforeach

    </div>
    </div>
</x-layout>