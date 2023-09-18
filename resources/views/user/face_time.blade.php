@extends('user.index')
@section('contend')
    <h2></h2>
    <h3>  </h3>
    @if($errors->any())

        <div class="alert alert-danger" role="alert">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">شما می توانید با استفاده ار فرم زیر روز و ساعت مراجعه ی حضوری خود را انتخاب نمایید</h5>
                <small class="text-muted float-end">مراجعه فقط در روز های زوج امکان پذیر می باشد</small>
            </div>
            <div class="card-body">
                <form action="{{Route('user.face.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">انتخاب تاریخ</label>
                        <div class="col-sm-10">
                            <input type="text" data-jdp data-jdp-min-date="today" placeholder="انتخاب تاریخ" name="date"/>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">انتخاب ساعت</label>
                        <div class="col-sm-10">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">ساعت مراجعه ی خود را انتخاب نمایید</label>
                                <select id="defaultSelect" class="form-select" name="time">
                                    <option>ساعت مراجعه ی خود را انتخاب نمایید</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>











@endsection


