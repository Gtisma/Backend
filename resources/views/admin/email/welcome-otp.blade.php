@extends('admin.email.layout')
@section('content')

    <h4 style="margin:12px 0px 20px;color:#1E3565"><p>Dear @if(isset($data)){{$data->name}} @endif ,</p></h4>
    <h6 style="margin-top: 0px; padding-bottom: 10px; padding-top: 10px">Welcome to GTISMA!</h6>

    <p>
        Here is your verification code below.
    </p>
    <p style="font-weight: bold"> @if(isset($data)){{$data->otp}} @endif </p>
@endsection

