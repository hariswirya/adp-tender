@extends('luar.induk')
@section('title', 'Selamat Datang')
@section('content')
		<header class="default-header">
			<div class="sticky-header">
				<div class="container">
					<div class="header-content d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="#top" class="smooth"><h1 class="brand brand-name text-white"> <i class="fa fa-users"></i> <i style="color:red">ADP</i></h1></a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen justify-content-center align-items-center">
					<div class="col-lg-8">
						<div class="banner-content text-center">
							<p class="text-uppercase text-white">We work hard, we result perfect</p>
							<h1 class="text-uppercase text-white">ADP <span style="color:red">Tender</span></h1>
                            <a href="{{ route('login') }}" class="primary-btn banner-btn" >Masuk</a>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection
