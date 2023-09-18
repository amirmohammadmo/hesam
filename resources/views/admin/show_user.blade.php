@extends('admin.index')
@section('contend')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>مشاهده ی تمامی کاربران </h4>
    <div class="card">
        <h5 class="card-header">لیست تمامی کاربران</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>شماره تلفن</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($all_users as $users)
                <tr>

                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$users->id}}</strong></td>
                    <td>{{$users->name}}</td>
                    <td>
                        {{$users->email}}
                    </td>
                    <td>{{$users->phone}}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
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
