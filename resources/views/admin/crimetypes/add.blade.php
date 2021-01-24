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
        <h2 class="r-sr">Add Crime Types</h2>


        <div class="r-w-100% r-maxwidth-xs">
            <h3 class="r-mt-0 r-headline--small">Add Crime Types</h3>

            <div class="r-tx-l">
                <form method="POST" action="{{ route('admin.store.crimetype') }}" id="crimetypeform" >
                    @csrf


                    <div class="input-field r-d-flex">
                        <p class="input-field r-mb-0 r-w-100%" >
                            <input id="crime_type_name" type="text" name="crime_type_name" placeholder="Robbery" autocomplete="crime_type_name" required>
                            <label for="crime_type_name" class="">Crime Type name</label>
                        </p>
                    </div>


                    <button  type="submit" class="r-btn r-btn--primary r-btn--match-input r-btn--left-floated-icon input-field r-btn-spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-unlock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 9.9-1" />
                        </svg>
                        <span class="r-fw-medium r-btn_text"> {{ __('Add CrimeType') }}</span>
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

