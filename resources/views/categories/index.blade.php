@extends('layouts.projectsLayout')

@section('title', 'Index dei Vari category')

@section('content')



    <div class="container my-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle custom-light-table">
                <thead>
                    <tr>
                        <th scope="col" class="w-25">Category Name</th>
                        <th scope="col" class="w-75">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="fw-bold text-dark">{{ $category->name }}</td>
                            <td class="fw-bold text-dark">{{ $category->description }}</td>
                            <td> <a class="btn btn-outline-primary" href="{{ route('categories.show', $category)}}"> View
                                    Category </a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a class="btn btn-primary" href="{{ route('categories.create', $category) }}"> Create new category</a>
        </div>


    </div>



@endsection