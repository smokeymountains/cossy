@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Project</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Add Project</a></li>
                </ol>
                <h1 class="page-header mb-0">Add Project</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/project') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa-solid fa-chevron-right " style="color: #fafafa;"></i><i class="fa-solid fa-chevron-right "
                        style="color: #fafafa;"></i> Back</a>
            </div>
        </div>
        <!-- BEGIN col-10 -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">PROJECT</h4>
                </div>
                <div class="panel-body">

                    <form action="{{ url('admin/project') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Project Title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Summary</label>
                                    <input type="text" class="form-control" name="meta" placeholder="Project Summary">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label col-form-label col-md-3">Project Start Date</label>
                                    <div class="input-group date" id="datepicker-disabled-past"
                                        data-date-format="yyyy-mm-dd" data-date-start-date="Date.default">
                                        <input type="text" class="form-control" placeholder="Select Start Date "
                                            name="date" />

                                        <span class="input-group-text input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label col-form-label col-md-3">Project End Date</label>
                                    <div class="input-group date" id="datepicker-disabled-pastb"
                                        data-date-format="yyyy-mm-dd" data-date-start-date="Date.default">
                                        <input type="text" class="form-control" placeholder="Select End Date "
                                            name="date1" />

                                        <span class="input-group-text input-group-addon"><i
                                                class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                            name="status">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Status: Project Active
                                            or Complete</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                            name="pop">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Popular: Visible or
                                            Hidden</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea class="summernote" name="descr"></textarea>
                                </div>
                            </div>
                            <div class="">
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-lime">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(".summernote").summernote({
            placeholder: 'Please, write project description here!',
            height: "300"
        });
    </script>
    <script>
        $("#timepicker").timepicker();
    </script>
    <script>
        $("#datepicker-disabled-past").datepicker({
            todayHighlight: true,
            autoclose: true
        });
    </script>
    <script>
        $("#datepicker-disabled-pastb").datepicker({
            todayHighlight: true,
            autoclose: true
        });
    </script>
    <script>
        var elm = document.getElementById('id-here');
        var switchery = new Switchery(elm);

        switchery.enable(); // enable
        switchery.disable(); // disable
        switchery.destroy(); // destroy
    </script>
@endsection
