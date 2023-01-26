@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="py-4">
        <h1>{{ $project->project_name }}</h1>
        <div class="mt-4">
            {{ $project->summary }}
        </div>
    </div>
</div>
@endsection