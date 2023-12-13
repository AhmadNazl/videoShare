@extends('layout')
@section('content')
    <div id="all-output" class="col-md-10 upload">
        <div id="upload">
            <div class="row">
                <!-- upload -->
                <x-validation-errors></x-validation-errors>
                <div class="col-md-8">
                    <h1 class="page-title"><span>آپلود</span> فیلم</h1>
                    <form method="POST" action="{{ route('videos.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>@lang('videos.name')</label>
                                <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="@lang('videos.name')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.length')</label>
                                <input name="length" type="text" value="{{ old('length') "}} class="form-control" placeholder="@lang('videos.length')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.slug')</label>
                                <input name="slug" type="text" value="{{ old('slug') }}" class="form-control" placeholder="@lang('videos.slug')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.url')</label>
                                <input name="url" type="text" value="{{ old('url') }} "class="form-control" placeholder="@lang('videos.url')">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.thumbnail')</label>
                                <input name="thumbnail" type="text" value="{{ old('thumbnail"') }} class="form-control" placeholder="@lang('videos.thumbnail')">
                            </div>
                            <div class="col-md-12">
                                <label>@lang('videos.description')</label>
                                <textarea name="description" value="{{ old('descripti"on') }} class="form-control" rows="4"  placeholder="@lang('videos.description')"></textarea>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                            </div>
                        </div>
                    </form>
                </div><!-- // col-md-8 -->

                <div class="col-md-4">
                    <a href="#"><img src="demo_img/upload-adv.png" alt=""></a>
                </div><!-- // col-md-8 -->
                <!-- // upload -->
            </div><!-- // row -->
        </div><!-- // upload -->
    </div>
@endsection
        