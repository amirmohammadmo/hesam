@extends('admin.index')
@section('contend')
    <form action="{{Route('admin.train.programme.post',$id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="mb-3">

        <input class="form-control" type="file" id="formFile" name="train_programme">
    </div>
        <button type="submit" class="btn btn-primary">ارسال</button>
    </form>
@endsection
