@extends('admin.email.layout')
@section('content')

        <h4 style="margin:12px 0px 20px;color:#1E3565"><p>Dear @if(isset($data)){{$data->first_name}} @endif ,</p></h4>
        <h6 style="margin-top: 0px; padding-bottom: 10px; padding-top: 10px">Welcome to GTISMA!</h6>

        <p style="color: #5D5D5D;font-size: 15px;margin: 30px 0px;">
            We are excited to have you here. Click link to activate Account.
            .</p>


        @if(isset($extra))
            <a href="{{$extra}}" style="display: block;background-color: #52154E;
            border-radius: .4rem;color: white;text-align: center;
            padding: .5rem 1rem;text-decoration: none;
            box-shadow: 0 4px 10px rgba(22,94,223,0.3);
            margin:30px 0rem;
            font-size: 12px;
        ">
                Activate Account
            </a>
        @else
            <a href="#" style="display: block;background-color: #52154E;
            border-radius: .4rem;color: white;text-align: center;
            padding: .5rem 1rem;text-decoration: none;
            box-shadow: 0 4px 10px rgba(22,94,223,0.3);
            margin:30px 0rem;
            font-size: 12px;
               ">
                Activate Account
            </a>
        @endif
        <p style="color: #5D5D5D;font-size: 15px;margin:30px 0px;">Click on the Link above to get started
            today!</p>
        @endsection

