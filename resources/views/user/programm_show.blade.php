@extends('user.index')
@section('contend')
    <div class="row mb-5">
        <h5 class="pb-1 mb-4">برنامه ی ورزشی</h5>

        @if($train_programms && count($train_programms) > 0 )
      @foreach($train_programms as $train_programm)
        <div class="col-md-6 col-lg-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{asset("train_programme/$train_programm->pdf_name")}}" class="btn btn-primary">دانلود برنامه</a>
                </div>
            </div>
        </div>
          @endforeach @else {{'برنامه تمرینی موجود نمی باشد'}} @endif
          <div class="row mb-5">
              <h5 class="pb-1 mb-4">برنامه ی غذایی</h5>
              @if($food_programms && count($food_programms) > 0 )
              @foreach($food_programms as $food_programm)
                  <div class="col-md-6 col-lg-4">
                      <div class="card text-center mb-3">
                          <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="{{asset("train_programme/$food_programm->pdf_name")}}" class="btn btn-primary">دانلود برنامه</a>
                          </div>
                      </div>
                  </div> @endforeach  @else {{'برنامه غذایی موجود نمی باشد'}} @endif
    </div>
@endsection
