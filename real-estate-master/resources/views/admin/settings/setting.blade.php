@extends('backend.layouts.app')

@section('title', 'Settings')

@push('styles')

@endpush


@section('content')

    <div class="block-header"></div>

    <div class="row clearfix">

        <div class="col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>
                        تنظیمات عمومی
                        <a href="{{route('admin.profile')}}" class="btn waves-effect waves-light right headerightbtn">
                            <i class="material-icons left">کاربر</i>
                            <span>پروفایل </span>
                        </a>
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.settings.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" value="{{ $settings->name or null }}">
                                <label class="form-label">عنوان سایت</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="email" name="email" class="form-control" value="{{ $settings->email or null }}">
                                <label class="form-label">ایمیل</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="phone" class="form-control" value="{{ $settings->phone or null }}">
                                <label class="form-label">تلفن</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="address" class="form-control" value="{{ $settings->address or null }}">
                                <label class="form-label">آدرس</label>
                            </div>
                            <small class="col-red font-italic">HTML Tag allowed</small>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="footer" class="form-control" value="{{ $settings->footer or null }}">
                                <label class="form-label">Footer</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="aboutus" rows="4" class="form-control no-resize">{{ $settings->aboutus or null }}</textarea>
                                <label class="form-label">درباره ما</label>
                            </div>
                        </div>

                        <h6>Social Links</h6>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="facebook" class="form-control" value="{{ $settings->facebook or null }}">
                                <label class="form-label">فیسبوک</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="twitter" class="form-control" value="{{ $settings->twitter or null }}">
                                <label class="form-label">تویتر</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="linkedin" class="form-control" value="{{ $settings->linkedin or null }}">
                                <label class="form-label">لینکدین</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                            <i class="material-icons">save</i>
                            <span>ذخیره</span>
                        </button>

                    </form>
                    
                </div>
            </div>
        </div>

    </div>

@endsection


@push('scripts')


@endpush
