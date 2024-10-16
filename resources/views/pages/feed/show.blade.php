@extends('layouts.main')

@section('title', 'View List')

@section('content')

    <div class="container">
        {{-- <form action="{{ route('feed.update', ['feed' => $feed->id])}}" method="POST"> --}}
        <form action="" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name ="title" 
                    id="title"
                    {{-- value="{{ old('title', $feed->title)}}" --}}
                    required
                >
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Description</label>
                <textarea 
                    class="form-control" 
                    id="decsription" 
                    name="decsription"
                    cols="30"
                    rows="10"
                    {{-- value="{{ old('decsription', $feed->decsription)}}" --}}
                    >
                </textarea>
            </div>

            <button type="button" class="btn">Click Update</button>
        </form>
    </div>
    
@endsection
