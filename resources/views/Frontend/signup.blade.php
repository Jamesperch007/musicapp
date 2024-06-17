<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v13/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 07:18:21 GMT -->

<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{asset('Frontend/img/icons/favicon.ico')}}" />

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/bootstrap/css/bootstrap.min1.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/fonts/font-awesome-4.7.0/css/font-awesome.min1.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/fonts/Linearicons-Free-v1.0.0/icon-font.min1.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/fonts/iconic/css/material-design-iconic-font.min1.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/animate/animate2.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/css-hamburgers/hamburgers.min1.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/animsition/css/animsition.min1.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/select2/select2.min1.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/vendor/daterangepicker/daterangepicker1.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/util1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/main1.css')}}">

	<meta name="robots" content="noindex, follow">
	<script nonce="4c67ea82-9da6-4403-aa56-c2675cb7f538">
		try {
			(function(w, d) {
				! function(bb, bc, bd, be) {
					bb[bd] = bb[bd] || {};
					bb[bd].executed = [];
					bb.zaraz = {
						deferred: [],
						listeners: []
					};
					bb.zaraz._v = "5674";
					bb.zaraz.q = [];
					bb.zaraz._f = function(bf) {
						return async function() {
							var bg = Array.prototype.slice.call(arguments);
							bb.zaraz.q.push({
								m: bf,
								a: bg
							})
						}
					};
					for (const bh of ["track", "set", "debug"]) bb.zaraz[bh] = bb.zaraz._f(bh);
					bb.zaraz.init = () => {
						var bi = bc.getElementsByTagName(be)[0],
							bj = bc.createElement(be),
							bk = bc.getElementsByTagName("title")[0];
						bk && (bb[bd].t = bc.getElementsByTagName("title")[0].text);
						bb[bd].x = Math.random();
						bb[bd].w = bb.screen.width;
						bb[bd].h = bb.screen.height;
						bb[bd].j = bb.innerHeight;
						bb[bd].e = bb.innerWidth;
						bb[bd].l = bb.location.href;
						bb[bd].r = bc.referrer;
						bb[bd].k = bb.screen.colorDepth;
						bb[bd].n = bc.characterSet;
						bb[bd].o = (new Date).getTimezoneOffset();
						if (bb.dataLayer)
							for (const bo of Object.entries(Object.entries(dataLayer).reduce(((bp, bq) => ({
									...bp[1],
									...bq[1]
								})), {}))) zaraz.set(bo[0], bo[1], {
								scope: "page"
							});
						bb[bd].q = [];
						for (; bb.zaraz.q.length;) {
							const br = bb.zaraz.q.shift();
							bb[bd].q.push(br)
						}
						bj.defer = !0;
						for (const bs of [localStorage, sessionStorage]) Object.keys(bs || {}).filter((bu => bu.startsWith("_zaraz_"))).forEach((bt => {
							try {
								bb[bd]["z_" + bt.slice(7)] = JSON.parse(bs.getItem(bt))
							} catch {
								bb[bd]["z_" + bt.slice(7)] = bs.getItem(bt)
							}
						}));
						bj.referrerPolicy = "origin";
						bj.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bb[bd])));
						bi.parentNode.insertBefore(bj, bi)
					};
					["complete", "interactive"].includes(bc.readyState) ? zaraz.init() : bb.addEventListener("DOMContentLoaded", zaraz.init)
				}(w, d, "zarazData", "script");
			})(window, document)
		} catch (e) {
			throw fetch("/cdn-cgi/zaraz/t"), e;
		};
	</script>
</head>

<body style="background-color: #999999;">
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form method="post" action="{{route('register.form')}}"class="login100-form validate-form">
				@csrf
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="full_name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="user_name" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="text" name="repeat_password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
						<a href="{{route('signin.form')}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="{{asset('Frontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

	<script src="{{asset('Frontend/vendor/animsition/js/animsition.min.js')}}"></script>

	<script src="{{asset('Frontend/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('Frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('Frontend/vendor/select2/select2.min.js')}}"></script>

	<script src="{{asset('Frontend/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('Frontend/vendor/daterangepicker/daterangepicker.js')}}"></script>

	<script src="{{asset('Frontend/vendor/countdowntime/countdowntime.js')}}"></script>

	<script src="{{asset('Frontend/js/main2.js')}}"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"88e625fbad829e80","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v13/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 07:18:26 GMT -->

</html>