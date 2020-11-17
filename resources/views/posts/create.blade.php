@extends('layouts.app')

@section('content')
    <form method="POST" action="/p" enctype="multipart/form-data">
        <div class="row">
            @csrf
            <div class="col-8 offset-2">
                <h1>Add New Post</h1>
                <div class="form-group mt-3">
                    
                    <label for="caption">Post Caption</label>
                    
                    <input id="caption" name="caption" type="text" class="form-control 
                        @error('caption') 
                        is-invalid @enderror" 
                        caption="caption" 
                        value="{{ old('caption') }}" 
                        required autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Post Image</label>
                    <input type="file" name="image" id="image" class="form-control-file" required>

                    @error ('image')
                        <strong class="mt-2 text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Add new Post</button>
                </div>
            
            </div>
        </div>
    </form>
@endsection