<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="https://picsum.photos/200/300" class="img-fluid rounded shadow" alt="immagine libro">
            </div>
            <div class="col-md-8">
                <h1>{{ $book['titolo'] }}</h1>
                <h3>Autore : {{ $book['autore'] }}</h3>
                <p>ID libro : {{$book['id'] }}</p>
            </div>
        </div>
    </div>
</x-layout>