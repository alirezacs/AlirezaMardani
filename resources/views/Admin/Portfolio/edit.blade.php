@extends('Admin.Layout.master')

@section('head')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/forms/switches.css') }}">

@endsection

@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <form action="{{ route('portfolio.update', $portfolio->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">موضوع</label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="موضوع نمونه کار"
                                value="{{ $portfolio->title }}"
                            >
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="technology">تکنولوژی</label>
                            <input
                                type="text"
                                name="technology"
                                id="technology"
                                class="form-control @error('technology') is-invalid @enderror"
                                placeholder="تکنولوژی استفاده شده"
                                value="{{ $portfolio->technology }}"
                            >
                            @error('technology')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="link">لینک</label>
                            <input
                                type="url"
                                name="link"
                                id="link"
                                class="form-control @error('link') is-invalid @enderror"
                                placeholder="لینک پروژه"
                                value="{{ $portfolio->link }}"
                            >
                            @error('link')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">عکس</label>
                            <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
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
                                value="{{ $portfolio->description }}"
                            >
                            @error('description')
                            <span class="text-danger">{${ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="is_active">فعالیت</label>
                            <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
                                <input type="checkbox" name="is_active" @if($portfolio->is_active) checked @endif>
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
