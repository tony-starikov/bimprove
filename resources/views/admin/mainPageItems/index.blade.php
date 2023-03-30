@extends('adminlte::page')

@section('title', 'Dashboard | Main Page Settings')

@section('content_header')
    <h1>Main Page Settings</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                @foreach($mainPageItems as $mainPageItem)
                    @if($mainPageItem->name === 'main_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">MAIN PAGE HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'main_subheader')
                        <div class="card">
                            <div class="card-body">
                                {{--                                <div class="row">--}}
                                {{--                                    <div class="col-6">--}}
                                {{--                                        <img src="/images/{{ $star->image }}" class="img-fluid w-100">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-6">--}}
                                {{--                                        <img src="/images/{{ $star->image_small }}" class="img-fluid w-100">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <h2 class="text-uppercase mt-3">MAIN PAGE SUBHEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                                {{--                                <h6>{{ $star->description_en }}</h6>--}}
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'video_mp4')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">VIDEO MP4</h2>
                                <video
                                    id="my-video"
                                    class="video-js w-100"
                                    height="100%"
                                    width="100%"
                                    controls
                                    loop
                                    muted
                                    autoplay
                                    preload="auto"
                                    poster="MY_VIDEO_POSTER.jpg"
                                    data-setup="{}"
                                >
                                    <source src="/images/{{ $mainPageItem->value }}" type="video/mp4" />
{{--                                    <source src="/images/{{ $mainPageItem->value }}" type="video/webm" />--}}
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                                        >supports HTML5 video</a
                                        >
                                    </p>
                                </video>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block mt-5" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'video_webm')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">VIDEO WEBM</h2>
                                <video
                                    id="my-video"
                                    class="video-js w-100"
                                    height="100%"
                                    width="100%"
                                    controls
                                    loop
                                    muted
                                    autoplay
                                    preload="auto"
                                    poster="MY_VIDEO_POSTER.jpg"
                                    data-setup="{}"
                                >
{{--                                    <source src="/images/{{ $mainPageItem->value }}" type="video/mp4" />--}}
                                    <source src="/images/{{ $mainPageItem->value }}" type="video/webm" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                                        >supports HTML5 video</a
                                        >
                                    </p>
                                </video>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block mt-5" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'main_bg_image')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">MAIN BACKGROUND IMAGE</h2>
                                <img src="/images/{{ $mainPageItem->value }}" class="img-fluid w-100 bg-dark" alt="team_photo">
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'about_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">ABOUT HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'about_subheader')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">ABOUT SUBHEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'about_text')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">ABOUT TEXT</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'about_image')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">ABOUT IMAGE</h2>
                                <img src="/images/{{ $mainPageItem->value }}" class="img-fluid w-100" alt="team_photo">
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'about_image_small')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">ABOUT IMAGE SMALL</h2>
                                <img src="/images/{{ $mainPageItem->value }}" class="img-fluid w-100" alt="team_photo">
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'services_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">SERVICES HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'achievements_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">ACHIEVEMENTS HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'stars_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">STARS HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'testimonials_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">TESTIMONIALS HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'portfolio_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">PORTFOLIO HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'team_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">TEAM HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'calendar_header')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">CALENDAR HEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'calendar_subheader')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">CALENDAR SUBHEADER</h2>
                                <h4 class="mt-3">{{ $mainPageItem->value }}</h4>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @elseif($mainPageItem->name === 'calendar_image')
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-uppercase mt-3">CALENDAR IMAGE</h2>
                                <img src="/images/{{ $mainPageItem->value }}" class="img-fluid w-100 bg-dark" alt="team_photo">
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-secondary d-inline-block" type="button" href="{{ route('mainPageItems.edit', $mainPageItem) }}">
                                    EDIT
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@stop
