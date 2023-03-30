@extends('adminlte::page')

@section('title', 'Dashboard | Edit main page item')

@section('content_header')
    <h1>Edit main page item</h1>
@stop

{{--@section('plugins.Summernote', true)--}}

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-6">

                <form method="POST" enctype="multipart/form-data" action="{{ route('mainPageItems.update', $mainPageItem) }}">
                    @method('PUT')
                    @csrf

                    @if($mainPageItem->name === 'main_header')

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">MAIN PAGE HEADER</span>
                            </div>
                            <input value="{{ $mainPageItem->value }}" type="text" name="value" id="value" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                    @elseif($mainPageItem->name === 'main_subheader')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">MAIN PAGE SUBHEADER</span>
                            <textarea name="value" id="value" class="form-control" aria-label="value">{{ $mainPageItem->value }}</textarea>
                        </div>

                    @elseif($mainPageItem->name === 'video_mp4')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">VIDEO MP4</span>
                            <input class="form-control" type="file" name="value" id="value">
                        </div>

                    @elseif($mainPageItem->name === 'video_webm')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">VIDEO WEBM</span>
                            <input class="form-control" type="file" name="value" id="value">
                        </div>

                    @elseif($mainPageItem->name === 'main_bg_image')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">MAIN BACKGROUND IMAGE</span>
                            <input class="form-control" type="file" name="value" id="value">
                        </div>

                    @elseif($mainPageItem->name === 'about_header')

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">ABOUT HEADER</span>
                            </div>
                            <input value="{{ $mainPageItem->value }}" type="text" name="value" id="value" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                    @elseif($mainPageItem->name === 'about_subheader')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">ABOUT SUBHEADER</span>
                            <textarea name="value" id="value" class="form-control" aria-label="value">{{ $mainPageItem->value }}</textarea>
                        </div>

                    @elseif($mainPageItem->name === 'about_text')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">ABOUT TEXT</span>
                            <textarea name="value" id="value" class="form-control" aria-label="value">{{ $mainPageItem->value }}</textarea>
                        </div>

                    @elseif($mainPageItem->name === 'about_image')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">ABOUT IMAGE</span>
                            <input class="form-control" type="file" name="value" id="value">
                        </div>

                    @elseif($mainPageItem->name === 'about_image_small')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">ABOUT IMAGE SMALL</span>
                            <input class="form-control" type="file" name="value" id="value">
                        </div>

                    @elseif($mainPageItem->name === 'services_header')

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">SERVICES HEADER</span>
                            </div>
                            <input value="{{ $mainPageItem->value }}" type="text" name="value" id="value" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                    @elseif($mainPageItem->name === 'achievements_header')

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">ACHIEVEMENTS HEADER</span>
                            </div>
                            <input value="{{ $mainPageItem->value }}" type="text" name="value" id="value" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                    @elseif($mainPageItem->name === 'stars_header')

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">STARS HEADER</span>
                            </div>
                            <input value="{{ $mainPageItem->value }}" type="text" name="value" id="value" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                    @elseif($mainPageItem->name === 'testimonials_header')

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">TESTIMONIALS HEADER</span>
                            </div>
                            <input value="{{ $mainPageItem->value }}" type="text" name="value" id="value" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                    @elseif($mainPageItem->name === 'portfolio_header')

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">PORTFOLIO HEADER</span>
                            </div>
                            <input value="{{ $mainPageItem->value }}" type="text" name="value" id="value" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                    @elseif($mainPageItem->name === 'team_header')

                        <div class="input-group flex-nowrap mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">TEAM HEADER</span>
                            </div>
                            <input value="{{ $mainPageItem->value }}" type="text" name="value" id="value" class="form-control" aria-describedby="addon-wrapping">
                        </div>

                    @elseif($mainPageItem->name === 'calendar_header')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">CALENDAR HEADER</span>
                            <textarea name="value" id="value" class="form-control" aria-label="value">{{ $mainPageItem->value }}</textarea>
                        </div>

                    @elseif($mainPageItem->name === 'calendar_subheader')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">CALENDAR SUBHEADER</span>
                            <textarea name="value" id="value" class="form-control" aria-label="value">{{ $mainPageItem->value }}</textarea>
                        </div>

                    @elseif($mainPageItem->name === 'calendar_image')

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text">CALENDAR IMAGE</span>
                            <input class="form-control" type="file" name="value" id="value">
                        </div>

                    @endif


{{--                    <div class="input-group flex-nowrap mb-3">--}}
{{--                        <span class="input-group-text">IMAGE</span>--}}
{{--                        <input class="form-control" type="file" name="image" id="image">--}}
{{--                    </div>--}}

{{--                    <div class="input-group flex-nowrap mb-3">--}}
{{--                        <span class="input-group-text">IMAGE SMALL</span>--}}
{{--                        <input class="form-control" type="file" name="image_small" id="image_small">--}}
{{--                    </div>--}}

                    <button type="submit" class="btn btn-success">EDIT</button>
                </form>

            </div>

        </div>

    </div>
@stop
