@extends('layouts.app')

@section('title', 'Trains')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ps-4">
                <h1>Trains:</h1>
                @dump($trains)
            </div>
            <div class="col-4">
                <div class="card p-3 m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text"></p>
                        <p class="card-text"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection