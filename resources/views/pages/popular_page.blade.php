@extends('layout.master')

@section('title', 'Popuar Page')


@section('content')
    @foreach ($posts as $item)
        <div class="d-flex mt-5 justify-content-center">
            <div class="col-md-10 col-lg-8 mb-4">
                
                <div class="d-md-flex flex-md-row"> 
                    
                    <div class="col-md-4 rounded shadow-sm overflow-hidden me-md-4 mb-3 mb-md-0">
                        <img src="{{ $item->image }}" class="img-fluid rounded h-100 w-100" alt="Post Image" style="object-fit: cover;">
                    </div>

                    <div class="col-md-8 d-flex flex-column p-4">
                        <h3 class="post-title">{{ $item->title }}</h3>
                        <p class="post-date text-muted">
                            {{ ($item->published_at) }} | By: {{ $item->writer->name }}
                        </p>
                            
                        <p class="card-text flex-grow-1">{{ Str::limit($item->content, 200, '...') }}</p>
                            
                        <div class="mt-auto pt-3">
                            <div class="text-end"> 
                                <a href="/detail/{{ $item->id }}" class="btn  rounded-pill" style="background-color: #071026; color: white;">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="justify-content-center d-flex pb-5">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>
@endsection