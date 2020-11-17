@extends('layouts.app')

@section('content')
    <div class="border border-muted">
        <div class="row">
            <div class="col-7">
                <img class="w-100" src="/storage/{{ $post->image }}" alt="">
            </div>
            <div class="col-5">
                <div class="mt-3">
                    {{-- <img class="w-200" src="" alt="{{ $post->user->username }}"> --}}
                    <div class="d-flex justify-content-start align-items-baseline align-items-start">
                        <h6 class="font-weight-bolder">
                            {{ $post->user->username }}
                        </h6>
                        {{-- <span style="padding: 3px;background-color: #000;border-radius: 50%;margin: 7px 6px 2px 7px;"></span> --}}
                        <a class="ml-2" href="#">
                            Follow
                        </a>
                    </div>
                    
                </div>
                <hr style="max-width: 90%"/>
                {{ $post->caption }}
            </div>
        </div>
    </div>
@endsection