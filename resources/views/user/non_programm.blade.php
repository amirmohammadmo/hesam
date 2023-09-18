@extends('user.index')
@section('contend')
   <?php session(['type'=>'1']) ?>
    @include('user.layouts.services')
@endsection
