@extends('layout')

@section('content')
<body>
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
            <div class="row">
                @foreach ($videos as $video)
                    <x-video-box :video="$video"></x-video-box>
                @endforeach
            </div>

            <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
            <div class="row">
                @foreach ($mostPopularVideos as $video)
                    <x-video-box :video="$video"></x-video-box>
                @endforeach
            </div>

            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
            <div class="row">
                @foreach ($mostViewedVideos as $video)
                    <x-video-box :video="$video"></x-video-box>
                @endforeach
            </div>
        </div><!-- // row -->
@endsection