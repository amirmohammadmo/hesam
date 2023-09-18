@extends('user.index')
@section('contend')
    <?php session(['type'=>'3']) ?>
    @include('user.layouts.services')
@endsection
