@extends('layout.master')

@section('title', $post->title) 

@section('content')
    <div class="row mt-3 justify-content-center">
        <div class="col-lg-8 col-md-10"> 
            
            <div class="card mb-4 shadow-sm"> 
                
                <div class="card-header text-center bg-white border-bottom-0 pt-4">
                    <h1 class="card-title mb-1">{{ $post->title }}</h1>
                    <p class="card-text">
                        <small class="text-muted">
                            Published on {{ $post->published_at }} | By: {{ $post->author }}
                        </small>
                    </p>
                </div>

                {{-- 2. FOTO DI TENGAH --}}
                <div class="text-center p-3">
                    <img 
                        src="{{ $post->image }}" 
                        class="img-fluid rounded shadow-sm" 
                        alt="Post Image" 
                        style="max-height: 500px; object-fit: cover;"
                    >
                </div>
                
                {{-- 3. CONTENT --}}
                <div class="card-body pt-0">
                    <hr>
                    <div class="card-text text-justify">
                        {{ $post->content }}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection