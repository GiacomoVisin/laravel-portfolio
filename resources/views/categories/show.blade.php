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
                 <a class="btn btn-primary mt-4" href="{{ route('categories.index', $category) }}"> Back to the index</a>
            </div>
            

@endsection