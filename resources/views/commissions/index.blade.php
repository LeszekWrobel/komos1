@extends('layouts.app')

@section('content')
<h1> Komis</h1>

    @if (route('login') )
       
        <div class="col-12 g-3">
            <button class="btn btn-primary" type="submmit">Dodaj ogłoszenie</button>
        </div>

    @endif                


@endsection
