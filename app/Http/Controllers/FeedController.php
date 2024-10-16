<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FeedController extends Controller
{
    public function create()
    {
        return view('pages.feed.create');
    }

    // public function show(Feed $feed)
    public function show()
    {

        $feed = "test";
        // dd($feed); // die and dump
        Log::debug("Show feed", ['feed => $feed']);
        return view('pages.feed.show', compact('feed'));
        
    }

    // public function update(Request $request, Feed $feed)
    public function update(Request $request,)
    {
        $request->validate([
            'title' => 'required | string | max:100',
            'description' => 'required | string | max:300'
        ]);

        // $feed->update($validated_request);
        return redirect()->route('feeds');
    }

    public function index()
    {
        return view('pages.feed.index');
    }

   
}
