@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 800px">

        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $item)
                    {{ $item }}
                @endforeach
            </div>
        @endif
        <form method="post">

            @csrf
            <input type="text" name="title" placeholder="Title" class="form-control mb-2">
            <textarea name="body" placeholder="Write Your Thought" class="form-control mb-2"></textarea>
            <select name="category_id" class="form-select mb-2">
                <option value="1">News</option>
                <option value="2">Tech</option>
            </select>

            <button class="btn btn-primary">Add Article</button>
        </form>
    </div>
@endsection
