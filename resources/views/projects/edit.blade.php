@extends ('layouts.projectsLayout')

@section('title', 'Modifica del progetto ' . $project->id)

@section('content')
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method("PUT")


        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Project Name</label>
            <input type="text" name="name" id="name" value="{{ $project->name }}" required>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="Customer">Customer</label>
            <input type="text" name="Customer" id="Customer" value="{{ $project->Customer }}" required>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="Period">Period</label>
            <input type="date" name="Period" id="Period" value="{{ $project->Period }}" required>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="Summary">Summary</label>
            <textarea name="Summary" id="Summary" required> {{ $project->Summary }} </textarea>
        </div>
        <input type="submit" value="Modify Project">
    </form>


@endsection