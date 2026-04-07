<x-layout>
    <h1>Benvenuti nel mio Blog di Libracci</h1>
    <p>Questa è la home del progetto.</p>


<div class="container-fluid">

@if(session()->has('emailSent'))
    <div class="alert alert-success">
        {{ session('emailSent') }}
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</div>


</x-layout>