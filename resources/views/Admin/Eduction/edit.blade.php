@extends('Admin.Layout.master')

@section('head')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/forms/switches.css') }}">

@endsection

@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <form action="{{ route('eduction.update', $eduction->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">موضوع</label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="موضوع"
                                value="{{ $eduction->title }}"
                            >
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="in">در</label>
                            <input
                                type="text"
                                name="in"
                                id="in"
                                class="form-control @error('in') is-invalid @enderror"
                                placeholder="در دانشگاه..."
                                value="{{ $eduction->in }}"
                            >
                            @error('in')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="degree">مدرک</label>
                            <input
                                type="text"
                                name="degree"
                                id="degree"
                                class="form-control @error('degree') is-invalid @enderror"
                                placeholder="مدرک تحصیلی"
                                value="{{ $eduction->degree }}"
                            >
                            @error('degree')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">توضیحات</label>
                            <textarea
                                name="description"
                                id="description"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="متن کامنت"
                            >{{ $eduction->description }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="started_at">تاریخ شروع</label>
                            <input
                                type="text"
                                name="started_at"
                                id="started_at"
                                class="form-control @error('started_at') is-invalid @enderror"
                                placeholder="تاریخ شروع تحصیل"
                                value="{{ $eduction->started_at }}"
                            >
                            @error('started_at')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ended_at">تاریخ پایان</label>
                            <input
                                type="text"
                                name="ended_at"
                                id="ended_at"
                                class="form-control @error('ended_at') is-invalid @enderror"
                                placeholder="تاریخ پایان تحصیل"
                                value="{{ $eduction->ended_at }}"
                            >
                            @error('ended_at')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="is_active">فعالیت</label>
                            <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
                                <input type="checkbox" name="is_active" @if($eduction->is_active) checked @endif>
                                <span class="slider"></span>
                            </label>
                            @error('is_active')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">ویرایش</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
