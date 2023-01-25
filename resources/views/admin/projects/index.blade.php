@extends('layouts.admin')
@section('content')
<h1>Lista progetti</h1>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome progetto</th>
            <th scope="col">Nome cliente</th>
            <th scope="col">Descrizione</th>
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
                <td>{{ $project->summary }}</td>
                <td>{{ $project->slug }}</td>
                <td>...</td>
            </tr> 
            @endforeach
        </tbody>
      </table>
</div>
    
@endsection