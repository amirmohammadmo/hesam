
<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">فرم مشخصات بدنی</h5>
            <small class="text-muted float-end">لطفا فرم را به دقت پر نمایید.</small>
        </div>
        <div class="card-body">
            <form action="{{Route('user.body_profile.store',[$id,session('type')])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">قد شما</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input class="form-control" type="number" value="0" id="html5-number-input" name="height">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">وزن شما</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input class="form-control" type="number" value="0" id="html5-number-input" name="Weight">
                    </div>
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">گروه خونی شما</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">

                            <select id="defaultSelect" class="form-select" name="blood_type">
                                <option>'گروه خونی خود را انتخاب نمایید'</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">AB</option>
                                <option value="3">O</option>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">آیا نیازمند مکمل می باشید؟</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">

                            <select id="defaultSelect" class="form-select" name="need_supplement">

                                <option value="1">بله</option>
                                <option value="0">خیر</option>

                            </select>

                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">گروه تعداد ماه درخواستی برنامه ی شما</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">

                            <select id="defaultSelect" class="form-select" name="Number">
                                <option>'تعداد ماه خود را انتخاب نمایید'</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>

                            </select>

                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">سن شما</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input class="form-control" type="number" value="0" id="html5-number-input" name="age">
                        </div>
                    </div>
                </div>



                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">مصرف داروی خاص دارین؟</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="html5-text-input" name="medicine">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">آسیب یا بیماری خاص</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="html5-text-input" name="Sickness">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">هدف شما از ورزش</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="html5-text-input" name="goal">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">بارگزاری فیش پرداختی</label>
                    <input class="form-control" type="file" id="formFile" name="file_up">
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">ارسال فرم</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
