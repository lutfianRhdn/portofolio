@extends('main.app', ['title' => 'HOME'])

@section('content')

<div class="mx-4 mt-3">
    <div class="flexslider slider-home m-0" id="home-slider">
        <ul class="slides ">
            @foreach ($randomSlide as $slide)
            @include($slide)
            @endforeach
        </ul>
        <div class="custom-navigation">
            <a href="#" class="flex-prev text-black-transparant">
                <i class="fas fa-chevron-left fa-3x"></i>
            </a>
            <div class="custom-controls-container"></div>
            <a href="#" class="flex-next text-black-transparant">
                <i class="fas fa-chevron-right fa-3x"></i>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <!-- for icon -->
    </div>
</div>

@endsection