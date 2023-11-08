@extends('Admin.Layout.master')

@section('content')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">نام</label>
                            <input
                                type="text"
                                name="first_name"
                                id="first_name"
                                class="form-control @error('first_name') is-invalid @enderror"
                                placeholder="نام خود را وارد نمایید"
                                value="{{ $user->first_name }}"
                            >
                            @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">نام خانوادگی</label>
                            <input
                                type="text"
                                name="last_name"
                                id="last_name"
                                class="form-control @error('last_name') is-invalid @enderror"
                                placeholder="نام خانوادگی خود را وارد نمایید"
                                value="{{ $user->last_name }}"
                            >
                            @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">ایمیل</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="ایمیل خود را وارد نمایید"
                                value="{{ $user->email }}"
                            >
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">شماره تلفن</label>
                            <input
                                type="text"
                                name="phone"
                                id="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                placeholder="شماره تلفن خود را وارد نمایید"
                                value="{{ $user->phone }}"
                            >
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="avatar">اواتار</label>
                            <input
                                type="file"
                                name="avatar"
                                id="avatar"
                                class="form-control-file @error('avatar') is-invalid @enderror"
                                value="{{ $user->avatar }}"
                            >
                            @error('avatar')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="age">سن</label>
                            <input
                                type="number"
                                name="age"
                                id="age"
                                class="form-control @error('age') is-invalid @enderror"
                                placeholder="سن خود را وارد نمایید"
                                value="{{ $user->age }}"
                            >
                            @error('age')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">ادرس</label>
                            <input
                                type="text"
                                name="address"
                                id="address"
                                class="form-control @error('address') is-invalid @enderror"
                                placeholder="ادرس خود را وارد نمایید"
                                value="{{ $user->address }}"
                            >
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="language">زبان</label>
                            <input
                                type="text"
                                name="language"
                                id="language"
                                class="form-control @error('language') is-invalid @enderror"
                                placeholder="زبان خود را وارد نمایید"
                                value="{{ $user->language }}"
                            >
                            @error('language')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="facebook_uri">لینک فیسبوک</label>
                            <input
                                type="url"
                                name="facebook_uri"
                                id="facebook_uri"
                                class="form-control @error('facebook_uri') is-invalid @enderror"
                                placeholder="ادرس فیسبوک خود را وارد نمایید"
                                value="{{ $user->facebook_uri }}"
                            >
                            @error('facebook_uri')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="twitter_uri">لینک توییتر</label>
                        <input
                            type="url"
                            name="twitter_uri"
                            id="twitter_uri"
                            class="form-control @error('twitter_uri') is-invalid @enderror"
                            placeholder="ادرس توییتر خود را وارد نمایید"
                            value="{{ $user->twitter_uri }}"
                        >
                        @error('twitter_uri')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="instagram_uri">لینک اینستاگرام</label>
                        <input
                            type="url"
                            name="instagram_uri"
                            id="instagram_uri"
                            class="form-control @error('instagram_uri') is-invalid @enderror"
                            placeholder="ادرس اینستاگرام خود را وارد نمایید"
                            value="{{ $user->instagram_uri }}"
                        >
                        @error('instagram_uri')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="biography">بیوگرافی</label>
                            <textarea
                                name="biography"
                                id="biography"
                                class="form-control @error('biography') is-invalid @enderror"
                                placeholder="بیوگرافی برای خود بنویسید"
                            >
                                {{ $user->biography }}
                            </textarea>
                            @error('biography')
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
