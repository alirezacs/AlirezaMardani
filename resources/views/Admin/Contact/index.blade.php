@extends('Admin.Layout.master')

@section('head')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/table/datatable/dt-global_style.css') }}">
    <link href="{{ asset('assets/admin/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <table id="contacts" class="table table-hover" style="width:100%">
                    <thead>
                    <tr>
                        <th>اسم</th>
                        <th>سابجکت</th>
                        <th>ایمیل</th>
                        <th>متن پیام</th>
                        <th class="no-content">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#message-{{ $contact->id }}">مشاهده</button>
                            </td>
                            <td>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="post" class="d-inline" enctype="multipart/form-data">
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
    @foreach($contacts as $contact)
        <div class="modal fade" id="message-{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <p class="modal-text">{{ $contact->message }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('script')

    <script src="{{ asset('assets/admin/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#contacts').DataTable({
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
