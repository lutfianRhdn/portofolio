<li>
    <section class="grid">
        <div class="small-box project">
            <a href="{{ route('project', 10) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_ten')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_ten')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 1) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_one')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_one')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 2) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_two')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_two')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 3) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_three')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_three')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 4) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_four')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_four')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 5) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_five')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_five')->first()->content }}
                </div>
            </a>
        </div>
        <div class="big-box project">
            <a href="{{ route('project', 6) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_six')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_six')->first()->content }}
                </div>
            </a>
        </div>
        <div class="brand">
            <div>
                <a href="{{ route('about') }}"
                    class="w-100 h-100 text-decoration-none d-flex justify-content-center align-items-center bg-black">
                    <div class="text-white ls-lg h1 mb-0 ml-2">
                        {{ $slideTwo->where('name', 'website_name')->first()->content }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('news') }}" class="w-100 h-100 text-decoration-none d-flex bg-black px-4 py-4">
                    <div class="text-white small font-weight-light">
                        {{ $slideTwo->where('name', 'website_info')->first()->content }}
                    </div>
                </a>
            </div>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 11) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_eleven')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_eleven')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 7) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_seven')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_seven')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 8) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_eight')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_eight')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 9) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_nine')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_nine')->first()->content }}
                </div>
            </a>
        </div>
    </section>
</li>