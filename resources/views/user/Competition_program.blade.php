@extends('user.index')
@section('contend')
    <?php session(['type'=>'2']) ?>
    @include('user.layouts.services')


@endsection
