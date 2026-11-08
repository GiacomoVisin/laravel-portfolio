@extends ('layouts.projectsLayout')

@section('title', 'Modifica Category')

@section('content')
    <form action="{{ route('categories.update',$category) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}" required>
        </div>
         <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Category Description</label>
            <input type="text" name="description" id="description" value="{{ $category->description }}" required>
        </div>


        <input type="submit" value="Modify Category">
    </form>

@endsection