@extends('frontend.app')

@section('frontend')

<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>About Us</h1>
					<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="{{asset('frontend/images/couch3.png')}}" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->



<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6">
				<h2 class="section-title">Why Choose Us</h2>
				<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('frontend/images/truck.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Fast &amp; Free Shipping</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('frontend/images/bag.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Easy to Shop</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('frontend/images/support.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>24/7 Support</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="{{asset('frontend/images/return.svg')}}" alt="Image" class="imf-fluid">
							</div>
							<h3>Hassle Free Returns</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="{{asset('frontend/images/why-choose-us-img.jpg')}}" alt="Image" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Team Section -->
<div class="untree_co-section">
	<div class="container">

		<div class="row mb-5">
			<div class="col-lg-5 mx-auto text-center">
				<h2 class="section-title">Our Team</h2>
			</div>
		</div>

		<div class="row mb-5">

			<!-- Start Baris 1 -->
			<div class="col-12">
				<div class="row justify-content-center">

					<!-- Start Column 1 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<div class="team-member text-center">
							<img src="{{asset('frontend/images/toriq.jpg')}}" class="img-fluid mb-5" style="width: 100%; height: 300px; object-fit: cover;">
							<h3 class=""><a href="#"><span class="">Toriqul Firdaus Tear p</span></a></h3>
							<span class="d-block position mb-4">Senior Software Engineer</span>
							<p>Idho, programmer handal, selalu tenang menghadapi tantangan. Kreatif dan detail-oriented, dia menghadirkan solusi inovatif dalam setiap kode yang ditulisnya.</p>
							<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow-forward"></span></a></p>
						</div>
					</div>
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<div class="team-member text-center">
							<img src="{{asset('frontend/images/putra.jpg')}}" class="img-fluid mb-5" style="width: 100%; height: 300px; object-fit: cover;">

							<h3 class=""><a href="#"><span class="">Achmad Putra Arifky</span></a></h3>
							<span class="d-block position mb-4">Full Stack Developer</span>
							<p>Achmad, seorang programmer cerdas dan tekun. Tidak hanya mahir dalam coding, tetapi juga penuh semangat berkolaborasi. Kepribadiannya yang ramah membuatnya menjadi teman yang menyenangkan.</p>
							<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow-forward"></span></a></p>
						</div>
					</div>
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<div class="team-member text-center">
							<img src="{{asset('frontend/images/isra.jpg')}}" class="img-fluid mb-5" style="width: 100%; height: 300px; object-fit: cover;">
							<h3 class=""><a href="#"><span class="">Isra Septia Cahyani</span></a></h3>
							<span class="d-block position mb-4">Software Architect</span>
							<p>Isra, programmer yang sangat fokus dan konsisten. Kreativitasnya terpancar dalam setiap proyek yang dipegangnya. Selalu bersedia belajar dan membagi pengetahuannya kepada tim.</p>
							<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow-forward"></span></a></p>
						</div>
					</div>
					<!-- End Column 3 -->

				</div>
			</div>
			<!-- End Baris 1 -->

			<!-- Start Baris 2 -->
			<div class="col-12">
				<div class="row justify-content-center" style="margin-top: 5rem;">

					<!-- Start Column 4 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<div class="team-member text-center">
							<img src="{{asset('frontend/images/lyra.jpg')}}" class="img-fluid mb-5" style="width: 100%; height: 300px; object-fit: cover;">

							<h3 class=""><a href="#"><span class="">Lyra Salsabillah Safirna Putri</span></a></h3>
							<span class="d-block position mb-4">Junior Developer & QA Specialist</span>
							<p>"Lyra, seorang programmer yang penuh inisiatif. Dengan kecerdasan dan keuletannya, dia selalu mencari cara untuk meningkatkan efisiensi kode. Selain itu, kepribadiannya yang ramah membuatnya disukai oleh semua orang.</p>
							<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow-forward"></span></a></p>
						</div>
					</div>
					<!-- End Column 4 -->

					<!-- Start Column 5 -->
					<div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
						<div class="team-member text-center">
							<img src="{{asset('frontend/images/daniel.jpeg')}}" class="img-fluid mb-5" style="width: 100%; height: 300px; object-fit: cover;">

							<h3 class=""><a href="#"><span class="">Ahmad Daniyal F</span></a></h3>
							<span class="d-block position mb-4">DevOps Engineer</span>
							<p>Daniel, programmer yang energetik dan penuh semangat. Selain memiliki kemampuan teknis yang kuat, dia juga memiliki kemampuan komunikasi yang baik. Setiap tantangan dianggap sebagai peluang untuk berkembang.</p>
							<p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow-forward"></span></a></p>
						</div>
					</div>
					<!-- End Column 5 -->

				</div>
			</div>
			<!-- End Baris 2 -->
		</div>
	</div>
</div>


<!-- End Team Section -->





@endsection