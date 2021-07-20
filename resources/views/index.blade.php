@extends('layouts.main')

@section('content')
    <div class="featured pad" id="featuredalbum">
        <div class="container">
            <!-- default heading -->
            <div class="default-heading">
                <!-- heading -->
                <h2>Featured Album</h2>
            </div>
            <!-- featured album elements -->
            <div class="featured-element">
                <div class="row">
                    @foreach ($albums as $album)
                        <div class="col-md-3 col-sm-6">

                            <!-- featured item -->
                            <div class="featured-item ">
                                <a href="{{ route('view-album', encrypt($album->id)) }}">
                                    <!-- image container -->
                                    <div class="figure">
                                        <!-- image -->
                                        @php
                                            if (File::exists('public/assets/img/album/' . $album->image)) {
                                                $cimage = $album->image;
                                            } else {
                                                $cimage = 'default.png';
                                            }
                                            
                                        @endphp
                                        <img class="img-responsive" src="{{ asset('public/assets/img/album/' . $cimage) }}"
                                            alt="" />
                                        <!-- paragraph -->

                                    </div>
                                </a>
                                <!-- featured information -->
                                <div class="featured-item-info">
                                    <!-- featured title -->
                                    <h4>{{ $album->name ?? '' }}</h4>
                                    <!-- horizontal line -->
                                    <hr />
                                    <!-- some responce from social medial or web likes -->
                                    <p>{{ $album->artist ?? '' }}</p>
                                </div>
                            </div>

                        </div>

                    @endforeach

                </div>
            </div>
            <div class="container text-center">
                {{ $albums->links() }}

            </div>
        </div>
    </div>
@endsection
