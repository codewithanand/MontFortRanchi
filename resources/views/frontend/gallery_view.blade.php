@extends('layouts.app')

@section('title', 'Gallery - ' . $gallery->name)

@section('styles')
@endsection

@section('content')

    <!-- Carousel wrapper -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{ $gallery->name }}</h1>
        @if ($gallery->count() > 0)
            <div class="row mb-4">
                <div class="col-12">
                    <div class="carousel-container">
                        <span class="arrow-button left" id="prevBtn"><i class="fa-solid fa-chevron-left"></i></span>
                        <img id="mainImage" src="" class="img-fluid rounded" alt="Main Image">
                        <span class="arrow-button right" id="nextBtn"><i class="fa-solid fa-chevron-right"></i></span>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 d-flex justify-content-center">
                    <div class="d-flex flex-wrap" id="img-thumbnail-container">
                        @foreach ($images as $index => $img)
                            <img class="img-thumbnail mx-2 related-image" data-index="{{ $index }}"
                                src="{{ asset('storage/' . $img->image) }}" alt="{{ $img->caption }}">
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        const images = @json($images);
        let currentIndex = 0;
        const mainImage = document.getElementById('mainImage');
        const imageContainer = document.getElementById('img-thumbnail-container');

        function populateThumbnails() {
            updateImage(currentIndex); // Update image and highlight after populating
        }

        function updateImage(index) {
            mainImage.src = "http://localhost:8000/storage/" + images[index].image;
            const relatedImages = document.querySelectorAll('.related-image');
            relatedImages.forEach((img, i) => {
                img.classList.toggle('active', i === index);
            });
        }

        document.getElementById('prevBtn').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateImage(currentIndex);
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateImage(currentIndex);
        });

        imageContainer.addEventListener('click', (event) => {
            if (event.target.classList.contains('related-image')) {
                currentIndex = parseInt(event.target.getAttribute('data-index'), 10);
                updateImage(currentIndex);
            }
        });

        // Initialize with the first image
        populateThumbnails();
    </script>
@endsection
