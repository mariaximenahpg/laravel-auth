@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="py-4">
        <h1>Modifica: "{{ $project->projet_name }}"</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mt-4">
            <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="project_name" class="form-label">Nome del nuovo progetto</label>
                  <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Inserisci il nome del nuovo progetto" value="{{ old('project_name', $project->project_name)}}">
                </div>
                <div class="mb-3">
                    <label for="client_name" class="form-label">Nome del cliente</label>
                    <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Inserisci il nome del cliente" value="{{ old('client_name', $project->client_name)}}">
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">Dettagli</label>
                    <textarea class="form-control" name="summary" id="summary" rows="10" placeholder="Inserisci una breve descrizione" value="{{ old('summary', $project->summary)}}"></textarea>
                    {{-- non appare il contenuto da modificare-rivedere questo passaggio --}}
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
</div>
@endsection