@extends('Admin.Layout.master')

@section('head')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/table/datatable/dt-global_style.css') }}">

@endsection

@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <a href="{{ route('portfolio.create') }}" class="btn btn-sm btn-success">Create</a>
                <table id="portfolios" class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                        <th>عکس</th>
                        <th>موضوع</th>
                        <th>تکنولوژی</th>
                        <th>لینک</th>
                        <th>فعالیت</th>
                        <th class="no-content">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolios as  $portfolio)
                        <tr>
                            <td>
                                <img
                                    src="{{ route('portfolio.getImage', ['hash' => $portfolio->image]) }}"
                                    alt=""
                                    style="width: 60px; height: 60px; border-radius: 50%;"
                                >
                            </td>
                            <td>{{ $portfolio->title }}</td>
                            <td>{{ $portfolio->technology }}</td>
                            <td>{{ $portfolio->link }}</td>
                            <td>
                                @if($portfolio->is_active)
                                    <span class="badge bg-success">فعال</span>
                                @else
                                    <span class="badge bg-danger">غیرفعال</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="post" class="d-inline" enctype="multipart/form-data">
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
        $('#portfolios').DataTable({
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
