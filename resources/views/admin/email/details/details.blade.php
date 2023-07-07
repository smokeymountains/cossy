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
                    <a href="email_compose.html" class="btn btn-dark ps-40px pe-40px btn-sm">
                        Compose
                    </a>
                </div>
                <div class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
                    <!-- BEGIN scrollbar -->
                    <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                        <div class="nav-title"><b>FOLDERS</b></div>
                        <ul class="nav nav-inbox">
                            <li class="active"><a href="{{ url('admin/email') }}"><i class="fa fa-hdd fa-lg fa-fw me-2"></i>
                                    Inbox
                                   </a>
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
                    <div class="btn-toolbar">
                        <div class="btn-group me-2">
                            <a href="javascript:;" class="btn btn-white btn-sm"><i class="fa fa-fw fa-reply"></i> <span
                                    class="d-none d-lg-inline">Reply</span></a>
                        </div>
                        <div class="btn-group me-2">
                            <a href="javascript:;" class="btn btn-white btn-sm"><i class="fa fa-fw fa-trash"></i> <span
                                    class="d-none d-lg-inline">Delete</span></a>
                            
                        </div>
                        <div class="btn-group ms-auto me-2">
                          <!--  <a href="email_inbox.html" class="btn btn-white btn-sm disabled"><i
                                    class="fa fa-fw fa-arrow-up"></i></a>
                            <a href="email_inbox.html" class="btn btn-white btn-sm"><i
                                    class="fa fa-fw fa-arrow-down"></i></a>-->
                        </div>
                        <div class="btn-group">
                            <a href="{{ url('admin/email') }}" class="btn btn-white btn-sm"><i class="fa fa-fw fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="mailbox-content-body">
                    <!-- BEGIN scrollbar -->
                    <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                        <div class="p-3">
                            <h3 class="mb-3">{{ $aMessage->getSubject() }}</h3>
                            <div class="d-flex mb-3">
                                <a href="javascript:;">
                                    <img class="rounded-pill" width="48" alt=""
                                        src="../assets/img/user/user-12.jpg" />
                                </a>
                                <div class="ps-3">
                                    <div class="email-from text-dark fs-14px mb-3px fw-bold">
                                        From: {{ $aMessage->getFrom()[0]->mail }}
                                    </div>
                                    <div class="mb-3px"><i class="fa fa-clock fa-fw"></i>{{ $aMessage->getDate()}}</div>
                                    <div class="email-to">
                                        To: info@tahotz.org
                                    </div>
                                </div>
                            </div>
                            <hr class="bg-gray-500" />
                            <ul class="attached-document clearfix">
                                 <!--   <li class="fa-file">
                                    <div class="document-file">
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf"></i>
                                        </a>
                                    </div>
                                <div class="document-name"><a href="javascript:;"
                                            class="text-decoration-none">flight_ticket.pdf</a></div>
                                </li>
                                <li class="fa-camera">
                                    <div class="document-file">
                                        <a href="javascript:;">
                                            <img src="../assets/img/gallery/gallery-11.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="document-name"><a href="javascript:;"
                                            class="text-decoration-none">front_end_mockup.jpg</a></div>
                                </li>-->
                            </ul>

                            <p class="text-dark">
                               {!! $aMessage->getTextBody() !!}
                            </p>
                           
                        </div>
                    </div>
                    <!-- END scrollbar -->
                </div>
                <div class="mailbox-content-footer d-flex align-items-center justify-content-end">
                    <div class="btn-group me-2">
                        <!--<a href="email_inbox.html" class="btn btn-white btn-sm disabled"><i
                                class="fa fa-fw fa-arrow-up"></i></a>
                        <a href="email_inbox.html" class="btn btn-white btn-sm"><i class="fa fa-fw fa-arrow-down"></i></a>-->
                    </div>
                    <div class="btn-group">
                        <a href="{{ url('admin/email') }}" class="btn btn-white btn-sm"><i class="fa fa-fw fa-times"></i></a>
                    </div>
                </div>
            </div>
            <!-- END mailbox-content -->
        </div>
        <!-- END mailbox -->
    </div>
    <!-- END #content -->
@endsection
