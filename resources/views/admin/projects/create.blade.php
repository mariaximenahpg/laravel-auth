@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="py-4">
        <h1>Aggiungi nuovo progetto</h1>
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
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="project_name" class="form-label">Nome del nuovo progetto</label>
                  <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Inserisci il nome del nuovo progetto">
                </div>
                <div class="mb-3">
                    <label for="client_name" class="form-label">Nome del cliente</label>
                    <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Inserisci il nome del cliente">
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">Dettagli</label>
                    <textarea class="form-control" name="summary" id="summary" rows="10" placeholder="Inserisci una breve descrizione"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
</div>
@endsection