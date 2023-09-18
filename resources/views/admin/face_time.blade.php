@extends('admin.index')
@section('contend')
    @include('admin.layouts.success')
    <div class="card">
        <h5 class="card-header">جدول وقت های حضوری</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>تاریخ مراجعه</th>
                        <th>ساعت مراجعه</th>
                        <th>شماره تلفن</th>
                        <th>وضعیت وقت</th>
                        <th>عملیات</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($face_times as $face_time) <tr>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$face_time->user->name}}</strong>
                        </td>
                        <td>{{$face_time->date}}</td>

                        <td>{{$face_time->time}}</td>
                        <td>{{$face_time->user->phone}}</td>
                        <td>@if($face_time->status == 1 ) <span class="badge bg-label-success me-1">انجام شده</span>@else <span class="badge bg-label-warning me-1">انجام نشده</span> @endif</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" style="">
                                    @if(!$face_time->status == 1)
                                    <a class="dropdown-item" href="{{Route('admin.face_time.status.update',$face_time->id)}}"><i class="bx bx-edit-alt me-1"></i>  تبدیل به هماهنگ شده</a>@else
                                    <a class="dropdown-item" href="{{Route('admin.face_time.status.update',$face_time->id)}}"><i class="bx bx-trash me-1"></i>تبدیل به هماهنگ نشده</a>@endif
                                </div>
                            </div>
                        </td>
                    </tr>@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
