@extends('layout.master')

@section('title', $post->title) 

@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8 col-md-10"> 
            
            <div class="mb-4"> 
                
                <div class="pt-4 px-4">
                    <h1 class="mb-1">{{ $post->title }}</h1>
                    <p class="mb-3" style="font-size: 12px; color: gray;">
                        {{ $post->published_at }} | By: {{ $post->writer->name }}
                    </p>
                </div>

                <div class="text-center p-3">
                    <img 
                        src="{{ $post->image }}" 
                        class="img-fluid rounded" 
                        alt="Post Image" 
                        style="
                            max-width: 75%; /* Membuat foto tampak medium */
                            height: auto; 
                            max-height: 500px; 
                            object-fit: cover;
                        "
                    >
                </div>
                
                <div class="pt-0 px-4">
                    <hr>
                    <div class="text-justify">
                        {!! $post->content !!} 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection