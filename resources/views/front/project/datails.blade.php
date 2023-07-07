@extends('layouts.app')
@section('content')
    <!-- PAGE TITLE
                    ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="{{ asset('image/20220607_152121.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Project Description</h1>
                    <ul>
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="#!">Project Description</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- CAUSE DETAILS
                    ================================================== -->
    @if ($project)
        @if ($project->id)
            <section class="cause-details">
                <div class="container">
                    <div class="row">

                        <!-- left content -->
                        <div class="col-lg-9 pe-lg-2-5 pe-xl-2-9 mb-2-9 mb-lg-0">
                            <div>
                                <img src="{{ $project->getFirstMediaUrl('project','bigthumb') }}" class="rounded-top" alt="...">

                            </div>
                            <h2 class="mb-4">{{ $project->Title }}</h2>
                            <div class="d-block d-md-flex justify-content-md-between mb-1-9 pb-1-9 border-bottom border-color-extra-light-gray wow fadeIn"
                                data-wow-delay="200ms">
                                <div>
                                    <ul class="list-style3 clearfix">
                                        <li><a href="#!" class="font-weight-600">Posted on: <span
                                                    class="text-primary">{{ $project->created_at->diffForHumans() }}</span></a></li>
                                        <li><a href="#!" class="font-weight-600">Start Date: <span
                                                    class="text-primary">{{ $project->start }}</span></a></li>
                                        <li class="mb-0"><a href="#!" class="font-weight-600">End Date: <span
                                                    class="text-primary">{{ $project->End }}</span></a></li>
                                        <li class="mb-0"><a href="#!" class="font-weight-600">Project Status: @if ($project->status==1)
                                            <span
                                                    class="text-primary">Active</span></a></li>
                                                    @else
                                                    <span
                                                    class="text-primary">Completed</span></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="mt-3 mt-md-0">
                                    <a href="donate-now.html" class="butn medium">Donate Now</a>
                                </div>
                            </div>
                            <div class="mb-2-5 wow fadeIn" data-wow-delay="400ms">
                                <h3 class="mb-3 h4">PROJECT DESCRIPTION</h3>
                                <p>{!!$project->Descr!!}</p>
                               



                            </div>


                        </div>
                        <!-- end left content -->

                        <!-- right sidebar -->
                        <div class="col-lg-3">
                            <div class="side-bar">
                                <div class="widget wow fadeInUp" data-wow-delay="300ms">
                                    <h6 class="h5 mb-3">Categories</h6>
                                    <ul class="list-style4">
                                        @if (count($categories))
                                            @foreach ($categories as $item)
                                                <li><a href="{{ url('categories/' . $item->id) }}"><i
                                                            class="fas fa-angle-right me-2"></i>{{ $item->Title }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="widget wow fadeInUp" data-wow-delay="600ms">
                                <h6 class="h5 mb-3">Follow Us</h6>
                                <ul class="social-icon-style1">
                                    <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="https://mobile.twitter.com/taho_tanzania"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/taho_tanzania/"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li><a href="https://wa.me/255767291030"><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end right sidebar -->
                </div>
                </div>
            </section>
        @endif
    @endif
@endsection
