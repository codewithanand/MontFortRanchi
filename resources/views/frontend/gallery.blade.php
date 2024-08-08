@extends('layouts.app')

@section('title', 'Gallery')

@section('styles')

@endsection

@section('content')
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px;">
                <h3 class="display-4 text-white text-uppercase">Gallery</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white">Home</a></p>/
                    <p class="m-0 text-uppercase">Gallery</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5_">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-4">Gallery</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($galleries as $gallery)
                    @if ($gallery->images->count() > 0)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card gallery-item">
                                <a href="{{ url('/gallery/' . $gallery->slug) }}" style="text-decoration: none;">
                                    <img src="{{ asset('storage/' . $gallery->images[0]->image) }}" class="card-img-top"
                                        alt="Image 1">
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="text-decoration: none;">
                                            {{ $gallery->name }}
                                        </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
