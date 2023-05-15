@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Requests</a></li>

                </ol>
                <h1 class="page-header mb-0">TAHO</h1>
            </div>
            

        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">why Taho</h4>

            </div>

            <div class="panel-body">
                <!-- BEGIN panel-body -->
                <div class="panel-body">
                    <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                        <thead>
                            <tr>


                                
                                <th class="text-nowrap" style="text-align: center" width="90%">Why TAHO</th>
                            
                                <th class="text-nowrap" style="text-align: center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($why) > 0)
                                @foreach ($why as $item)
                                    <tr class="odd gradeX">

                                      
                                        <td >{{  $item->descr }}</td>
                                        
                                        

                                        <td style="text-align: center">
                                            <a href="{{ url('admin/why/' . $item->id . '/edit') }}"><i
                                                    class="fa fa-pencil fa-lg me-2 ms-n2 text-primary-900"></i><a>
                                                    
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
                <!-- END panel-body -->
            </div>
        </div>
        <!-- END panel -->
    </div>
    <!-- END #content -->

@endsection
@section('scripts')
    <!-- script -->
    <script>
        var options = {
            dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex me-0 me-md-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-md-5"i><"col-md-7"p>>>',
            buttons: [{
                    extend: 'copy',
                    className: 'btn-sm'
                },
                {
                    extend: 'csv',
                    className: 'btn-sm'
                },
                {
                    extend: 'excel',
                    className: 'btn-sm'
                },
                {
                    extend: 'pdf',
                    className: 'btn-sm'
                },
                {
                    extend: 'print',
                    className: 'btn-sm'
                }
            ],
            responsive: true,
            colReorder: true,
            keys: true,
            rowReorder: true,
            select: true
        };

        if ($(window).width() <= 767) {
            options.rowReorder = false;
            options.colReorder = false;
        }
        $('#data-table-combine').DataTable(options);
    </script>
@endsection
