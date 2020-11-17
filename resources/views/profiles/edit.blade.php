@extends('layouts.app')

@section('content')
    <h1>Edit Profile</h1>
    <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" name="title" type="text" class="form-control 
                @error('title') 
                is-invalid @enderror" 
                value="{{ $user->profile->title }}"
                required autocomplete="title" autofocus>

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input id="description" name="description" type="text" class="form-control 
                @error('description') 
                is-invalid @enderror" 
                value="{{ $user->profile->description }}"
                required autocomplete="description">

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input id="url" name="url" type="text" class="form-control 
                @error('url') 
                is-invalid @enderror" 
                value="{{ $user->profile->url }}"
                required autocomplete="url">

            @error('url')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Profile image</label>
            <input type="file" name="image" id="image" class="form-control-file">

            @error ('image')
                <strong class="mt-2 text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <button class="btn btn-primary">
            Save profile
        </button>
    </form>
@endsection