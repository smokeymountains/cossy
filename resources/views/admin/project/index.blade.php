@extends('layouts.admin')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Project</a></li>

                </ol>
                <h1 class="page-header mb-0">Project</h1>
            </div>
            <div class="ms-auto">
                <a href="{{ url('admin/project/create') }}" class="btn btn-success btn-rounded px-4 rounded-pill"><i
                        class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Project</a>
            </div>

        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">PROJECT TABLE</h4>
                <div class="panel-heading-btn">

                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive mb-3">
                    <table id="data-table-combine" class="table table-striped table-bordered align-middle">
                        <thead>
                            <tr>

                                <th>Date</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Sumary</th>
                                <th>Duration</th>
                                <th>Visible</th>
                                <th style="text-align: center">Fullfillment Status</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($project) > 0)
                                @foreach ($project as $item)
                                    <tr>
                                        <td>{{ $item->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div
                                                class="w-50px h-50px bg-light d-flex align-items-center justify-content-center">
                                                <img alt="" class="mw-100 mh-100"
                                                    src="{{ $item->getFirstMediaUrl('project') }}" />
                                            </div>
                                        </td>
                                        <td>{{ $item->Title }}</td>
                                        <td>{{ $item->meta }}</td>
                                        <td>{{ $item->start}} To {{ $item->End}}</td>
                                        <td style="text-align: center">
                                            @if ($item->popular == 1)
                                                <span
                                                    class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Vissible</span>
                                            @else
                                                <span
                                                    class="badge border border-danger text-danger px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Hidden</span>
                                            @endif

                                        </td>
                                        <td style="text-align: center">
                                            @if ($item->status == 1)
                                                <span
                                                    class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Active</span>
                                            @else
                                                <span
                                                    class="badge border border-danger text-danger px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i
                                                        class="fa fa-circle fs-9px fa-fw me-5px"></i> Completed</span>
                                            @endif

                                        </td>
                                        <td style="text-align: center">
                                            <a href="{{ url('admin/project/' . $item->id . '/edit') }}"><i
                                                    class="fa fa-pencil fa-lg me-2 ms-n2 text-success-900"></i></a>
                                            <form action="{{ url('admin/project/' . $item->id) }}" method="post">
                                                @csrf
                                                {{ method_field('Delete') }}
                                                <button type="submit" value="Delete" name="submit"
                                                    class="btn btn-default"><i class="fa fa-trash fa-lg  text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
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
