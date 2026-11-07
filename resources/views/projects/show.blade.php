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
                <p> <strong>Category:</strong> {{ $project->category->name }} </p>
                
                <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}"> Edit project</a>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina
                </button>

                <hr>
                <a href="{{ route('projects.index') }}">Back to Projects</a>
            </div>
        </div>
    </div>

    <div class="modal fade"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Elimina</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    Vuoi eliminare il progetto definitivamente?


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route("projects.destroy", $project) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-outline-danger" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


<!--  <form action="{{ route("projects.destroy", $project) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-outline-danger mb-3" value="Elimina">
                    </form> -->