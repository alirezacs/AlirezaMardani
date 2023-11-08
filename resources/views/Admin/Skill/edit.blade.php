@extends('Admin.Layout.master')

@section('head')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/forms/switches.css') }}">

@endsection

@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <form action="{{ route('skill.update', $skill->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">نام</label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="نام مهارت"
                                value="{{ $skill->name }}"
                            >
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="percent">درصد</label>
                            <input
                                type="number"
                                name="percent"
                                id="percent"
                                class="form-control @error('percent') is-invalid @enderror"
                                placeholder="درصد تسلط روی مهارت"
                                value="{{ $skill->percent }}"
                            >
                            @error('percent')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">توضیحات</label>
                            <input
                                type="text"
                                name="description"
                                id="description"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="توضیحات مهارت"
                                value="{{ $skill->description }}"
                            >
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="is_active">فعالیت</label>
                            <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
                                <input type="checkbox" name="is_active" @if($skill->is_active) checked @endif>
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
