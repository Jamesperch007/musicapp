@extends('Frontend.main')
@section('content')
<main class="main">
	<div class="container-fluid">
		<div class="row row--grid">
			<div class="col-12">
				<div class="article article--page">
					<div>
						<h1>{{ $Albumdetail->album_name }}</h1>
						<span>{{ $Albumdetail->album_name }}</span>
					</div>
					<p>{!! html_entity_decode($Albumdetail->description)!!}</p>
					<p>Artist Name-{{ $Albumdetail->artist_name}}</p>
					<p>Language-{{ $Albumdetail->language}}</p>
					<p>Genre-{{ $Albumdetail->genre}}</p>
					<p>{{ $Albumdetail->release_date}}</p>
				</div>
			</div>
		</div>

		
			<!-- title -->
			<div class="col-12">
				<div class="release">
					<div class="release__content">
						<div class="release__cover">
							<img src="{{ asset('upload/Album/' . $Albumdetail->image) }}" alt="{{ $Albumdetail->album_name }}">
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

									<a data-playlist data-title="{{ $song->song_name }}" data-artist="{{ $song->artist_name }}" data-album="{{$song->album_name}}" data-img="{{ asset('upload/Song/' . $song->image) }}" href="{{ asset('upload/Song/' . $song->audio) }}" class="single-item__cover">
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
										<span>{{ $song->album_name }}</span>
										<span>{{ $song->artist_name }}</span>
									</div>


									</a>

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
		
		<!-- end releases -->

		<!-- events -->
		<section class="row row--grid">
			<!-- title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Events</h2>
				</div>
			</div>
			<!-- end title -->

			<div class="col-12">
				<div class="main__carousel-wrap">
					<div class="main__carousel main__carousel--events owl-carousel" id="events">
						<div class="event" data-bg="img/events/event1.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z" />
								</svg> Buy ticket</a>
							<span class="event__date">March 14, 2021</span>
							<span class="event__time">8:00 pm</span>
							<h3 class="event__title"><a href="event.html">Sorry Babushka</a></h3>
							<p class="event__address">1 East Plumb Branch St.Saint Petersburg, FL 33702</p>
						</div>

						<div class="event" data-bg="img/events/event2.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z" />
								</svg> Buy ticket</a>
							<span class="event__date">March 16, 2021</span>
							<span class="event__time">7:00 pm</span>
							<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
							<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
						</div>

						<div class="event" data-bg="img/events/event3.jpg">
							<span class="event__out">Sold out</span>
							<span class="event__date">March 23, 2021</span>
							<span class="event__time">9:30 pm</span>
							<h3 class="event__title"><a href="event.html">Rocky Pub</a></h3>
							<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
						</div>

						<div class="event" data-bg="img/events/event4.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z" />
								</svg> Buy ticket</a>
							<span class="event__date">March 30, 2021</span>
							<span class="event__time">6:00 pm</span>
							<h3 class="event__title"><a href="event.html">Big Club</a></h3>
							<p class="event__address">123 6th St. Melbourne, FL 32904</p>
						</div>

						<div class="event" data-bg="img/events/event5.jpg">
							<span class="event__out">Sold out</span>
							<span class="event__date">March 30, 2021</span>
							<span class="event__time">10:00 pm</span>
							<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
							<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
						</div>

						<div class="event" data-bg="img/events/event6.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z" />
								</svg> Buy ticket</a>
							<span class="event__date">March 31, 2021</span>
							<span class="event__time">6:30 pm</span>
							<h3 class="event__title"><a href="event.html">Rocky Pub</a></h3>
							<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
						</div>
					</div>

					<button class="main__nav main__nav--prev" data-nav="#events" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
						</svg></button>
					<button class="main__nav main__nav--next" data-nav="#events" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
						</svg></button>
				</div>
			</div>
		</section>
		<!-- end events -->
	</div>
</main>
@endsection