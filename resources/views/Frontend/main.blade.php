<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('Frontend/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/css/paymentfont.min.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/css/slider-radio.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/css/plyr.css')}}">
	<link rel="stylesheet" href="{{asset('Frontend/css/main.css')}}">


	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('Frontend/img/logo1.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{asset('Frontend/img/logo1.png')}}">



	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>NEPMusic – Online music </title>

</head>

<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<div class="header__logo">
				<a href="{{route('frontend.index')}}">
					<img src="{{asset('Frontend/img/logo4.png')}}" alt="">
				</a>

			</div>

			<nav class="header__nav">
				<a href="profile.html">Profile</a>
				<a href="{{route('about.detail')}}">About</a>
				<a href="{{route('contacts.detail')}}">Contacts</a>
			</nav>

			<form action="#" class="header__search">
				<input type="text" placeholder="Artist,Songs,Albums">
				<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z" />
					</svg></button>
				<button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
					</svg></button>
			</form>

			<div class="header__actions">
				<div class="header__action header__action--search">
					<button class="header__action-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z" />
						</svg></button>
				</div>



				<div class="header__action header__action--signin">
					<a class="header__action-btn" href="{{route('signin.form')}}">
						<span>Sign in</span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M20.5,15.1a1,1,0,0,0-1.34.45A8,8,0,1,1,12,4a7.93,7.93,0,0,1,7.16,4.45,1,1,0,0,0,1.8-.9,10,10,0,1,0,0,8.9A1,1,0,0,0,20.5,15.1ZM21,11H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H21a1,1,0,0,0,0-2Z" />
						</svg>
					</a>
				</div>
			</div>

			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<div class="sidebar__logo">
			<a href="{{route('frontend.index')}}">
				<img src="{{asset('Frontend/img/logo4.png')}}" alt="">
			</a>
		</div>
		<!-- end sidebar logo -->

		<!-- sidebar nav -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="{{route('frontend.index')}}" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"></path>
					</svg> <span>Home</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="{{route('artists.list')}}" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z" />
					</svg> <span>Artists</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="{{route('songs.list')}}" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
					</svg> <span>Songs</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="{{route('playlists.index')}}" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M12,19a1,1,0,1,0-1-1A1,1,0,0,0,12,19Zm5,0a1,1,0,1,0-1-1A1,1,0,0,0,17,19Zm0-4a1,1,0,1,0-1-1A1,1,0,0,0,17,15Zm-5,0a1,1,0,1,0-1-1A1,1,0,0,0,12,15ZM19,3H18V2a1,1,0,0,0-2,0V3H8V2A1,1,0,0,0,6,2V3H5A3,3,0,0,0,2,6V20a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V6A3,3,0,0,0,19,3Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V11H20ZM20,9H4V6A1,1,0,0,1,5,5H6V6A1,1,0,0,0,8,6V5h8V6a1,1,0,0,0,2,0V5h1a1,1,0,0,1,1,1ZM7,15a1,1,0,1,0-1-1A1,1,0,0,0,7,15Zm0,4a1,1,0,1,0-1-1A1,1,0,0,0,7,19Z" />
					</svg> <span>My Playlist</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="{{route('favorite.list')}}" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M12,15a4,4,0,0,0,4-4V5A4,4,0,0,0,8,5v6A4,4,0,0,0,12,15ZM10,5a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0Zm10,6a1,1,0,0,0-2,0A6,6,0,0,1,6,11a1,1,0,0,0-2,0,8,8,0,0,0,7,7.93V21H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V18.93A8,8,0,0,0,20,11Z" />
					</svg> <span>Favorite</span></a>
			</li>

			<!-- collapse -->
			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu1" role="button" aria-expanded="false" aria-controls="collapseMenu1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z" />
					</svg> <span>Pages</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
					</svg></a>

				<div class="collapse" id="collapseMenu1">
					<ul class="sidebar__menu sidebar__menu--scroll">
						<li><a href="artist.html">Artist</a></li>
						<li><a href="songs.html">Songs</a></li>
						<li><a href="myplaylists.html">My Playlist</a></li>
						<li><a href="product.html">Favourite</a></li>
						<li><a href="article.html">Genre</a></li>
						<li><a href="cart.html">History</a></li>
						<li><a href="profile.html">Album</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contacts.html">Contact US</a></li>
						<li><a href="pricing.html">Pricing plans</a></li>
						<li><a href="privacy.html">Privacy policy</a></li>
						<li><a href="signin.html">Sign in</a></li>
						<li><a href="signup.html">Sign up</a></li>
						<li><a href="forgot.html">Forgot password</a></li>
						<li><a href="404.html">404 Page</a></li>
					</ul>
				</div>
			</li>
			<!-- end collapse -->

			<li class="sidebar__nav-item">
				<a href="{{route('genre.list')}}" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M8.5,19A1.5,1.5,0,1,0,10,20.5,1.5,1.5,0,0,0,8.5,19ZM19,16H7a1,1,0,0,1,0-2h8.49121A3.0132,3.0132,0,0,0,18.376,11.82422L19.96143,6.2749A1.00009,1.00009,0,0,0,19,5H6.73907A3.00666,3.00666,0,0,0,3.92139,3H3A1,1,0,0,0,3,5h.92139a1.00459,1.00459,0,0,1,.96142.7251l.15552.54474.00024.00506L6.6792,12.01709A3.00006,3.00006,0,0,0,7,18H19a1,1,0,0,0,0-2ZM17.67432,7l-1.2212,4.27441A1.00458,1.00458,0,0,1,15.49121,12H8.75439l-.25494-.89221L7.32642,7ZM16.5,19A1.5,1.5,0,1,0,18,20.5,1.5,1.5,0,0,0,16.5,19Z" />
					</svg> <span>Genre</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="{{route('history.list')}}" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M16,14H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0-4H10a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-6H17V3a1,1,0,0,0-2,0V4H13V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H4A1,1,0,0,0,3,5V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V5A1,1,0,0,0,20,4ZM19,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V6H7V7A1,1,0,0,0,9,7V6h2V7a1,1,0,0,0,2,0V6h2V7a1,1,0,0,0,2,0V6h2Z" />
					</svg> <span>History</span></a>
			</li>
			<li class="sidebar__nav-item">
				<a href="{{ route('album.list') }}" class="sidebar__nav-link">
					<svg class="sidebar__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3,14H9a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2ZM12,8a4,4,0,1,1-4,4A4,4,0,0,1,12,8Z" />
					</svg>
					<span>Album</span>
				</a>
			</li>
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar -->

	<!-- player -->
	<div class="player">

		<div class="player__cover">
			<img src="" alt="">
		</div>

		<div class="player__content">

			<span class="player__track"><b class="player__title">Song Name</b> – <span class="player__artist">Artist</span></span>
			<audio src="" id="audio" controls></audio>

		</div>

	</div>

	<button class="player__btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
			<path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z" />
		</svg> Player</button>
	<!-- end player -->

	@yield('content')

	<!-- footer -->
	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4 order-4 order-md-1 order-lg-4 order-xl-1">
					<div class="footer__logo">
						<img src="{{asset('Frontend/img/logo4.png')}}" alt="">
					</div>
					<p class="footer__tagline">NEPMusic,<br> Online music .</p>
					<div class="footer__links">
						<a href="mailto:support@blast.template"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M16.29,8.71a1,1,0,0,0,1.42,0l4-4a1,1,0,1,0-1.42-1.42L17,6.59l-1.29-1.3a1,1,0,0,0-1.42,1.42ZM21,8a1,1,0,0,0-1,1v9a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.41L9.88,14.3a3,3,0,0,0,2.11.87,3.08,3.08,0,0,0,2.16-.9l1.72-1.72a1,1,0,1,0-1.42-1.42L12.7,12.88a1,1,0,0,1-1.4,0L5.41,7H11a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V18a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9A1,1,0,0,0,21,8Z" />
							</svg> pratap@gmail.com</a>
						<a href="tel:82345678900"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M19.44,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1.05,1.05,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1Z" />
							</svg> 8 234 567-89-00</a>
					</div>
				</div>

				<div class="col-6 col-md-4 col-lg-3 col-xl-2 order-1 order-md-2 order-lg-1 order-xl-2 offset-md-2 offset-lg-0">
					<h6 class="footer__title">NEPMusic</h6>
					<div class="footer__nav">
						<a href="about.html">About</a>
						<a href="profile.html">My profile</a>
						<!-- <a href="pricing.html">Pricing plans</a> -->
						<a href="contacts.html">Contacts</a>
					</div>
				</div>

				<div class="col-12 col-md-8 col-lg-6 col-xl-4 order-3 order-lg-2 order-md-3 order-xl-3">
					<div class="row">
						<div class="col-12">
							<h6 class="footer__title">Browse</h6>
						</div>

						<div class="col-6">
							<div class="footer__nav">
								<a href="artists.html">Artists</a>
								<a href="releases.html">Releases</a>
								<!-- <a href="events.html">Events</a> -->
								<!-- <a href="podcasts.html">Podcasts</a> -->
							</div>
						</div>

						<!-- <div class="col-6">
							<div class="footer__nav">
								<a href="news.html">News</a>
								<a href="store.html">Store</a>
								<a href="#">Music</a>
								<a href="#">Video</a>
							</div>
						</div> -->
					</div>
				</div>

				<!-- <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-2 order-lg-3 order-md-4 order-xl-4">
					<h6 class="footer__title">Help</h6>
					<div class="footer__nav">
						<a href="privacy.html">Account & Billing</a>
						<a href="privacy.html">Plans & Pricing</a>
						<a href="privacy.html">Supported devices</a>
						<a href="privacy.html">Accessibility</a>
					</div>
				</div> -->
			</div>

			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<div class="footer__social">
							<a href="#" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#3B5998" />
									<path d="M16.5634 23.8197V15.6589H18.8161L19.1147 12.8466H16.5634L16.5672 11.4391C16.5672 10.7056 16.6369 10.3126 17.6904 10.3126H19.0987V7.5H16.8457C14.1394 7.5 13.1869 8.86425 13.1869 11.1585V12.8469H11.4999V15.6592H13.1869V23.8197H16.5634Z" fill="white" />
								</svg></a>
							<a href="#" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="#55ACEE" />
									<path d="M14.5508 12.1922L14.5822 12.7112L14.0576 12.6477C12.148 12.404 10.4798 11.5778 9.06334 10.1902L8.37085 9.50169L8.19248 10.0101C7.81477 11.1435 8.05609 12.3405 8.843 13.1455C9.26269 13.5904 9.16826 13.654 8.4443 13.3891C8.19248 13.3044 7.97215 13.2408 7.95116 13.2726C7.87772 13.3468 8.12953 14.3107 8.32888 14.692C8.60168 15.2217 9.15777 15.7407 9.76631 16.0479L10.2804 16.2915L9.67188 16.3021C9.08432 16.3021 9.06334 16.3127 9.12629 16.5351C9.33613 17.2236 10.165 17.9545 11.0883 18.2723L11.7388 18.4947L11.1723 18.8337C10.3329 19.321 9.34663 19.5964 8.36036 19.6175C7.88821 19.6281 7.5 19.6705 7.5 19.7023C7.5 19.8082 8.78005 20.4014 9.52499 20.6344C11.7598 21.3229 14.4144 21.0264 16.4079 19.8506C17.8243 19.0138 19.2408 17.3507 19.9018 15.7407C20.2585 14.8827 20.6152 13.315 20.6152 12.5629C20.6152 12.0757 20.6467 12.0121 21.2343 11.4295C21.5805 11.0906 21.9058 10.7198 21.9687 10.6139C22.0737 10.4126 22.0632 10.4126 21.5281 10.5927C20.6362 10.9105 20.5103 10.8681 20.951 10.3915C21.2762 10.0525 21.6645 9.43813 21.6645 9.25806C21.6645 9.22628 21.5071 9.27924 21.3287 9.37458C21.1398 9.4805 20.7202 9.63939 20.4054 9.73472L19.8388 9.91479L19.3247 9.56524C19.0414 9.37458 18.6427 9.16273 18.4329 9.09917C17.8978 8.95087 17.0794 8.97206 16.5967 9.14154C15.2852 9.6182 14.4563 10.8469 14.5508 12.1922Z" fill="white" />
								</svg></a>
							<a href="https://www.instagram.com/volkov_des1gn/" target="_blank"><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="black" />
									<mask x="0" y="0" width="30" height="30">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z" fill="white" />
									</mask>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0007 7C12.8281 7 12.5554 7.0095 11.702 7.04833C10.8504 7.08733 10.269 7.22217 9.76036 7.42C9.23419 7.62434 8.78785 7.89768 8.34318 8.34251C7.89818 8.78719 7.62484 9.23352 7.41984 9.75953C7.2215 10.2684 7.0865 10.8499 7.04817 11.7012C7.01 12.5546 7 12.8274 7 15.0001C7 17.1728 7.00967 17.4446 7.04833 18.298C7.0875 19.1496 7.22234 19.731 7.42 20.2396C7.62451 20.7658 7.89784 21.2121 8.34268 21.6568C8.78719 22.1018 9.23352 22.3758 9.75936 22.5802C10.2684 22.778 10.8499 22.9128 11.7014 22.9518C12.5547 22.9907 12.8272 23.0002 14.9997 23.0002C17.1726 23.0002 17.4444 22.9907 18.2978 22.9518C19.1495 22.9128 19.7315 22.778 20.2405 22.5802C20.7665 22.3758 21.2121 22.1018 21.6567 21.6568C22.1017 21.2121 22.375 20.7658 22.58 20.2398C22.7767 19.731 22.9117 19.1495 22.9517 18.2981C22.99 17.4448 23 17.1728 23 15.0001C23 12.8274 22.99 12.5547 22.9517 11.7014C22.9117 10.8497 22.7767 10.2684 22.58 9.7597C22.375 9.23352 22.1017 8.78719 21.6567 8.34251C21.2116 7.89751 20.7666 7.62417 20.24 7.42C19.73 7.22217 19.1483 7.08733 18.2966 7.04833C17.4433 7.0095 17.1716 7 14.9983 7H15.0007ZM14.2831 8.4417C14.4225 8.44148 14.5724 8.44155 14.7341 8.44162L15.0008 8.4417C17.1368 8.4417 17.39 8.44936 18.2335 8.4877C19.0135 8.52337 19.4368 8.6537 19.7188 8.7632C20.0922 8.9082 20.3583 9.08154 20.6382 9.36154C20.9182 9.64154 21.0915 9.90821 21.2368 10.2815C21.3463 10.5632 21.4769 10.9866 21.5124 11.7666C21.5507 12.6099 21.559 12.8632 21.559 14.9983C21.559 17.1333 21.5507 17.3866 21.5124 18.23C21.4767 19.01 21.3463 19.4333 21.2368 19.715C21.0918 20.0883 20.9182 20.3542 20.6382 20.634C20.3582 20.914 20.0923 21.0873 19.7188 21.2323C19.4372 21.3423 19.0135 21.4723 18.2335 21.508C17.3901 21.5463 17.1368 21.5547 15.0008 21.5547C12.8646 21.5547 12.6114 21.5463 11.7681 21.508C10.9881 21.472 10.5647 21.3417 10.2826 21.2322C9.90923 21.0872 9.64256 20.9138 9.36256 20.6338C9.08256 20.3538 8.90922 20.0878 8.76389 19.7143C8.65438 19.4326 8.52388 19.0093 8.48838 18.2293C8.45005 17.386 8.44238 17.1326 8.44238 14.9963C8.44238 12.8599 8.45005 12.6079 8.48838 11.7646C8.52405 10.9846 8.65438 10.5612 8.76389 10.2792C8.90889 9.90588 9.08256 9.63921 9.36256 9.35921C9.64256 9.0792 9.90923 8.90587 10.2826 8.76053C10.5646 8.65053 10.9881 8.52053 11.7681 8.4847C12.5061 8.45136 12.7921 8.44136 14.2831 8.4397V8.4417ZM18.3112 10.7295C18.3112 10.1994 18.7412 9.76987 19.2712 9.76987V9.76953C19.8012 9.76953 20.2312 10.1995 20.2312 10.7295C20.2312 11.2595 19.8012 11.6896 19.2712 11.6896C18.7412 11.6896 18.3112 11.2595 18.3112 10.7295ZM15.0008 10.8916C12.7321 10.8917 10.8926 12.7312 10.8926 15C10.8926 17.2688 12.7322 19.1075 15.001 19.1075C17.2699 19.1075 19.1087 17.2688 19.1087 15C19.1087 12.7311 17.2697 10.8916 15.0008 10.8916ZM17.6677 14.9999C17.6677 13.5271 16.4737 12.3333 15.001 12.3333C13.5281 12.3333 12.3343 13.5271 12.3343 14.9999C12.3343 16.4726 13.5281 17.6666 15.001 17.6666C16.4737 17.6666 17.6677 16.4726 17.6677 14.9999Z" fill="white" />
								</svg></a>
							 
						</div>
						<small class="footer__copyright">© NEPMusic, 2024. Created by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Pratap</a>.</small>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- modal ticket -->
	
	<!-- end modal ticket -->

	<!-- modal info -->
	
	<!-- end modal info -->

	<!-- modal info -->
	
	<!-- end modal info -->

	<!-- JS -->
	<script src="{{asset('Frontend/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('Frontend/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('Frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('Frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('Frontend/js/smooth-scrollbar.js')}}"></script>
	<script src="{{asset('Frontend/js/select2.min.js')}}"></script>
	<script src="{{asset('Frontend/js/slider-radio.js')}}"></script>
	<script src="{{asset('Frontend/js/jquery.inputmask.min.js')}}"></script>
	<script src="{{asset('Frontend/js/plyr.min.js')}}"></script>
	<script src="{{asset('Frontend/js/main.js')}}"></script>
</body>

</html>