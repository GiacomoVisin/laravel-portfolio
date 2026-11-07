@extends('layouts.projectsLayout')

@section('title', 'Tutti i progetti')

@section('content')
    <div class="container my-5">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle text-center custom-projects-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Customer</th>
                        <th>Period</th>
                        <th>Summary</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->Customer }}</td>
                            <td>{{ $project->Period }}</td>
                            <td>{{ $project->Summary }}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-dark" href="{{ route('projects.show', $project) }}">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

           <a class="btn btn-primary" href="{{ route('projects.create', $project) }}"> Create new project</a>
    </div>
@endsection