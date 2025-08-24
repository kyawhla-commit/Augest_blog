@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 800px">
            <div class="card mb-3 border-primary"> 
                <div class="card-body ">
                    <h4 class="card-title">{{ $article->title }}</h4>
                    <div class="text-muted">
                        {{ $article->created_at}}
                    </div>
                    <p>
                        {{ $article->body }}
                    </p>
                    <a href="{{ url("/articles") }}" class=" btn btn-outline-primary ">Back</a>
                    <a href="{{ url("/articles/delete/$article->id") }}" class="card-link btn btn-outline-danger ">Delete</a>
                </div>
            </div>
        
    </div>
@endsection