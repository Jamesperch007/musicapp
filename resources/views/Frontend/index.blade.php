@extends('Frontend.main')
@section('content')


<!-- main content -->

<main class="main">
	<div class="container-fluid">
		<!-- slider -->
		<section class="row">
			<div class="col-12">
				<div class="hero owl-carousel" id="hero">
					<div class="hero__slide" data-bg="{{asset('Frontend/img/home/nepaliii.jpg')}}">
						<h1 class="hero__title">Online Nepali Music</h1>
						<p class="hero__text">NEPMusic is an innovative web-based music application tailored to the unique musical tastes and preferences of Nepali audiences. Designed to offer a seamless and enriching user experience, NEPMusic provides a diverse array of Nepali music genres, including traditional folk, contemporary pop, classical, and the latest chart-toppers. It serves as a one-stop platform for music enthusiasts, artists, and producers to discover, share, and enjoy Nepali music.</p>
					</div>

					<div class="hero__slide" data-bg="{{asset('Frontend/img/home/nepaliii.jpg')}}">
						<h2 class="hero__title">Metallica and Slipknot feature in trailer for ‘Long Live Rock’ documentary</h2>
						<p class="hero__text">It also features Rage Against The Machine, Guns N' Roses and a number of others</p>
						<!-- <div class="hero__btns">
								<a href="#" class="hero__btn hero__btn--red"></a>
								<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="hero__btn hero__btn--video open-video"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,10.27,11,7.38A2,2,0,0,0,8,9.11v5.78a2,2,0,0,0,1,1.73,2,2,0,0,0,2,0l5-2.89a2,2,0,0,0,0-3.46ZM15,12l-5,2.89V9.11L15,12ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg> Watch video</a>
							</div> -->
					</div>

					<div class="hero__slide" data-bg="{{asset('Frontend/img/home/nepaliii.jpg')}}">
						<h2 class="hero__title">New Artist of Our Label</h2>
						<p class="hero__text">NEPMusic is an innovative web-based music application tailored to the unique musical tastes and preferences of Nepali audiences. Designed to offer a seamless and enriching user experience, NEPMusic provides a diverse array of Nepali music genres, including traditional folk, contemporary pop, classical, and the latest chart-toppers. It serves as a one-stop platform for music enthusiasts, artists, and producers to discover, share, and enjoy Nepali music.</p>
						<div class="hero__btns">
							<a href="#" class="hero__btn"></a>
						</div>
					</div>
				</div>

				<button class="main__nav main__nav--hero main__nav--prev" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
					</svg></button>
				<button class="main__nav main__nav--hero main__nav--next" data-nav="#hero" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
					</svg></button>
			</div>
		</section>
		<!-- end slider -->

		<!-- releases -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Trending</h2>
					<a href="{{ route('songs.list') }}" class="main__link">See all
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg>
					</a>
				</div>
			</div>
			<!-- end title -->
			<div class="col-12">
				<div class="main__carousel-wrap">
					<div class="main__carousel main__carousel--artists owl-carousel" id="trending">
						@foreach($trendingSongs as $song)
						<ul class="main__list main__list--playlist main__list--dashbox">
							<div class="album">
								<div class="album__cover">
									<img style="height:200px; width:200px;" src="{{ asset('upload/Song/' . $song->image) }}" alt="{{ $song->song_name }}">
									<a data-playlist data-title="{{ $song->song_name }}" data-artist="{{ $song->artist_name }}" data-img="{{ asset('upload/Song/' . $song->image) }}" href="{{ asset('upload/Song/' . $song->audio) }}" class="album__cover">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
										</svg>
										<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
                                    </svg> -->
									</a>
									<span class="album__stat">
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" />
											</svg>
											{{ $song->plays }}
										</span>
										<span>
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
												<path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1ZM20,19a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z" />
											</svg>
											{{ $song->likes }}
										</span>
									</span>
								</div>
								<div class="album__title">
									<h3>
										<a href="{{ route('songs.detail', $song->slug) }}">{{ $song->song_name }}</a>
									</h3>
									<span><a href="{{ route('artist.detail', $song->artist->slug ?? '') }}">{{ $song->artist_name }}</a></span>
								</div>
							</div>
						</ul>
						@endforeach
					</div>

					<button class="main__nav main__nav--prev" data-nav="#trending" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
						</svg></button>
					<button class="main__nav main__nav--next" data-nav="#trending" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></button>
				</div>
			</div>
		</section>
		<!-- end releases -->

		<!-- events -->

		<!-- end events -->

		<!-- articts -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Artists</h2>

					<a href="artist-list" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></a>
				</div>
			</div>
			<!-- end title -->

			<div class="col-12">
				<div class="main__carousel-wrap">
					<div class="main__carousel main__carousel--artists owl-carousel" id="artists">
						@if ($Artistlist)
						@foreach ($Artistlist as $key=>$value)
						<a href="{{route('artists.detail',$value->slug)}}" class="artist">
							<div class="artist__cover">
								<img style="height:200px; width:200px;" src="{{asset('upload/Artist/' .$value->image)}}" alt="">
							</div>
							<h3 class="artist__title">{{$value->artist_name}}</h3>
						</a>
						@endforeach
						@endif
					</div>

					<button class="main__nav main__nav--prev" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
						</svg></button>
					<button class="main__nav main__nav--next" data-nav="#artists" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></button>
				</div>
			</div>
		</section>
		

		


		<section class="row row--grid">
			<div class="col-12 col-md-6 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
								</svg>
								<a href="#">Genre List</a>
							</h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							@foreach($genres as $genre)
							<li class="single-item">
								<a data-link data-title="{{ $genre->title }}" href="{{ route('genre.list', $genre->id) }}" class="single-item__cover">
									<img src="{{ asset('upload/Genre/' . $genre->image) }}" alt="{{ $genre->title }}">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z" />
									</svg>
								</a>
								<div class="single-item__title">
									<h4>{{ $genre->title }}</h4>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z" />
								</svg><a href="#">Songs Lists</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							@foreach($songs as $song)
							<li class="single-item">
								<a data-link data-title="{{ $song->song_name }}" data-artist="{{ $song->artist_name }}" data-img="{{ asset('upload/Song/' . $song->image) }}" href="{{ asset('upload/Song/' . $song->audio) }}" class="single-item__cover">
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
								<!-- <span class="single-item__time">2:58</span> -->
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>

			<!-- <div class="col-12 col-md-6 col-xl-4">
				<div class="row row--grid">
					
					<div class="col-12">
						<div class="main__title">
							<h2><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M12,15a4,4,0,0,0,4-4V5A4,4,0,0,0,8,5v6A4,4,0,0,0,12,15ZM10,5a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0Zm10,6a1,1,0,0,0-2,0A6,6,0,0,1,6,11a1,1,0,0,0-2,0,8,8,0,0,0,7,7.93V21H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V18.93A8,8,0,0,0,20,11Z" />
								</svg><a href="#">Podcasts</a></h2>
						</div>
					</div>
					

					<div class="col-12">
						<ul class="main__list">
							<li class="single-item">
								<a data-link data-title="Got What I Got" data-artist="Jason Aldean" data-img="img/covers/cover6.jpg" href="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover6.jpg" alt="">
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
								<span class="single-item__time single-item__time--live">LIVE</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Supalonely" data-artist="BENEE Featuring" data-img="img/covers/cover9.jpg" href="https://dmitryvolkov.me/demo/blast2.0/audio/9106709_epic-adventure-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover9.jpg" alt="">
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
								<span class="single-item__time">59:01</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Girls In The Hood" data-artist="Megan Thee" data-img="img/covers/podcast.svg" href="https://dmitryvolkov.me/demo/blast2.0/audio/10938456_inspiring-epic-motivational-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/podcast.svg" alt="">
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
								<span class="single-item__time">33:10</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Got It On Me" data-artist="Summer Walker" data-img="img/covers/cover11.jpg" href="https://dmitryvolkov.me/demo/blast2.0/audio/16412111_upbeat-rock_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover11.jpg" alt="">
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
								<span class="single-item__time">44:27</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Righteous" data-artist="Juice WRLD" data-img="img/covers/cover12.jpg" href="https://dmitryvolkov.me/demo/blast2.0/audio/19478377_ambient-pop_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover12.jpg" alt="">
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
								<span class="single-item__time">51:41</span>
							</li>
						</ul>
					</div>
				</div>
			</div> -->
		</section>

		
		<!-- <section class="row row--grid">
			
			<div class="col-12">
				<div class="main__title">
					<h2>Podcasts</h2>

					<a href="podcasts.html" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></a>
				</div>
			</div>
			

			<div class="col-12">
				<div class="main__carousel-wrap">
					<div class="main__carousel main__carousel--podcasts owl-carousel" id="podcasts">
						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/1.jpg" alt="">
								<span class="live__status">live</span>
								<span class="live__value">6.5K viewers</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Beautiful Stories From Anonymous People</a></h3>
						</div>

						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/2.jpg" alt="">
								<span class="live__status">live</span>
								<span class="live__value">1.7K viewers</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Song Exploder</a></h3>
						</div>

						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/3.jpg" alt="">
								<span class="live__status">live</span>
								<span class="live__value">924 viewers</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Broken Record</a></h3>
						</div>

						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/4.jpg" alt="">
								<span class="live__status">live</span>
								<span class="live__value">638 viewers</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Desert Island Discs</a></h3>
						</div>

						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/5.jpg" alt="">
								<span class="live__value">588 views</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Riffs On Riffs</a></h3>
						</div>

						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/6.jpg" alt="">
								<span class="live__value">588 views</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Popcast</a></h3>
						</div>

						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/7.jpg" alt="">
								<span class="live__value">6.5K views</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Rolling Stone Music Now</a></h3>
						</div>

						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/8.jpg" alt="">
								<span class="live__value">1.7K views</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Song vs. Song</a></h3>
						</div>

						<div class="live">
							<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
								<img src="img/live/9.jpg" alt="">
								<span class="live__value">924 views</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path>
								</svg>
							</a>
							<h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">Disgraceland</a></h3>
						</div>
					</div>

					<button class="main__nav main__nav--prev" data-nav="#podcasts" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
						</svg></button>
					<button class="main__nav main__nav--next" data-nav="#podcasts" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></button>
				</div>
			</div>
		</section> -->
		<!-- end podcasts -->

		<!-- store -->
		<!-- <section class="row row--grid">
			
			<div class="col-12">
				<div class="main__title">
					<h2>Products</h2>

					<a href="store.html" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></a>
				</div>
			</div>
			

			<div class="col-12">
				<div class="main__carousel-wrap">
					<div class="main__carousel main__carousel--store owl-carousel" id="store">
						<div class="product">
							<div class="product__img">
								<img src="img/store/item1.jpg" alt="">

								<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" />
									</svg></button>
							</div>
							<h3 class="product__title"><a href="product.html">Vinyl Player</a></h3>
							<span class="product__price">$1 099</span>
							<span class="product__new">New</span>
						</div>

						<div class="product">
							<div class="product__img">
								<img src="img/store/item2.jpg" alt="">

								<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" />
									</svg></button>
							</div>
							<h3 class="product__title"><a href="product.html">Microphone R4</a></h3>
							<span class="product__price">$799</span>
						</div>

						<div class="product">
							<div class="product__img">
								<img src="img/store/item3.jpg" alt="">

								<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" />
									</svg></button>
							</div>
							<h3 class="product__title"><a href="product.html">Music Blank</a></h3>
							<span class="product__price">$3.99</span>
							<span class="product__new">New</span>
						</div>

						<div class="product">
							<div class="product__img">
								<img src="img/store/item4.jpg" alt="">

								<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" />
									</svg></button>
							</div>
							<h3 class="product__title"><a href="product.html">Headphones ZR-991</a></h3>
							<span class="product__price">$199</span>
						</div>

						<div class="product">
							<div class="product__img">
								<img src="img/store/item5.jpg" alt="">

								<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" />
									</svg></button>
							</div>
							<h3 class="product__title"><a href="product.html">Piano</a></h3>
							<span class="product__price">$11 899</span>
						</div>

						<div class="product">
							<div class="product__img">
								<img src="img/store/item6.jpg" alt="">

								<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" />
									</svg></button>
							</div>
							<h3 class="product__title"><a href="product.html">Vinyl Player</a></h3>
							<span class="product__price">$2 499</span>
						</div>

						<div class="product">
							<div class="product__img">
								<img src="img/store/item7.jpg" alt="">

								<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" />
									</svg></button>
							</div>
							<h3 class="product__title"><a href="product.html">Guitar</a></h3>
							<span class="product__price">$299</span>
						</div>

						<div class="product">
							<div class="product__img">
								<img src="img/store/item8.jpg" alt="">

								<button class="product__add" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" />
									</svg></button>
							</div>
							<h3 class="product__title"><a href="product.html">Microphone R4s</a></h3>
							<span class="product__price">$199</span>
						</div>
					</div>

					<button class="main__nav main__nav--prev" data-nav="#store" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
						</svg></button>
					<button class="main__nav main__nav--next" data-nav="#store" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></button>
				</div>
			</div>
		</section> -->
		<!-- end store -->

		<!-- news -->
		<!-- <section class="row row--grid">
			
			<div class="col-12">
				<div class="main__title">
					<h2>News</h2>

					<a href="news.html" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></a>
				</div>
			</div>
			
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="post">
					<a href="article.html" class="post__img">
						<img src="img/posts/1.jpg" alt="">
					</a>

					<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="post__video open-video">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M16,10.27,11,7.38A2,2,0,0,0,8,9.11v5.78a2,2,0,0,0,1,1.73,2,2,0,0,0,2,0l5-2.89a2,2,0,0,0,0-3.46ZM15,12l-5,2.89V9.11L15,12ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
						</svg> Watch backstage
					</a>

					<div class="post__content">
						<a href="#" class="post__category">Music</a>
						<h3 class="post__title"><a href="article.html">Foo Fighters share new live version of ‘No Son Of Mine’</a></h3>
						<div class="post__meta">
							<span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z" />
								</svg> 2 hours ago</span>
							<span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z" />
								</svg> 61</span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="post">
					<a href="article.html" class="post__img">
						<img src="img/posts/2.jpg" alt="">
					</a>

					<div class="post__content">
						<a href="#" class="post__category">Music</a>
						<h3 class="post__title"><a href="article.html">Tom Grennan ‘breaks the internet’ as fans overload servers during virtual gig</a></h3>
						<div class="post__meta">
							<span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z" />
								</svg> 3 hours ago</span>
							<span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z" />
								</svg> 18</span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12 col-sm-6 col-lg-4">
				<div class="post">
					<a href="article.html" class="post__img">
						<img src="img/posts/3.jpg" alt="">
					</a>

					<div class="post__content">
						<a href="#" class="post__category">Features</a>
						<h3 class="post__title"><a href="article.html">Why do the Golden Globes always get it so wrong?</a></h3>
						<div class="post__meta">
							<span class="post__date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z" />
								</svg> 9 hours ago</span>
							<span class="post__comments"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z" />
								</svg> 54</span>
						</div>
					</div>
				</div>
			</div>
			
		</section> -->
		
		<div class="row">
			<div class="col-12">
				<div class="partners owl-carousel">
					<a href="#" class="partners__img">
						<img src="img/partners/3docean-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="img/partners/activeden-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="img/partners/audiojungle-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="img/partners/codecanyon-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="img/partners/photodune-light-background.png" alt="">
					</a>

					<a href="#" class="partners__img">
						<img src="img/partners/themeforest-light-background.png" alt="">
					</a>
				</div>
			</div>
		</div>
		<!-- end partners -->
	</div>
</main>
<!-- end main content -->

@endsection