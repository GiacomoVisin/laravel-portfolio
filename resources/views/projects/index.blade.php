@extends('layouts.projectsLayout')



@section('title', 'Tutti i progetti')


@section('content')
    <table>
        <thead>
            <tr>
                <th> Name </th>
                <th> Customer </th>
                <th> Period </th>
                <th> Summary </th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td> {{ $project->name }} </td>
                    <td> {{ $project->Customer }} </td>
                    <td> {{ $project->Period }} </td>
                    <td> {{ $project->Summary }} </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection