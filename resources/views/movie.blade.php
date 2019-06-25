{{-- @extends('main') --}}

<section class="movie">
    <div class="movie__info">
        <div class="movie__poster">
            <img class="movie__poster-image" alt="постер" src="{{ $movie->image_link }}">
        </div>
        <div class="movie__description">
            <h2 class="movie__title">{{ $movie->title }}</h2>
            <p class="movie__synopsis">{{ $movie->description }}</p>
            <p class="movie__data">
                <span class="movie__data-duration">{{ $movie->duration_time }} минут</span>
                <span class="movie__data-origin"></span>
            </p>
        </div>
    </div>

    
</section>