@extends('layout.master')

@section('title', 'Home Page')

@section('content')
    <div>
        <img src="/images/hero.jpg" alt="Hero Image" class="img-fluid rounded shadow-sm" style="width: 100%; height: 400px; object-fit: cover;">
    </div>
    <div class="row mt-3">
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
    </div>
@endsection