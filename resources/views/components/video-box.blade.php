<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <div class="hover-efect"></div>
            <small class="time">{{ $video->lengthInHuman }}</small>
            <a href="#"><img src="{{ $video->thumbnail }}" alt=""></a>
        </div>
        <div class="video-info">
            <a class="channel-name" title="{{ $video->description }}" href="{{route('videos.show', $video->slug)}}">{{ $video->name }}<span>
                <a class="channel-name" href="{{route('videos.edit', $video->slug)}}"><span>
                    <i class="fa fa-pencil" style="color: black" aria-hidden="true"></i>
                </a>
                    <i class="fa fa-check-circle"></i></span></a>
            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
            <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at }}</span>
        </div>
    </div>
</div>