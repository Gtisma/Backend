@extends('admin.layouts.maindashboard')

@section('content')


    <section class="r-section r-section--padded">
        <div class="element-header">
            @if (session('message'))
                <div class="alert alert-info r-blue" style="margin: 30px">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <h2 class="r-sr"> User</h2>
        <div class="r-w-100% r-maxwidth-xs">
            <h3 class="r-mt-0 r-headline--small">User Profile</h3>
            <div class="r-media-object">
                <figure class="r-media-object_figure--adjust@md">

                    <img src="{{$userprofile->picture_url ?? asset('assets/images/userprofile.png') }}" alt="User image" class="r-avatar r-avatar--large-to-xlarge@md r-avatar--border--linen">
                </figure>
            </div>
            <ul class="r-none r-al-i-c">

                <li class="tab">
                    <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        FirstName: <span>{{($userprofile->first_name ?? " ")." ".($userprofile->last_name ?? "")}} </span>
                    </p>
                </li>
                <li class="tab">
                    <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                          EMAIL: <span>{{$userprofile->email ?? " "}}</span>
                    </p>
                </li>
                <li class="tab">
                    <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        PHONENUMBER: <span>{{$userprofile->phone ?? " "}}</span>
                    </p>
                </li>
                <li class="tab">
                    <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        GENDER: <span>{{$userprofile->gender->name ?? ""}}</span>
                    </p>
                </li>
                <li class="tab">
                    <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        SOURCE: <span>{{$userprofile->source}}</span>
                    </p>
                </li>
                <li class="tab">
                    <p class="r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        RANK: <span>{{$userprofile->rank->name ?? ""}}</span>
                    </p>
                </li>
                <li class="tab">
                    <p class="r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        SECURITY: <span>{{$userprofile->rank->security->name ?? ""}}</span>
                    </p>
                </li>
                <li class="tab">
                    <p class="r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        STATE: <span>{{$userprofile->state->name ?? ""}}</span>
                    </p>
                </li>
                <li class="tab">
                    <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        ROLENAME: <span>{{$userprofile->getRoleNames()[0]}}</span>
                    </p>
                </li>

                <li class="tab">
                    <p class=" r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                        Registered On: <span>{{$userprofile->created_at}}</span>
                    </p>
                </li>

            </ul>
        </div>


    </section>
@endsection
