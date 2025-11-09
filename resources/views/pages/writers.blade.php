@extends('layout.master')

@section('title', 'Writers Page')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Daftar Penulis Kami</h2>
        
        <div class="row">
            @foreach ($posts as $authorName => $authorPosts) 
                
                <div class="col-md-4 mb-4">
                    <div class="card text-center h-100 shadow-sm border-0">
                        <div class="card-body">
                            <a href="/author/{{ $authorName }}" class="text-decoration-none text-dark">
                                <div class="mb-3">
                                    <img src="/images/user_icon.png" alt="" style="max-width: 50%">
                                </div>
                                
                                <h5 class="card-title">{{ $authorName }}</h5>
                                
                                <p class="card-text text-muted">
                                    {{ count($authorPosts) }} Postingan
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection