@extends('layouts.projectsLayout')

@section('title', 'Index dei Vari controller')

@section('content')

<p> LISTA CATEGORY:</p>

    <ul>
        @foreach ($categories as $category)
            <li> {{ $category->name }}</li>
        @endforeach
    </ul>

     <a class="btn btn-primary" href="{{ route('categories.create', $category) }}"> Create new category</a>

@endsection