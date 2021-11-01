@extends('backend.layouts.app')

@section('title', 'Create Property')

@push('styles')

    <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-select/css/bootstrap-select.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

@endpush


@section('content')

    <div class="block-header"></div>

    <div class="row clearfix">
        <form action="{{route('admin.properties.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12 "  >
            <div class="card">
                <div class="header bg-indigo">
                    <h2>افزودن ملک</h2>
                </div>
                <div class="body" >

                    <div class="form-group form-float" >
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                            <label class="form-label" style="float:right !important">عنوان</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="price" required>
                            <label class="form-label">قیمت</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="bedroom" required>
                            <label class="form-label">اتاق خواب</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="bathroom" required>
                            <label class="form-label">تعداد واحد های مجموعه</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="city" required>
                            <label class="form-label">شهر</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="address" required>
                            <label class="form-label">آدرس</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="area" required>
                            <label class="form-label">منطقه</label>
                        </div>
                        <div class="help-info">متر مربع</div>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" id="featured" name="featured" class="filled-in" value="1" />
                        <label for="featured">امکانات ویژه</label>
                    </div>

                    <hr>
                    <div class="form-group">
                        <label for="tinymce">توضیحات</label>
                        <textarea name="description" id="tinymce">{{old('description')}}</textarea>
                    </div>

                    <hr>
                    <div class="form-group">
                        <label for="tinymce-nearby">نزدیک به</label>
                        <textarea name="nearby" id="tinymce-nearby">{{old('nearby')}}</textarea>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2>گالری عکس ها</h2>
                </div>
                <div class="body">
                    <input id="input-id" type="file" name="gallaryimage[]" class="file" data-preview-file-type="text" multiple>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>انتخاب</h2>
                </div>
                <div class="body">

                    <div class="form-group form-float">
                        <div class="form-line {{$errors->has('purpose') ? 'focused error' : ''}}">
                            <label>خرید یا اجراه</label>
                            <select name="purpose" class="form-control show-tick">
                                <option value="">-- لطفا انتخاب کنید --</option>
                                <option value="sale">فروش </option>
                                <option value="rent">اجاره</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line {{$errors->has('type') ? 'focused error' : ''}}">
                            <label>نوع ملک</label>
                            <select name="type" class="form-control show-tick">
                                <option value="">-- لطفا انتخاب کنید --</option>
                                <option value="house">خانه</option>
                                <option value="apartment">آپارتمان</option>
                            </select>
                        </div>
                    </div>

                    <h5>امکانات ویژه</h5>
                    <div class="form-group demo-checkbox">
                        @foreach($features as $feature)
                            <input type="checkbox" id="features-{{$feature->id}}" name="features[]" class="filled-in chk-col-indigo" value="{{$feature->id}}" />
                            <label for="features-{{$feature->id}}">{{$feature->name}}</label>
                        @endforeach
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="video">
                            <label class="form-label">ویدیو</label>
                        </div>
                        <div class="help-info">لینک یوتیوب</div>
                    </div>

                    <div class="clearfix">
                        <h5>نقشه گوگل</h5>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="location_latitude" class="form-control" required/>
                                <label class="form-label">طول جغرافیایی</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="location_longitude" class="form-control" required/>
                                <label class="form-label">عرض جغرافیایی</label>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="header bg-indigo">
                    <h2>تعداد طبقات</h2>
                </div>
                <div class="body">
                    <div class="form-group">
                        <input type="file" name="floor_plan">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header bg-indigo">
                    <h2>تصویر شاخص</h2>
                </div>
                <div class="body">
                    <div class="form-group">
                        <input type="file" name="image">
                    </div>

                    {{-- BUTTON --}}
                    <a href="{{route('admin.properties.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
                        <i class="material-icons left">arrow_back</i>
                        <span>بازگشت</span>
                    </a>

                    <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                        <i class="material-icons">save</i>
                        <span>ذخیره</span>
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection


@push('scripts')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>

    <script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{asset('backend/plugins/tinymce/tinymce.js')}}"></script>
    <script>
        $(function () {
            $("#input-id").fileinput();
        });

        $(function () {
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{asset('backend/plugins/tinymce')}}';
        });

        $(function () {
            tinymce.init({
                selector: "textarea#tinymce-nearby",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: '',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{asset('backend/plugins/tinymce')}}';
        });
    </script>

@endpush
