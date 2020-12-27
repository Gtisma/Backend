@extends('admin.layouts.maindashboard')

@section('content')

    <section class="r-split-twin_content r-gutter--bottom r-d-flex r-flex-dir-col r-al-i-l r-tx-l r-gutter--2x@lg r-edges">
        <h2 class="r-sr">Add New Report</h2>


        <div class="r-w-100% r-maxwidth-xs">
            <h3 class="r-mt-0 r-headline--small">Add New Report</h3>

            <div class="r-tx-l">
                <form method="POST" action="{{ route('admin.store.report') }}" id="reportform" >
                    @csrf

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
                        <label for="securities">Crime Types</label>
                        <select name="security_id" id ="securities" onchange="getRanks()" class="browser-default">
{{--                            <option value="" disabled selected>Choose Crime Type</option>--}}
                            @if(isset($crimetypes) && count($crimetypes) > 0)
                                @foreach($crimetypes as $crimetype)
                                    <option value="{{$crimetype->id}}">{{$crimetype->name}}</option>
                                @endforeach
                            @endif
                        </select>

                    </p>

                    <div class="input-field r-d-flex">
                        <textarea id="contact-address" class="materialize-textarea">CubeHub, Adebola House (Suite 100), 38, Opebi Road, Ikeja Lagos, Nigeria.</textarea>
                        <label for="contact-address">Address</label>
                    </div>
                    <div class="input-field r-d-flex">
                        <textarea id="contact-address" class="materialize-textarea">Type here...</textarea>
                        <label for="contact-address">Description</label>
                    </div>

                    <button  onclick="return validateRegister()" type="submit" class="r-btn r-btn--primary r-btn--match-input r-btn--left-floated-icon input-field r-btn-spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-unlock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 9.9-1" />
                        </svg>
                        <span class="r-fw-medium r-btn_text"> {{ __('Add Report') }}</span>
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
