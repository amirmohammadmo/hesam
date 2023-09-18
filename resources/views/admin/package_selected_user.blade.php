@extends('admin.index')
@section('contend')

        <div class="col-md mb-4 mb-md-0">
            <small class="text-light fw-semibold">Basic Accordion</small>
            @foreach($packages as $package)
            <div class="accordion mt-3" id="accordionExample">
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="false" aria-controls="accordionOne">
                            {{$package->title.' '.jdate($package->created_at)->format('%B %d، %Y') }}
                        </button>
                    </h2>

                    <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <button type="button"><a href="{{Route('admin.show.programme',$package->id)}}" >برنامه های این دوره</a></button>
                        </div>
                    </div>
                </div>

            </div>@endforeach
        </div>
@endsection
