@extends('layout.master')

@section('title', 'MultiMedia Page')

@section('content')
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
                                    <a href="#" class="btn btn-sm btn-primary">Read More</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection