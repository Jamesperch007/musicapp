<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 06:50:57 GMT -->

<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{asset('Frontend/img/icons/favicon.ico')}}" />

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/fonts/iconic/css/material-design-iconic-font.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/animate/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/css-hamburgers/hamburgers.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/animsition/css/animsition.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/select2/select2.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/daterangepicker/daterangepicker.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/main.css')}}">

	<meta name="robots" content="noindex, follow">
	<script nonce="9b209364-d60c-4547-9552-33cfffb440e3">
		try {
			(function(w, d) {
				! function(j, k, l, m) {
					j[l] = j[l] || {};
					j[l].executed = [];
					j.zaraz = {
						deferred: [],
						listeners: []
					};
					j.zaraz._v = "5671";
					j.zaraz.q = [];
					j.zaraz._f = function(n) {
						return async function() {
							var o = Array.prototype.slice.call(arguments);
							j.zaraz.q.push({
								m: n,
								a: o
							})
						}
					};
					for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
					j.zaraz.init = () => {
						var q = k.getElementsByTagName(m)[0],
							r = k.createElement(m),
							s = k.getElementsByTagName("title")[0];
						s && (j[l].t = k.getElementsByTagName("title")[0].text);
						j[l].x = Math.random();
						j[l].w = j.screen.width;
						j[l].h = j.screen.height;
						j[l].j = j.innerHeight;
						j[l].e = j.innerWidth;
						j[l].l = j.location.href;
						j[l].r = k.referrer;
						j[l].k = j.screen.colorDepth;
						j[l].n = k.characterSet;
						j[l].o = (new Date).getTimezoneOffset();
						if (j.dataLayer)
							for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
									...x[1],
									...y[1]
								})), {}))) zaraz.set(w[0], w[1], {
								scope: "page"
							});
						j[l].q = [];
						for (; j.zaraz.q.length;) {
							const z = j.zaraz.q.shift();
							j[l].q.push(z)
						}
						r.defer = !0;
						for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith("_zaraz_"))).forEach((B => {
							try {
								j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
							} catch {
								j[l]["z_" + B.slice(7)] = A.getItem(B)
							}
						}));
						r.referrerPolicy = "origin";
						r.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
						q.parentNode.insertBefore(r, q)
					};
					["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init)
				}(w, d, "zarazData", "script");
			})(window, document)
		} catch (e) {
			throw fetch("/cdn-cgi/zaraz/t"), e;
		};
	</script>
</head>

<body>
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="user_name" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						<a href="{{route('frontend.index')}}" class="txt2 hov1">
							Sign In
					</button>
				</div>
				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>
				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>
					<a href="#" class="login100-social-item">
						<img src="{{asset('Frontend/img/icons/icon-google.png')}}" alt="GOOGLE">
					</a>
				</div>
				<div class="text-center">
					<a href="{{route('signup.form')}}" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

	<script src="{{asset('Frontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

	<script src="{{asset('Frontend/vendor/animsition/js/animsition.min.js')}}"></script>

	<script src="{{asset('Frontend/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('Frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('Frontend/vendor/select2/select2.min.js')}}"></script>

	<script src="{{asset('Frontend/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('Frontend/vendor/daterangepicker/daterangepicker.js')}}"></script>

	<script src="{{asset('Frontend/vendor/countdowntime/countdowntime.js')}}"></script>

	<script src="{{asset('Frontend/js/main.js')}}"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"88e5fdd86de9597d","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v9/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 06:51:03 GMT -->

</html>