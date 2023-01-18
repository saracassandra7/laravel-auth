@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="m-3 text-center">Elenco Progetti</h1>
    <a class="btn btn-primary text-white mb-5" href="{{route('admin.projects.create')}}">Crea nuovo progetto</a>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Cliente</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project )
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->client_name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}" title="show"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-warning " href="{{route('admin.projects.edit', $project)}}" title="edit"><i class="fa-solid fa-pencil"></i></a>
                </td>
            </tr>

            @empty
            <h2>Nessun progetto trovato</h2>
            @endforelse

        </tbody>
    </table>

    {{$projects->links()}}

</div>

@endsection
