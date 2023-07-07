@extends('layouts.app')
@section('content')
    <!-- PAGE TITLE
                    ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="{{ asset('image/52.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Our Projects</h1>
                    <ul>
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="#!">Project</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- CAUSES
                    ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <span class="d-block text-primary display-22 display-md-21 display-lg-20 alt-font wow text-animation"
                    data-in-effect="fadeInRight">Projects</span>

            </div>
            <div class="row mt-n1-9">
                @if (count($project) > 0)
                    <div class="row mt-n1-9">
                        @foreach ($project as $item)
                            <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                                <div class="card card-style1 border-color-extra-light-gray h-100">
                                    <img src="{{ $item->getFirstMediaUrl('project', 'thumb') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body px-1-6 px-sm-1-9 pb-1-9 pt-2-4 position-relative">

                                        <div class="text-secondary small font-weight-600"> <span
                                                class="display-30 font-weight-600"><i
                                                    class="far fa-calendar-alt me-2 text-secondary"></i><a
                                                    href="#!">{{ $item->created_at->diffForHumans() }}</a></span></div>
                                        <h3 class="h4 mb-3"><a
                                                href="{{ url('project/' . $item->id) }}">{{ $item->Title }}</a></h3>
                                        <p>{{ $item->meta }}</p>
                                        <a href="{{ url('project/' . $item->id) }}" class="butn-read"><span>Read
                                                More</span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="row wow fadeIn" data-wow-delay="400ms">
                <div class="col-sm-12">
                    <!-- pager -->
                    <div class="text-center mt-6 mt-lg-7">
                        <div class="pagination text-extra-dark-gray">
                            {{ $project->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                    <!-- end pager -->
                </div>
            </div>
        </div>
    </section>
@endsection
