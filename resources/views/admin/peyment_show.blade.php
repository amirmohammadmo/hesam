@extends('admin.index')
@section('contend')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>مشاهده و تایید پرداخت </h4>
@include('admin.layouts.success')
    <div class="card">
        <h5 class="card-header">لیست پرداخت ها</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>نام کاربر پرداخت کننده</th>
                    <th>نام پکیج خریداری شده</th>
                    <th>رسید پرداخت</th>
                    <th>وضعیت تایید پرداخت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($all_payment as $payment)

                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{$payment->user->name}}</strong></td>
                        <td>{{$payment->package->title}}</td>
                        <td>
                            <a href="#">دانلود رسید</a></td>


                        <td> @if($payment->status == \App\Models\Payment::SUCCESS )<span
                                class="badge bg-label-success me-1"> تایید  شده</span> @else
                                <span class="badge bg-label-warning me-1"> تایید نشده </span></td>
                        @endif
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href={{Route('admin.confirmation.payment',$payment->id)}}><i
                                            class="bx bx-edit-alt me-1"></i> تایید پرداخت</a>

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
