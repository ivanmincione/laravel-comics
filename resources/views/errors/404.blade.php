@extends('layouts.app')

@section('page-title', 'Error Comic - Laravel DC Comics')

@section('content')
    @include('partials.jumbotron')

    <h1>Ops !! Questa pagina non è stata trovata ...</h1>

    <div class="uppercase btn-homepage">
        <a href=" {{ route("homepage")}}">Homepage</a>
    </div>

@endsection
