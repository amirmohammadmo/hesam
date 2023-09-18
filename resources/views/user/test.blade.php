@extends('user.index')
@section('contend')
    @include('user.layouts.success')
    @if($errors->any())

        <div class="alert alert-danger" role="alert">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{Route('user.test.send')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="mb-3">
            <input class="form-control" type="file" id="formFile" name="test">
        </div>
        <button type="submit" class="btn btn-primary">ارسال</button>
    </form>
@endsection
