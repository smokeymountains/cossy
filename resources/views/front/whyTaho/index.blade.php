@extends('layouts.app')
@section('content')
    <!-- PAGE TITLE
                ================================================== -->
    @if (count($gen) > 0)
        @foreach ($gen as $item)
            <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
                data-background="{{ $item->getFirstMediaUrl('general', 'thumb') }}">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h1 class="text-animation" data-in-effect="fadeInRight">WHY TAHO ?</h1>
                            <ul>
                                <li><a href="{{ url('') }}">Home</a></li>
                                <li><a href="#!">Why The Awaited One Hand Organization</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
                    <span class="square bg-primary"></span>
                    <span class="square bg-secondary"></span>
                </div>
            </section>
        @endforeach
    @endif
    <!-- BLOG DETAILS
             ================================================== -->
    @if (count($why) > 0)
        <section class="blogs">
            <div class="container">
                <div class="row">
                    <!-- left content -->
                    @foreach ($why as $item)
                        <div class="col-lg-9 pe-lg-2-5 pe-xl-2-9 mb-2-9 mb-lg-0">
                            <div class="posts">

                                <!-- post -->
                                <div class="wow fadeIn" data-wow-delay="200ms">
                                    <img src="{{ $item->getFirstMediaUrl('taho3', 'bigthumb') }}" class="rounded"
                                        alt="...">
                                </div>

                                <div class="content wow fadeIn" data-wow-delay="400ms">
                                    <div class="meta">
                                        <h2 class="h3 mb-3">WHY TAHO</h2>

                                    </div>
                                    <div>
                                        <p class="mb-0">{!! $item->descr !!}</p>

                                    </div>

                                    <div class="separator"></div>
                                    <div class="row g-0">


                                    </div>
                                </div>
                                <!-- end post -->


                            </div>
                        </div>
                        <!-- end left content -->
                    @endforeach


                    <!-- right sidebar -->
                    <div class="col-lg-3">
                        <div class="side-bar">

                            <div class="widget wow fadeInUp" data-wow-delay="300ms">
                                <h6 class="h5 mb-3">Categories</h6>
                                <ul class="list-style4">
                                    @if (count($categories))
                                        @foreach ($categories as $item)
                                            <li><a href="#!"><i
                                                        class="fas fa-angle-right me-2"></i>{{ $item->Title }}</a>
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>

                            <div class="widget wow fadeInUp" data-wow-delay="700ms">
                                <h6 class="h5 mb-3">Follow Us</h6>
                                <ul class="social-icon-style1">
                                    <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="https://mobile.twitter.com/taho_tanzania"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/taho_tanzania/"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://wa.me/255767291030"><i class="fab fa-whatsapp"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end right sidebar -->

                </div>
            </div>
        </section>
    @endif

@endsection
