@extends('layouts.projectsLayout')

@section('title', 'Progetto con id: ' . $category->id)

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2> Category name: {{ $category->name }} </h2>
            </div>
            <div class="card-body">
                <p> <strong>Description: </strong>{{ $category->description }} </p>
            </div>
            <div>

                <a class="btn btn-primary mt-4" href="{{ route('categories.edit', $category) }}"> Edit category</a>


                <button type="button" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Elimina
                </button>

            </div>

            <hr>
            <a  style="color:black;" href="{{ route('categories.index') }}">Back to categories</a>
        </div>
    </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Elimina</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    Vuoi eliminare la categoria definitivamente?


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route("categories.destroy", $category) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-outline-danger" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection