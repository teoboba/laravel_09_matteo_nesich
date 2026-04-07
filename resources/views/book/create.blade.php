<x-layout>
    <h1>Inserisci un nuovo libro</h1>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Titolo:</label>
            <input type="text" name="titolo" id="title" required>
        </div>
        <div class="mb-3">
            <label for="author">Autore:</label>
            <input type="text" name="autore" id="author" required>
        </div>
        <div class="mb-3">  
            <label for="published_year">Anno di pubblicazione:</label>
            <input type="number" name="published_year" id="published_year" required>
        </div>
        <button type="submit">Inserisci libro</button>
    </form>
</x-layout>