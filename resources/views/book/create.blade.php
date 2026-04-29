<x-layout>
    <h1>Inserisci un nuovo libro</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title">Titolo:</label>
            <input type="text" name="titolo" id="title" value="{{ old('titolo') }}">
        </div>
        <div class="mb-3">
            <label for="author">Autore:</label>
            <input type="text" name="autore" id="author" value="{{ old('autore') }}">
        </div>
        <div class="mb-3">  
            <label for="published_year">Anno di pubblicazione:</label>
            <input type="number" name="published_year" id="published_year" value="{{ old('published_year') }}">
        </div>
         <div class="mb-3">
            <label for="img">Inserisci un immagine</label>
            <input type="file" name="img" id="img">
        </div>
        <button type="submit">Inserisci libro</button>
    </form>
</x-layout>