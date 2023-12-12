<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="icon" href="{{ asset('frontend/images/logo.png') }}" type="image/png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    <!-- cart -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/style1.css') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <title>MarketGo </title>
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('user/img/marketGo5.png') }}"
                    width="180px"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">

                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ url('/shop') }}">Shop</a></li>
                    <li><a class="nav-link" href="{{ url('/about') }}">About us</a></li>
                    <li><a class="nav-link" href="{{ url('/contact') }}">Contact us</a></li>
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->role == 'admin')
                                <li><a class="nav-link" href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                            @endif
                            @if (Auth::user()->name === null)
                                <li>
                                    <a class="nav-link" href="{{ url('profile') }}">
                                        {{ Auth::user()->email }}
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a class="nav-link " href="{{ url('profile') }}">
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('frmlogout').submit();"
                                    class="nav-link">Logout</a>
                                <form id="frmlogout" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                            <!-- cart -->
                            <div class="dropdown ">
                                <button type="button" class="btn btn-primary " data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart " aria-hidden="true"></i> Cart <span
                                        class="badge badge-pill badge-warning">{{ count((array) session('cart')) }}</span>

                                </button>
                                <div class="dropdown-menu ">
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-6  ">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                                class="badge badge-pill badge-warning">{{ count((array) session('cart')) }}</span>
                                        </div>
                                        @php $total = 0 @endphp
                                        @foreach ((array) session('cart') as $id => $details)
                                            @php $total += $details['harga'] * $details['quantity'] @endphp
                                        @endforeach
                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                            <p>Total: <br> <span class=""> Rp. {{ $total }}</span> </p>

                                        </div>
                                    </div>
                                    @if (session('cart'))
                                        @foreach (session('cart') as $id => $details)
                                            <div class="row cart-detail">
                                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                    @empty($details['foto'])
                                                        <img src="{{ url('admin/img/nophoto.jpg') }}" />
                                                    @else
                                                        <img src="{{ asset('admin/img') }}/{{ $details['foto'] }}" />
                                                    @endempty

                                                </div>
                                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                    <p>{{ $details['nama_produk'] }}</p>
                                                    <span class="price text-danger"> Rp. {{ $details['harga'] }}</span>
                                                    <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- endcart -->
                    </ul>
                @else
                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        <li><a class="nav-link" href="{{ route('login') }}"><img
                                    src="{{ asset('frontend/images/user.svg') }}"></a></li>

                    </ul>

                @endauth
                @endif

            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->


    @yield('frontend')


    <footer class="footer-section">
        <div class="container relative">

            <div class="sofa-img">
                <img src="{{ asset('frontend/images/sofa1.png') }}" alt="Image" class="img-fluid">
            </div>

            <div class="row">

            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"> <img src="{{ asset('user/img/marketGo.png') }}"
                            width="180px"></div>
                    <p class="mb-4">Please follow us via the link below.t</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Knowledge base</a></li>
                                <li><a href="#">Live chat</a></li>
                            </ul>
                        </div>


                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;MarketGo
                            <script>
                                document.write(new Date().getFullYear());
                            </script>.
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->

    @yield('scripts')
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
