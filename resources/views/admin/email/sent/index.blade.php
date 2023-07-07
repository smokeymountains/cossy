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
                            <li ><a href="{{ url('admin/email') }}"><i class="fa fa-hdd fa-lg fa-fw me-2"></i> Inbox
                                    </a>
                            </li>
                            
                            <li class="active"><a href="{{ url('admin/email/sent') }}"><i class="fa fa-envelope fa-lg fa-fw me-2"></i> Sent</a></li>
                            <li><a href="{{ url('admin/email/draft') }}"><i class="fa fa-save fa-lg fa-fw me-2"></i> Drafts</a></li>
                            <li><a href="{{ url('admin/email/trash') }}"><i class="fa fa-trash-alt fa-lg fa-fw me-2"></i> Trash</a></li>
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
                        <div class="form-check me-2">
                            <input type="checkbox" class="form-check-input" data-checked="email-checkbox"
                                id="emailSelectAll" data-change="email-select-all" />
                            <label class="form-check-label" for="emailSelectAll"></label>
                        </div>
                        <div class="dropdown me-2">
                            <button class="btn btn-white btn-sm" data-bs-toggle="dropdown">
                                View All <span class="caret ms-3px"></span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="javascript:;" class="dropdown-item"><i class="fa fa-circle fs-9px fa-fw me-2"></i>
                                    All</a>
                                <a href="javascript:;" class="dropdown-item"><i
                                        class="fa fa-circle fs-9px fa-fw me-2 text-muted"></i> Unread</a>
                                <a href="javascript:;" class="dropdown-item"><i
                                        class="fa fa-circle fs-9px fa-fw me-2 text-blue"></i> Contacts</a>

                            </div>
                        </div>
                        <button class="btn btn-sm btn-white me-2"><i class="fa fa-redo"></i></button>
                        <div class="w-100 d-sm-none d-block mb-2 hide" data-email-action="divider"></div>
                        <!-- BEGIN btn-group -->
                        <div class="btn-group">
                            <button class="btn btn-sm btn-white hide" data-email-action="delete"><i
                                    class="fa fa-times me-1"></i> <span class="hidden-xs">Delete</span></button>
                            <button class="btn btn-sm btn-white hide" data-email-action="archive"><i
                                    class="fa fa-folder me-1"></i> <span class="hidden-xs">Archive</span></button>
                            <button class="btn btn-sm btn-white hide" data-email-action="archive"><i
                                    class="fa fa-trash me-1"></i> <span class="hidden-xs">Junk</span></button>
                        </div>
                        <!-- END btn-group -->
                        <!-- BEGIN btn-group -->
                        <div class="btn-group ms-auto">
                            <button class="btn btn-white btn-sm">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="btn btn-white btn-sm">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                        <!-- END btn-group -->
                    </div>
                    <!-- END btn-toolbar -->
                </div>
                <div class="mailbox-content-body">
                    <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                        <!-- BEGIN list-email -->
                        <ul class="list-group list-group-lg no-radius list-email">
                            @if ($aMessage->count() > 0)
                                @foreach ($aMessage as $oMessage)
                                    <li class="list-group-item unread">
                                        <div class="email-checkbox">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    data-checked="email-checkbox" id="emailCheckbox1">
                                                <label class="form-check-label" for="emailCheckbox1"></label>
                                            </div>
                                        </div>
                                        <a href="email_detail.html" class="email-user bg-blue">
                                            <span class="text-white">{{ $oMessage->getFrom()[0]->mail }}</span>
                                        </a>
                                        <div class="email-info">
                                            <a href="email_detail.html">
                                                <span class="email-sender">{{ $oMessage->getTo()[0]->mail }}</span>
                                                <span class="email-title">{{ $oMessage->getSubject() }}</span>
                                                <span class="email-time">{{ $oMessage->date }}</span>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <!-- END list-email -->
                    </div>
                </div>
                <div class="mailbox-content-footer d-flex align-items-center">
                    <div class="text-dark fw-bold">1,232 messages</div>
                    <div class="btn-group ms-auto">
                        <button class="btn btn-white btn-sm">
                            <i class="fa fa-fw fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-white btn-sm">
                            <i class="fa fa-fw fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- END mailbox-content -->
        </div>
        <!-- END mailbox -->
    </div>
    <!-- END #content -->
@endsection