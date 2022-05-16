@extends('layouts.app')

@section('title', 'Train')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ps-4">
                <h1>Ecco le informazioni che ha cercato!</h1>
                <a href="{{ route('posts.index') }}">Home</a>
            </div>
            <div class="col-4">
                <div class="card p-3 m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Azienda: {{ $train->azienda }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Codice Treno: {{ $train->Codice_Treno }}</h6>
                        <p class="card-text">Stazione di partenza: {{ $train->Stazione_di_partenza }}</p>
                        <p class="card-text">Stazione di arrivo: {{ $train->Stazione_di_arrivo }}</p>
                        <p class="card-text">Orario_di_partenza: {{ $train->Orario_di_partenza }}</p>
                        <p class="card-text">Orario_di_arrivo: {{ $train->Orario_di_arrivo }}</p>
                        <p class="card-text">Numero_Carrozze: {{ $train->Numero_Carrozze }}</p>
                        <p class="card-text">In_orario: {{ $train->In_orario }}</p>
                        <p class="card-text">Cancellato: {{ $train->Cancellato }}</p>
                        <a href="#" class="btn btn-primary">Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection