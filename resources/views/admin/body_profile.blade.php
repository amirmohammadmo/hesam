@extends('admin.index')
@section('contend')
    <div class="col-lg">
        <div class="card mb-4 mb-lg-0">
            <h5 class="card-header">{{'مشخصات'.' ' .$user->name }}</h5>

            <div class="card-body">
                <small class="text-light fw-semibold">قد</small>
                <figure class="mt-2">
                    <blockquote class="blockquote">
                        <p class="mb-0">{{$body_profile->height}}</p>
                    </blockquote>

                </figure>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <small class="text-light fw-semibold">وزن</small>
                <figure class="mt-2">
                    <blockquote class="blockquote">
                        <p class="mb-0">{{$body_profile->Weight}}</p>
                    </blockquote>

                </figure>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <small class="text-light fw-semibold">گروه خونی</small>
                <figure class="mt-2">
                    <blockquote class="blockquote">
                        <p class="mb-0">{{$body_profile->blood_type}}</p>
                    </blockquote>

                </figure>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <small class="text-light fw-semibold">سن</small>
                <figure class="mt-2">
                    <blockquote class="blockquote">
                        <p class="mb-0">{{$body_profile->age}}</p>
                    </blockquote>

                </figure>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <small class="text-light fw-semibold">مصرف دارو</small>
                <figure class="mt-2">
                    <blockquote class="blockquote">
                        <p class="mb-0">{{$body_profile->medicine}}</p>
                    </blockquote>

                </figure>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <small class="text-light fw-semibold">بیماری خاص</small>
                <figure class="mt-2">
                    <blockquote class="blockquote">
                        <p class="mb-0">{{$body_profile->Sickness}}</p>
                    </blockquote>

                </figure>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <small class="text-light fw-semibold">هدف از ورزش</small>
                <figure class="mt-2">
                    <blockquote class="blockquote">
                        <p class="mb-0">{{$body_profile->goal}}</p>
                    </blockquote>

                </figure>
            </div>

            <hr class="m-0">
            <div class="card-body">
                <small class="text-light fw-semibold">آیا نیازمند مکمل می باشد؟</small>
                <figure class="mt-2">
                    <blockquote class="blockquote">
                        <p class="mb-0">{{$body_profile->need_supplement()}}</p>
                    </blockquote>

                </figure>
            </div>
            <hr class="m-0">

            <button type="button" class="btn btn-info"><a href="{{Route('admin.confirmed.user')}}">بازگشت به صفحه ی قبل </a></button>
        </div>
    </div>
@endsection
