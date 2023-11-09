@extends('Admin.Layout.master')

@section('head')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/forms/switches.css') }}">

@endsection

@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <form action="{{ route('experience.update', $experience->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="as">به عنوان</label>
                            <input
                                type="text"
                                name="as"
                                id="as"
                                class="form-control @error('as') is-invalid @enderror"
                                placeholder="فعال به عنوان"
                                value="{{ $experience->as }}"
                            >
                            @error('as')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="at">فعال در...</label>
                            <input
                                type="text"
                                name="at"
                                id="at"
                                class="form-control @error('at') is-invalid @enderror"
                                placeholder="فعال در کمپانی..."
                                value="{{ $experience->at }}"
                            >
                            @error('at')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="started_at">تاریخ شروع</label>
                            <input
                                type="text"
                                name="started_at"
                                id="started_at"
                                class="form-control @error('started_at') is-invalid @enderror"
                                placeholder="تاریخ شروع فعالیت"
                                value="{{ $experience->started_at }}"
                            >
                            @error('started_at')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ended_at">تاریخ پایان</label>
                            <input
                                type="text"
                                name="ended_at"
                                id="ended_at"
                                class="form-control @error('ended_at') is-invalid @enderror"
                                placeholder="تاریخ پایان فعالیت"
                                value="{{ $experience->ended_at }}"
                            >
                            @error('ended_at')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="description">توضیحات</label>
                        <textarea
                            name="description"
                            id="description"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="توضیحات تجربه"
                        >{{ $experience->description }}</textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="present">در حال فعالیت در این تجربه</label>
                        <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
                            <input type="checkbox" name="present" @if($experience->present) checked @endif>
                            <span class="slider"></span>
                        </label>
                        @error('present')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="is_active">فعالیت</label>
                        <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
                            <input type="checkbox" name="is_active" @if($experience->is_active) checked @endif>
                            <span class="slider"></span>
                        </label>
                        @error('is_active')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
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
