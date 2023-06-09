@extends('layouts.app')

@section('content')
    <!-- PAGE TITLE
                                ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="{{ asset('image/DV2A3033.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Frequently Asked Question</h1>
                    <ul>
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="#!">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- FAQ
                                ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
               
                <h2 class="mb-0">Ask anything</h2>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                    <div id="accordion" class="accordion-style">
                        @if (count($faq) > 0)
                            @foreach ($faq as $item)
                                @if ($item->status == '1')
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $loop->iteration }}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link main-font fw-bold" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $loop->iteration }}" aria-expanded="true"
                                                    aria-controls="collapse{{ $loop->iteration }}">
                                                    {{ $item->question }}
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse{{ $loop->iteration }}" class="collapse show" aria-labelledby="heading{{ $loop->iteration }}"
                                            data-bs-parent="#accordion">
                                            <div class="card-body">
                                                 {!! $item->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                    </div>
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="400ms">
                    <div class="bg-img cover-background p-1-6 p-sm-1-9 rounded ms-lg-4" data-overlay-dark="6"
                        data-background="{{ asset('assets/img/logos/TAHO-TZ-1') }}">
                        <div class="z-index-9 position-relative faq-form">
                            <h4 class="d-block text-white mb-3">Send Us Message</h4>
                            <form action="{{ url('faq') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">

                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <input class="form-control" id="name" type="text" name="name"
                                                        placeholder="Your name here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <input class="form-control" id="email" type="text" name="email"
                                                        placeholder="Your email here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="catId" class="form-control" id="subject">
                                                    <option value="#">Select your Category here</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->Title }}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <input class="form-control" id="phone" type="text" name="phone"
                                                        placeholder="Your phone here" />
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <button class="butn small" type="submit">Send question</button>
                                            </div>

                                        </div>
                                        <!-- End Submit button -->

                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION
                                ================================================== -->
    <section class="bg-img cover-background wow fadeIn secondary-overlay" data-wow-delay="200ms" data-overlay-dark="8"
        data-background="{{ asset('image/20220607_152515.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <h2 class="text-white display-16 display-sm-11 display-md-9 display-lg-5 mb-1-9">The Awaited One Hand Organization, Good Health,Love,Happines and Life sustainability is our pride.</h2>
                    <a href="{{ url('/donate') }}" class="butn primary">Donate Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
