@extends('layout/master2')

@section('content')


@if($isReg == 1)
@include('register.existingMember')
@elseif($isReg == 2)
@include('register.newMember')
@endif

@stop
