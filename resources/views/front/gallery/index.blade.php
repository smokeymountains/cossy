@extends('layouts.app')

@section('content')
        <!-- PAGE TITLE
        ================================================== -->
   

        <!-- GALLERY
        ================================================== -->
        <section>
            <div class="container lg-container">
                <div class="section-heading">
                    
                    <h2>Gallery of our works </h2>
                </div>
                <div class="row">
                    <div class="filtering col-sm-12 text-center">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.charity'>News</span>
                        <span data-filter='.medical'>Appeals</span>
                        <span data-filter='.education'>Blog</span>
                       
                    </div>
                </div>
                <div class="text-center portfolio-gallery-isotope row">
                    
                    
                    @foreach ($apeal as $item)
                         <div class="col-md-6 col-lg-4 mb-1-9 medical" data-src="{{ $item->getFirstMediaUrl('apeal','thumb') }}" data-sub-html="<h4 class='text-white'>Gallery #02</h4>">
                        <div class="gallery-block">
                            <img src="{{ $item->getFirstMediaUrl('apeal','thumb') }}" alt="..." class="rounded">
                            <div class="gallery-overlay">
                                <div class="d-table w-100 h-100 overflow-hidden">
                                    <div class="d-table-cell align-middle">
                                        <div class="gallery-btn">
                                            <a href="#!"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                   
                     @foreach ($blog as $item)
                        <div class="col-md-6 col-lg-4 mb-1-9 education" data-src="{{ $item->getFirstMediaUrl('blog','thumb') }}" data-sub-html="<h4 class='text-white'>Gallery #05</h4>">
                        <div class="gallery-block">
                            <img src="{{ $item->getFirstMediaUrl('blog','thumb') }}" alt="..." class="rounded">
                            <div class="gallery-overlay">
                                <div class="d-table w-100 h-100 overflow-hidden">
                                    <div class="d-table-cell align-middle">
                                        <div class="gallery-btn">
                                            <a href="#!"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                     @foreach ($causes as $item)
                        <div class="col-md-6 col-lg-4 mb-1-9 charity" data-src="{{ $item->getFirstMediaUrl('causes','thumb') }}" data-sub-html="<h4 class='text-white'>Gallery #06</h4>">
                        <div class="gallery-block">
                            <img src="{{ $item->getFirstMediaUrl('causes','thumb') }}" alt="..." class="rounded">
                            <div class="gallery-overlay">
                                <div class="d-table w-100 h-100 overflow-hidden">
                                    <div class="d-table-cell align-middle">
                                        <div class="gallery-btn">
                                            <a href="#!"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
               
                </div>
            </div>
        </section>
@endsection