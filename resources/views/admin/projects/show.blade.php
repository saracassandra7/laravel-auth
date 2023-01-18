@extends('layouts.app')

@section('content')

<div class="contanier ms-4">
    <h1>{{$project->name}}</h1>
    <div class="cover_image">
        <img src="{{$project->cover_image}}" alt="{{$project->name}}">
    </div>
    <span>Cliente: {{$project->client_name}}</span>
    <p>Descrizione: {{$project->summary}}</p>

    <a class="btn btn-info my-3" href="{{route('admin.projects.index')}}">Indietro</a>
</div>

@endsection
