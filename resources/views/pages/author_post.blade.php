@extends('layout.master')

@section('title', 'Postingan oleh ' . $authorName)

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">📚 All Posts by: {{ $authorName }}</h2>
        
        <div class="row mt-3">
            
            @if ($posts->isEmpty())
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        No posts found for this author.
                    </div>
                </div>
            @else

               @foreach ($posts as $item)
                    <div class="card mb-4"> 
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $item->image }}" class="img-fluid rounded-start" alt="Post Image" style="height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Published on {{ ($item->published_at) }} | By: {{ $item->author }}
                                        </small>
                                    </p>
                                    
                                    <p class="card-text">{{ Str::limit($item->content, 200, '...') }}</p>
                                    
                                    <div class="card-body">
                                        <div class="text-end"> 
                                            <a href="/detail/{{ $item->id }}" class="btn btn-sm btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection