@extends('backend.layouts.app')
@section('title', 'Dashboard')
@push('styles')
@endpush
@section('content')

 <div class="block-header">
        <h2 style="font-size:40px ; direction: rtl; font-weight:bold;font-family: titr;" align="center">داشبورد</h2>
    </br>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text" style="line-height:35px; font-size:18px ; direction: rtl; font-weight:bold;font-family: titr;">املاک ثبت شده</div>
                    <div class="number count-to" style="font-size:18px ; direction: rtl; font-weight:bold;font-family: titr; text-align:center" data-from="0" data-to="{{ $propertycount }}" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">help</i>
                </div>
                <div class="content">
                    <div class="text" style="line-height:35px; font-size:18px ; direction: rtl; font-weight:bold;font-family: titr;">کل پست ها</div>
                    <div class="number count-to" style="font-size:18px ; direction: rtl; font-weight:bold;font-family: titr; text-align:center" data-from="0" data-to="{{ $postcount }}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">forum</i>
                </div>
                <div class="content">
                    <div class="text" style="line-height:35px; font-size:18px ; direction: rtl; font-weight:bold;font-family: titr;">کل کامنت ها</div>
                    <div class="number count-to" style="font-size:18px ; direction: rtl; font-weight:bold;font-family: titr; text-align:center" data-from="0" data-to="{{ $commentcount }}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text" style="line-height:35px; font-size:18px ; direction: rtl; font-weight:bold;font-family: titr;">کل کاربران</div>
                    <div class="number count-to" style="font-size:18px ; direction: rtl; font-weight:bold;font-family: titr; text-align:center" data-from="0" data-to="{{ $usercount }}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->

    <div class="row clearfix">
        <!-- RECENT PROPERTIES -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2 dir="rtl" align="center" style="line-height:35px; font-size:18px ; direction: rtl; font-weight:bold;font-family: titr;">آخرین املاک</h2>
                </div>
                <div class="body" dir="rtl" >
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr >
                                    <th style="text-align: center">ردیف</th>
                                    <th style="text-align: center">متن</th>
                                    <th style="text-align: center">قیمت</th>
                                    <th style="text-align: center">شهر</th>
                                    <th><i class="material-icons small" style="text-align: center">امتیاز</i></th>
                                    <th style="text-align: center">مدیر</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($properties as $key => $property)
                                <tr>
                                    <td>{{ ++$key }}.</td>
                                    <td>
                                        <span title="{{ $property->title }}">
                                            {{ str_limit($property->title, 10) }}
                                        </span>
                                    </td>
                                    <td>&dollar;{{ $property->price }}</td>
                                    <td>{{ $property->city }}</td>
                                    <td>
                                        @if($property->featured == 1)
                                            <span class="label bg-green">F</span>
                                        @endif
                                    </td>
                                    <td>{{ strtok($property->user->name, " ")}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# RECENT PROPERTIES -->

        <!-- RECENT POSTS -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2 dir="rtl" align="center" style="line-height:35px; font-size:18px ; direction: rtl; font-weight:bold;font-family: titr;">آخرین پست ها</h2>
                </div>
                <div class="body" dir="rtl" style="text-align: center">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th style="text-align: center">ردیف</th>
                                    <th style="text-align: center">متن</th>
                                    <th style="text-align: center"><i class="material-icons small">کامنت</i></th>
                                    <th style="text-align: center">دیگر</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $key => $post)
                                <tr>
                                    <td>{{ ++$key }}.</td>
                                    <td>
                                        <span title="{{ $post->title }}">
                                            {{ str_limit($post->title, 30) }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="label bg-green">{{ $post->comments_count }}</span>
                                    </td>
                                    <td>{{ strtok($post->user->name, " ")}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# RECENT POSTS -->
    </div>

    <div class="row clearfix">
        <!-- USER LIST -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2 dir="rtl" align="center" style="line-height:35px; font-size:18px ; direction: rtl; font-weight:bold;font-family: titr;">لیست کاربران</h2>
                </div>
                <div class="body" dir="rtl" style="text-align: center">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th style="text-align: center">ردیف</th>
                                    <th style="text-align: center">نام</th>
                                    <th style="text-align: center">ایمیل</th>
                                    <th style="text-align: center">نقش</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ ++$key }}.</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role->name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# USER LIST -->

        <!-- RECENT COMMENTS -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2  dir="rtl" align="center" style="line-height:35px; font-size:18px ; direction: rtl; font-weight:bold;font-family: titr;">آخرین کامنت ها</h2>
                </div>
                <div class="body" dir="rtl" style="text-align: center">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th style="text-align: center">ردیف</th>
                                    <th style="text-align: center">کامنت</th>
                                    <th style="text-align: center"><i class="material-icons small">check</i></th>
                                    <th style="text-align: center">شخص</th>
                                    <th style="text-align: center">زمان</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $key => $comment)
                                <tr>
                                    <td>{{ ++$key }}.</td>
                                    <td>
                                        <span title="{{ $comment->body }}">
                                            {{ str_limit($comment->body, 10) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($comment->approved == 1)
                                            <span class="label bg-green">A</span>
                                        @else
                                            <span class="label bg-red">N</span>
                                        @endif
                                    </td>
                                    <td>{{ strtok($comment->users->name, " ")}}</td>
                                    <td>{{ $comment->created_at->diffForHumans() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# RECENT COMMENTS -->
    </div>


@endsection

@push('scripts')

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('backend/js/pages/index.js') }}"></script>

@endpush
