@extends ('layouts.projectsLayout')

@section('title', 'Crea un nuovo progetto')

@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf


        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <input type="submit" value="Create Project">
    </form>

@endsection