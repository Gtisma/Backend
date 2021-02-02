@extends('admin.layouts.maindashboard')

@section('content')

    <section class="r-split-twin_content r-gutter--bottom r-d-flex r-flex-dir-col r-al-i-l r-tx-l r-gutter--2x@lg r-edges">
        <div class="element-header">
            @if (session('message'))
                <div class="alert alert-info r-blue" >
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <h2 class="r-sr">Add New Admin</h2>
        <div class="r-w-100% r-maxwidth-xs">
            <h3 class="r-mt-0 r-headline--small">Add New SuperAdmin</h3>

            <div class="r-tx-l">
                <form method="POST" action="{{ route('admin.store.admin') }}" id="admin"  enctype="multipart/form-data" >
                    @csrf
                    <div class="r-grid r-grid--gap-as-edge@md-up r-grid--1-6@md">
                        <p class="input-field r-mb-0">
                            <input name="first_name" id="firstname" type="text" value="{{ old('first_name') }}" autocomplete="first_name" required>
                            <label for="first_name" class="">First Name</label>
                        </p>
                        <p class="input-field r-mb-0">
                            <input name="last_name" id="lastname" type="text" value="{{ old('last_name') }}" autocomplete="last_name" required>
                            <label for="last_name" class="">Last Name</label>
                        </p>
                        @error('first_name')
                        <span class="invalid-feedback r-fs-pico r-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        @error('last_name')
                        <span class="invalid-feedback r-fs-pico r-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="r-grid r-grid--gap-as-edge@md-up r-grid--1-6@md">
                        <p class="input-field r-mb-0">
                            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" autocomplete="phone" required>
                            <label for="phone" class="">Your Phone</label>
                        </p>

                        <p class="input-field r-mb-0">
                            <input id="email" type="email" name ="email"  value="{{ old('email') }}" autocomplete="email" required>
                            <label for="email" class="">Your Email</label>
                        </p>
                        @error('phone')
                        <span class="invalid-feedback r-fs-pico r-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        @error('email')
                        <span class="invalid-feedback r-fs-pico r-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="r-grid r-grid--gap-as-edge@md-up r-grid--1-6@md">
                        <p class="input-field r-mb-0">
                            <input id="password" type="password" name="password" required>
                            <label for="password" class=""> Password</label>
                        </p>
                        <p class="input-field r-mb-0">
                            <input id="confirm_password" type="password" name="password_confirmation" required>
                            <label for="confirm_password" class="">Confirm Password</label>
                        </p>
                    </div>
                    @error('password')
                    <span class="invalid-feedback r-fs-pico r-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <p class="r-select-wrapper r-mb-0">
                        <label for="states">State</label>
                        <select name="state_id" id ="states" class="browser-default">
                            {{--                            <option value="" disabled selected>Choose your State</option>--}}
                            @if(isset($states) && count($states) > 0)
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            @endif
                        </select>

                    </p>
                    <p class="r-select-wrapper r-mb-0">
                        <label for="gender">Gender</label>
                        <select name="gender_id" id ="gender" class="browser-default">
                            @if(isset($gender) && count($gender) > 0)
                                @foreach($gender as $gend)
                                    <option value="{{$gend->id}}">{{$gend->name}}</option>
                                @endforeach
                            @endif
                        </select>

                    </p>

                    <button  type="submit" class="r-btn r-btn--primary r-btn--match-input r-btn--left-floated-icon input-field r-btn-spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-unlock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 9.9-1" />
                        </svg>
                        <span class="r-fw-medium r-btn_text"> {{ __('Add Admin') }}</span>
                        <div class="r-spinner r-pos-a r-right-edge">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>


                </form>

            </div></div>
    </section>
@endsection

