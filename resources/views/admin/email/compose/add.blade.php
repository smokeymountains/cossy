@extends('layouts.admin')
@section('content')
    <!-- BEGIN #content -->
    <div id="content" class="app-content p-0">
        <!-- BEGIN mailbox -->
        <div class="mailbox">
            <!-- BEGIN mailbox-sidebar -->
            <div class="mailbox-sidebar">
                <div class="mailbox-sidebar-header d-flex justify-content-center">
                    <a href="#emailNav" data-bs-toggle="collapse" class="btn btn-dark btn-sm me-auto d-block d-lg-none">
                        <i class="fa fa-cog"></i>
                    </a>
                    <a href="{{ url('admin/email/compose') }}" class="btn btn-dark ps-40px pe-40px btn-sm">
                        Compose
                    </a>
                </div>
                <div class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
                    <!-- BEGIN scrollbar -->
                    <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                        <div class="nav-title"><b>FOLDERS</b></div>
                        <ul class="nav nav-inbox">
                            <<li class="active"><a href="{{ url('admin/email') }}"><i
                                        class="fa fa-hdd fa-lg fa-fw me-2"></i> Inbox
                                    <span
                                        class="badge bg-gray-600 fs-10px rounded-pill ms-auto fw-bolder pt-4px pb-5px px-8px">52</span></a>
                                </li>

                                <li><a href="{{ url('admin/email/sent') }}"><i class="fa fa-envelope fa-lg fa-fw me-2"></i>
                                        Sent</a></li>

                        </ul>

                    </div>
                    <!-- END scrollbar -->
                </div>
            </div>
            <!-- END mailbox-sidebar -->
            <!-- BEGIN mailbox-content -->
            <div class="mailbox-content">
                <div class="mailbox-content-header">
                    <!-- BEGIN btn-toolbar -->
                    <div class="btn-toolbar align-items-center">


                        <div class="ms-auto">
                            <a href="{{ url('admin/email') }}" class="btn btn-white btn-sm"><i
                                    class="fa fa-fw fa-times"></i> <span class="hidden-xs">Discard</span></a>
                        </div>
                    </div>
                    <!-- END btn-toolbar -->
                </div>
                <div class="mailbox-content-body">
                    <!-- BEGIN scrollbar -->
                    <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                        <!-- BEGIN form -->
                        <form action="{{ url('admin/email/compose') }}" method="POST" name="email_to_form"
                            class="mailbox-form" enctype="multipart/form-data">
                            @csrf
                            <!-- BEGIN mailbox-to -->

                            <div class="mailbox-to">
                                <label class="control-label">To:</label>

                                <textarea class="form-control" placeholder="Email" name="email" ></textarea>

                                
                            </div>
                            <!-- END mailbox-to -->

                            <div data-id="extra-cc"></div>

                            <!-- BEGIN mailbox-subject -->
                            <div class="mailbox-subject">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" />
                            </div>
                            <!-- END mailbox-subject -->
                            <!-- BEGIN mailbox-input -->
                            <div class="mailbox-input">
                                <textarea class="summernote" name="body"></textarea>
                            </div>
                            <!-- END mailbox-input -->

                    </div>
                    <!-- END scrollbar -->
                </div>





                <div class="mailbox-content-footer d-flex align-items-center justify-content-end">
                    <span class="btn btn-white btn-sm fileinput-button me-1">
                        <input type="file" ><i class="fa fa-fw fa-paperclip"></i> <span
                            class="hidden-xs">Attach</span>
                    </span>
                    <button type="submit" class="btn btn-white btn-sm"><i class="fa fa-fw fa-envelope"></i> <span
                            class="hidden-xs">Send</span></button>
                </div>
                </form>
                <!-- END form -->
            </div>
            <!-- END mailbox-content -->
        </div>
        <!-- END mailbox -->
    </div>
    <!-- END #content -->
@endsection
