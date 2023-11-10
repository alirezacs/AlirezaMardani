@extends('Admin.Layout.master')

@section('head')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/table/datatable/dt-global_style.css') }}">

@endsection

@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <a href="{{ route('eduction.create') }}" class="btn btn-sm btn-success">Create</a>
                <table id="eductions" class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                        <th>موضوع</th>
                        <th>در...</th>
                        <th>مدرک تحصیلی</th>
                        <th>تاریخ شروع</th>
                        <th>تاریخ پایان</th>
                        <th>فعالیت</th>
                        <th class="no-content">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($eductions as $eduction)
                        <tr>
                            <td>{{ $eduction->title }}</td>
                            <td>{{ $eduction->in }}</td>
                            <td>{{ $eduction->degree }}</td>
                            <td>{{ $eduction->started_at }}</td>
                            <td>{{ $eduction->ended_at }}</td>
                            <td>
                                @if($eduction->is_active)
                                    <span class="badge bg-success">فعال</span>
                                @else
                                    <span class="badge bg-danger">غیرفعال</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('eduction.edit', $eduction->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('eduction.destroy', $eduction->id) }}" method="post" class="d-inline" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ asset('assets/admin/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#eductions').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>' },
                "sInfo": "صفحه _PAGE_ از _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "جستجو کنید...",
                "sLengthMenu": "نتایج :  _MENU_",
            },
            "bPaginate": false
        });
    </script>

@endsection
