<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideoRequest;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();

        return $videos;
    }

    public function create()
    {
        return view('/videos/create');
    }

    public function store(StoreVideoRequest $request)
    {
        Video::create($request->all());
        return redirect()->route('index')->with('alert', __('message.success'));
    }
    public function show(Request $request, int $id)
    {
        $video = Video::find($id);
        return view('videos.show', compact('video'));
    }
}
