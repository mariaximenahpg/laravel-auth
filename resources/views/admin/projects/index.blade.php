@extends('layouts.admin')
@section('content')
<div class="container">
  <h1>Lista progetti</h1>
  @if(session('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @endif
  <div class="my-4">
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Aggiungi nuovo progetto</a>
  </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome progetto</th>
            <th scope="col">Nome cliente</th>
            {{-- <th scope="col">Descrizione</th> --}}
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project )
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->project_name }}</td>
                <td>{{ $project->client_name }}</td>
                {{-- <td>{{ $project->summary }}</td> --}}
                <td>{{ $project->slug }}</td>
                <td>
                  <a href=" {{ route('admin.projects.show', $project) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                  <a href=" {{ route('admin.projects.edit', $project) }}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                  <form action="{{ route('admin.projects.destroy', $project) }}" class="d-inline-block" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </td>
            </tr> 
            @endforeach
        </tbody>
      </table>
</div>
    
@endsection