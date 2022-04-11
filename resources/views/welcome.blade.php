@extends('layouts.app')

@section('content')

    @if (route('login') )
       <form class="row m-3" method="GET" action="/home" enctype="multipart-data">
        {{csrf_field()}}

            <div class="col-12 g-3">
                <button class="btn btn-primary" type="submmit">Dodaj ogłoszenie</button>
            </div>
        </form>
    @endif
    
     <div>welcom page</div>

    @foreach($commissions as $commission)
    <ul>
        <li>{{$commission}}</li>
        <li>Tytuł ogłoszenia : {{$commission->title}}</li>
        <li>Opis : {{$commission->description}}</li>
        <li>Dodano dnia : {{$commission->created_at}}</li>
    </ul>
    @endforeach

@endsection

