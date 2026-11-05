@extends('layouts.projectsLayout')



@section('title', 'Progetto con id: ' . $project->id)


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2> Project name: {{ $project->name }} </h2>
            </div>
            <div class="card-body">
                <p> <strong>Customer:</strong> {{ $project->Customer }} </p>
                <p> <strong>Period:</strong> {{ $project->Period }} </p>
            </div>
            <div class="card-footer">
                <p> <strong>Summary:</strong> {{ $project->Summary }} </p>
                <a href="{{ route('projects.index') }}">Back to Projects</a>
            </div>
        </div>
    </div>
@endsection