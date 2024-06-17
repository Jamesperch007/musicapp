@extends('Frontend.main')
@section('content')
<main class="main">
	<div class="container-fluid">
		<div class="row row--grid">
			<!-- breadcrumb -->
			<div class="col-12">
				<ul class="breadcrumb">
					<li class="breadcrumb__item"><a href="index.html">Home</a></li>
					<li class="breadcrumb__item breadcrumb__item--active">My Playlists</li>
				</ul>
			</div>
			<!-- end breadcrumb -->

			<!-- title -->
			<div class="col-12">
				<div class="main__title main__title--page">
					<h1>My Playlists</h1>
				</div>
			</div>
			<!-- end title -->
		</div>

		<!-- My Playlists -->
		<div class="row row--grid">
			<div class="col-12">
				<div class="main__filter">
					<form action="#" class="main__filter-search">
						<input type="text" placeholder="Search...">
						<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z" />
							</svg></button>
					</form>

					<div class="main__filter-wrap">
						<select class="main__select" name="genres">
							<option value="all">All artists</option>
							<option value="legacy">Legacy artists</option>
							<option value="active">Active artists</option>
						</select>

						<select class="main__select" name="years">
							<option value="All genres">All genres</option>
							<option value="1">Alternative</option>
							<option value="2">Blues</option>
							<option value="3">Classical</option>
							<option value="4">Country</option>
							<option value="5">Electronic</option>
							<option value="6">Hip-Hop/Rap</option>
							<option value="7">Indie</option>
							<option value="8">Jazz</option>
							<option value="8">Latino</option>
							<option value="8">R&B/Soul</option>
							<option value="8">Rock</option>
						</select>
					</div>

					<div class="slider-radio">
						<input type="radio" name="grade" id="featured" checked="checked"><label for="featured">Featured</label>
						<input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
						<input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
					</div>
				</div>

				<div class="container">
					<h1 style="color:white">My Playlists</h1>

					<form action="{{ route('playlists.create') }}" method="POST">
						@csrf
						<div class="form-group text-white" style="color:white">
							<label for="name">Playlist Name:</label>
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary">Create Playlist</button>
					</form>

					<hr>

					@foreach($playlists as $playlist)
					<div>
						<h3 style="color:white">{{ $playlist->name }}</h3>
						
							@foreach($playlist->songs as $song)
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
                                <!-- <a href="#" class="single-item__add favorite" data-song-id="{{ $song->id }}">
                                    <i class="fas fa-heart"></i>
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                                    

                                </a>
                                <a href="#" class="single-item__add">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z" />
                                    </svg>
                                </a>
                                <a href="#" class="single-item__export">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z">
                                        </path>
                                    </svg>
                                </a> -->
                                <!-- <span class="single-item__time">2:58</span> -->
                            </li>
							</ul>
							@endforeach
						
					</div>
					<hr>
					@endforeach
				</div>

				<button class="main__load" type="button">Load more</button>
			</div>
		</div>
		<!-- end My Playlists -->

		<section class="row row--grid">
			<div class="col-12 col-xl-8">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><a href="#">Upcoming events</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12 col-md-6">
						<div class="event" data-bg="img/events/event1.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z" />
								</svg> Buy ticket</a>
							<span class="event__date">March 14, 2021</span>
							<span class="event__time">8:00 pm</span>
							<h3 class="event__title"><a href="event.html">Sorry Babushka</a></h3>
							<p class="event__address">1 East Plumb Branch St.Saint Petersburg, FL 33702</p>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="event" data-bg="img/events/event2.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z" />
								</svg> Buy ticket</a>
							<span class="event__date">March 16, 2021</span>
							<span class="event__time">7:00 pm</span>
							<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
							<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><a href="#">New Singles</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<!-- <ul class="main__list">
							<li class="single-item">
								<a data-link data-title="Got What I Got" data-artist="Jason Aldean" data-img="img/covers/cover.svg" href="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover.svg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
									</svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Got What I Got</a></h4>
									<span><a href="artist.html">Jason Aldean</a></span>
								</div>
								<span class="single-item__time">2:58</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Supalonely" data-artist="BENEE Featuring" data-img="img/covers/cover7.jpg" href="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover7.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
									</svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Supalonely</a></h4>
									<span><a href="artist.html">BENEE Featuring</a></span>
								</div>
								<span class="single-item__time">3:14</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Girls In The Hood" data-artist="Megan Thee" data-img="img/covers/cover8.jpg" href="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover8.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
									</svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Girls In The Hood</a></h4>
									<span><a href="artist.html">Megan Thee</a></span>
								</div>
								<span class="single-item__time">3:21</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Got It On Me" data-artist="Summer Walker" data-img="img/covers/cover9.jpg" href="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover9.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
									</svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Got It On Me</a></h4>
									<span><a href="artist.html">Summer Walker</a></span>
								</div>
								<span class="single-item__time">3:12</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Righteous" data-artist="Juice WRLD" data-img="img/covers/cover10.jpg" href="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover10.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
									</svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Righteous</a></h4>
									<span><a href="artist.html">Juice WRLD</a></span>
								</div>
								<span class="single-item__time">5:04</span>
							</li> -->
						<!-- </ul> -->
					</div>
				</div>
			</div>
		</section>
	</div>
</main>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection