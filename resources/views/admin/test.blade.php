@extends('admin.index')
@section('contend')
    <div class="card">
        <h5 class="card-header">Bordered Table</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>نام کاربر</th>
                        <th>نام آزمایش</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tests as $test)
                        <tr>



                        <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$test->user->name}}</strong>
                        </td>
                        <td><a href="{{Route('admin.test.download',$test->id)}}">دانلود آزمایش</a></td>



                    </tr>@endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
