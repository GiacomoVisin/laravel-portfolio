@extends ('layouts.projectsLayout')

@section('title', 'Crea un nuovo progetto')

@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf


        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Project Name</label>
            <input type="text" name="name" id="name" required>
        </div>


        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Category</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach
            </select>
        </div>



        <div class="form-control mb-3 d-flex flex-column">
            <label for="Customer">Customer</label>
            <input type="text" name="Customer" id="Customer" required>
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="Period">Period</label>
            <input type="date" name="Period" id="Period" required>
        </div>
        <div class="form-control mb-3 d-flex flex-wrap">

            <p style="margin-right: 1rem;"> Technology:</p>

            @foreach ($technologies as $technology)
                <div class="tag me-2">
                    <input type="checkbox" name="technologies[]" value="{{ $technology->id }}" id="tag-{{ $technology->id }}">
                    <label for="tag-{{ $technology->id }}">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Technology Description</label>
            <input type="text" name="description" id="description" required>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="Summary">Summary</label>
            <textarea name="Summary" id="Summary" required> </textarea>
        </div>


        <input type="submit" value="Create Project">
    </form>


@endsection