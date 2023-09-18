@extends('admin.index')
@section('contend')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>مشاهده کاربران تایید شده</h4>
@include('admin.layouts.success')
    <div class="card">
        <h5 class="card-header">#</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                <tr>
                    <th>نام کاربر</th>
                    <th>نام پکیج</th>
                    <th>نوع برنامه</th>
                    <th>مقادیر درخواستی</th>
                    <th>تعداد ماه پکیج</th>
                    <th>تاریخ درخواست</th>
                    <th>مشاهده مشخصات بدنی</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
               @foreach($payments as $payment)

                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$payment->user->name}}</strong></td>
                    <td>{{$payment->package->title}}</td>
                    <td>{{$payment->package->type_programm()}}</td>
                    <td>{{$payment->package->Collection_programm()}}</td>
                    <td>{{$payment->package->Number}}</td>
                    <td>
                        {{jdate($payment->package->created_at)}}
                    </td>
                    <td> <a href="{{Route('admin.body.user',$payment->package->id)}}">مشاهده مشخصات بدنی</a>      </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{Route('admin.food.programme.get',$payment->package->id)}}"><i class="bx bx-edit-alt me-1"></i> ارسال برنامه غذایی</a>
                                <a class="dropdown-item" href="{{Route('admin.train.programme.get',$payment->package->id)}}"><i class="bx bx-trash me-1"></i> ارسال برنامه تمرینی</a>
                                <a class="dropdown-item" href="{{Route('admin.show.package',$payment->package->user_id)}}"><i class="bx bx-trash me-1"></i> برنامه های ارسال شده برای این فرد</a>

                            </div>
                        </div>
                    </td>
                </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
