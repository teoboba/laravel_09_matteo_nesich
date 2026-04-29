<x-layout>


<div class="container-fluid">
<div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-6">
        <h2>Contattaci</h2>
        
        <form action="{{ route('contattaci.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Inserisci il tuo nome</label>
                <input name="user" type="text" class="form-control" id="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">la tua Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label" for="exampleCheck1">scrivici il tuo messaggio</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">invia</button>
        </form>
    </div>
</div>

</div>


    
</x-layout>
