@extends('layouts.main')

@section('content')
<style>
    .card {
    border: none;
    box-shadow: 5px 6px 6px 2px #e9ecef;
    border-radius: 4px
    }

    .dots {
        height: 4px;
        width: 4px;
        margin-bottom: 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block
    }

    .badge {
        padding: 7px;
        padding-right: 9px;
        padding-left: 16px;
        box-shadow: 5px 6px 6px 2px #e9ecef
    }

    .user-img {
        margin-top: 4px
    }

    .check-icon {
        font-size: 17px;
        color: #c3bfbf;
        top: 1px;
        position: relative;
        margin-left: 3px
    }

    .form-check-input {
        margin-top: 6px;
        margin-left: -24px !important;
        cursor: pointer
    }

    .form-check-input:focus {
        box-shadow: none
    }

    .icons i {
        margin-left: 8px
    }

    .reply {
        margin-left: 12px
    }

    .reply small {
        color: #b7b4b4
    }

    .reply small:hover {
        color: green;
        cursor: pointer
    }
</style>
<div id="latestalbum" class="hero pad">
    <div class="container">
        <!-- hero content -->
      
        <!-- hero play list -->
        <div class="hero-playlist">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- music album image -->
                    <div class="figure">
                        <!-- image -->
                        @php
                            if (File::exists('public/assets/img/album/' . $album->image)) {
                                $cimage = $album->image;
                            } else {
                                $cimage = 'default.png';
                            }
                            
                        @endphp
                        <img class="img-responsive" src="{{ asset('public/assets/img/album/'.$cimage) }}" alt="" />
                        <!-- disk image -->
                        <img class="img-responsive disk" src="{{ asset('public/assets/img/album/disk.png') }}" alt="" />
                    </div>
                    <!-- album details -->
                    <div class="album-details">
                        <!-- title -->
                        <h4>{{$album->name??''}}</h4>
                        <!-- composed by -->
                        <h5>{{$album->artist??''}}</h5>
                      
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- play list -->
                    <div class="playlist-content">
                        <ul class="list-unstyled">
                            @if (!empty($album->songs))
                                @foreach ($album->songs as $song)
                                    <li class="playlist-number">
                                        <a href="{{route('songe_info', encrypt($song->id))}}" style="color: black">
                                            <!-- song information -->
                                            <div class="song-info">
                                                <!-- song title -->
                                                <h4>{{$song->name??''}}</h4>
                                                <p><strong>Album</strong>:{{$album->name??''}} &nbsp;|&nbsp; <strong>Singer</strong>: {{$album->artist??''}}</p>
                                            </div>
                                            <!-- music icon -->
                                            <div class="music-icon">
                                                <a href="#" class="playsong" data-song = "{{asset('public/assets/audio/'.$song->song_path)}}"><i class="fa fa-play"></i></a>
                                                {{-- <a href="#"><i class="fa fa-pause"></i></a> --}}
                                            </div>

                                        </a>
                                        <div class="clearfix"></div>
                                    </li>
                                @endforeach
                            @endif
                           
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="headings d-flex justify-content-between align-items-center mb-3">
                    <h3>Comments</h3>
                </div>

                <div class="commenttext">
                    @if (!empty($album->comments))
                    @foreach ($album->comments as $comment)
                        <div class="card p-3" style="margin-top: 10px;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user d-flex flex-row align-items-center">
                                    <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                                    <span>
                                        <small class="font-weight-bold text-primary">{{$comment->user->name??''}}</small>
                                        <small class="font-weight-bold">{{$comment->Comment??''}}</small>
                                    </span>
                                </div>
                                <small>{{\Carbon\Carbon::parse($comment->created_at)->diffForHumans();}}</small>
                            </div>
                        </div>
                        
                    @endforeach
                        
                    @endif
                </div>
               
                
               
            </div>
        </div>
        <div class="form-content " style="margin-top: 50px">
            @if (Auth::check())
            <form role="form" action="{{route('comment')}}" method="post" class="formsubmit">
                @csrf
                <input type="hidden" name="id" id="id" value="{{encrypt($album->id)}}">
                <input type="hidden" name="type" id="type" value="album">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="name">Comment</label>
                            <textarea class="form-control" id="comment" name="comment" placeholder="Add Comment" cols="" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-theme">Add Comment <samp class="spinner"></samp></button>
                </div>
            </form>  
            @else
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group text-center">
                        <h4> Comment option will be enabled after login .</h4>
                        <a href="{{route('login')}}">click</a>
                    </div>
                </div>
            </div>
       
            @endif
            <!-- paragraph -->
           

        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function(){
            var songobj = document.createElement("audio");
	
            $('body').on('click','.playsong',function(e){
                var song = $(this).data('song');
                songobj.src = song;
                var $playNowButton = $(this);	
                if ($playNowButton.hasClass('play')) {
                    $playNowButton.removeClass('play');
                    $playNowButton.children('i').removeClass('fa-pause').addClass('fa-play');
                    songobj.pause();
                } else {
                    $playNowButton.addClass('play');
                    $playNowButton.children('i').removeClass('fa-play').addClass('fa-pause');
                    songobj.play();
                }
                e.preventDefault();
            });
            
        });

        $('body').on('submit', '.formsubmit', function (e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                data: new FormData(this),
                type: 'POST',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.spinner').html('<i class="fa fa-spinner fa-spin"></i>')
                },
                success: function (data) {
                    if (data.status == 400) {
                        alert(data.msg);
                    }
                    if (data.status == 200) {
                        $('.spinner').html('');
                        $('.commenttext').append(`
                        <div class="card p-3" style="margin-top: 10px;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user d-flex flex-row align-items-center">
                                    <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                                    <span>
                                        <small class="font-weight-bold text-primary">`+data.result.name+`</small>
                                        <small class="font-weight-bold">`+data.result.comment+`</small>
                                    </span>
                                </div>
                                <small>`+data.result.date+`</small>
                            </div>
                        </div> 
                        `);
                        
                    }
                },
            });
        });
    </script>
@endpush
@endsection
