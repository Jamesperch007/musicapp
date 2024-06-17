@extends('Frontend.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">{{ $song->song_name }}</div>
                <div class="card-body">
                    <p>Genre: {{ $song->genre }}</p>
                    <p>Release Date: {{ $song->release_date }}</p>
                    <p>Language: {{ $song->language }}</p>
                    <p>Artist: {{ $song->artist_name }}</p>
                    <p>Plays: {{ $song->plays }}</p>
                    <p>Likes: {{ $song->likes }}</p>
                    <img src="{{ asset('upload/Song/' . $song->image) }}" alt="{{ $song->song_name }}">
                    <div class="col-12">
                        <div class="release">
                            <div class="release__content">
                                <div class="release__cover">
                                    
                                </div>

                                <!-- <div class="release__stat">
            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> 10 tracks</span>
            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"/></svg> 19 503</span>
           </div> -->
                                <!-- <a href="#modal-buy" class="release__buy open-modal">Buy album – $18</a> -->
                            </div>

                            <!-- <h1>Favorites</h1> -->

                            <ul>
                                <div class="favorites-container">
                                    <h1 style="color: white;">Songs</h1>

                                    @if ($Songsdetail)
                                    @foreach ($Songsdetail as $song)
                                    <ul class="main__list main__list--playlist main__list--dashbox">
                                        <li class="single-item">

                                            <a data-playlist data-title="{{ $song->song_name }}" data-artist="{{ $song->artist_name }}" data-img="{{ asset('upload/Song/' . $song->image) }}" href="{{ asset('upload/Song/' . $song->audio) }}" class="single-item__cover">
                                                <img src="{{ asset('upload/Song/' . $song->image) }}" alt="">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
                                                </svg>
                                            </a>
                                            <div class="single-item__title">
                                                <h4>{{ $song->song_name }}</h4>
                                                <span>{{ $song->artist_name }}</span>
                                            </div>
                                            <!-- <a href="#" class="single-item__add favorite">
										<i class="fas fa-heart"></i>
										<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
										 <a href=""></a> -->

                                            </a>
                                            <!-- <a href="#" class="single-item__add">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z" />
                                    </svg>
                                </a> -->
                                            <!-- <a href="#" class="single-item__export">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z">
											</path>
										</svg>
									</a> -->
                                            <!-- <span class="single-item__time">2:58</span> -->
                                        </li>

                                    </ul>
                                    @endforeach
                                    @else
                                    <p>No favorites yet.</p>
                                    @endif
                                </div>

                                <!-- <audio id="global-audio-player" controls style="display:none; position: fixed; bottom: 0; width: 100%;">
                            <source id="global-audio-source" src="" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio> -->




                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection