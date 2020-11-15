@extends('layouts.app')

@section('content')
<div class="profile container">
    {{-- Profile Info --}}
    <div class="row">
        <div class="col-3">
            <img class="profile__image" src="https://instagram.fhmo2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fhmo2-1.fna.fbcdn.net&_nc_ohc=4HZOAeZMrlwAX8_311F&_nc_tp=25&oh=5fc70abe625f811c77e561ccf83983d3&oe=5FD924E7" alt="Free Code Camp Logo">
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-6">
                    <h1>freecodecamp</h1>
                </div>
                <div class="col-1">
                    <button class="btn btn-primary">
                        Follow
                    </button>
                </div>
            </div>

            {{-- Info --}}
            <div class="d-flex">
                <div class="pr-3">
                    <b>343</b>
                    posts
                </div>
                <div class="pr-3">
                    <b>59.9k</b>
                    followers
                </div>
                <div class="pr-3">
                    <b>287</b> following
                </div>
            </div>

            <p class="mt-4">
             
                {{-- Name --}}
                <h6>
                    freeCodeCamp.org
                </h6>
                
                {{-- Description --}}
                We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
                <br>
                {{-- Web Url --}}
                <a href="https://www.freecodecamp.org" target="_blank">
                    www.freecodecamp.org
                </a>
            </p>

        </div>
    </div>
    {{-- End Profile Info --}}

    {{-- <div class="row">
        <div class="col-4">
            <button class="btn btn-link text-uppercase text-dark">
                Posts
            </button>
        </div>
        <div class="col-4">
            <button class="btn btn-link text-uppercase text-dark">
                Tags
            </button>
        </div>
    </div> --}}

    {{-- Photos --}}
    <div class="row">
        <div class="col-4">
            <img class="w-100" src="https://instagram.fhmo2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.123.1025.1025a/s640x640/124854169_373441373771377_2551709967334771428_n.jpg?_nc_ht=instagram.fhmo2-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=NjpKEbL8yMgAX_BjXC3&amp;_nc_tp=24&amp;oh=d32c3c212113dc4695ad839c8ace3cad&amp;oe=5FDA9079">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fhmo2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.123.1025.1025a/s640x640/124854169_373441373771377_2551709967334771428_n.jpg?_nc_ht=instagram.fhmo2-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=NjpKEbL8yMgAX_BjXC3&amp;_nc_tp=24&amp;oh=d32c3c212113dc4695ad839c8ace3cad&amp;oe=5FDA9079">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fhmo2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.123.1025.1025a/s640x640/124854169_373441373771377_2551709967334771428_n.jpg?_nc_ht=instagram.fhmo2-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=NjpKEbL8yMgAX_BjXC3&amp;_nc_tp=24&amp;oh=d32c3c212113dc4695ad839c8ace3cad&amp;oe=5FDA9079">
        </div>

    </div>
</div>
@endsection
