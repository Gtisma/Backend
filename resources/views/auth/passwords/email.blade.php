@extends('auth.layouts.mainauth')

@section('content')
    <section class="r-split-twin_content r-gutter--bottom r-d-flex r-flex-dir-col r-al-i-c r-tx-c r-gutter--2x@lg r-edges">
        <h2 class="r-sr">{{ __('Reset Password') }}</h2>
        <div class="r-visible-lg-up r-gutter--bottom"><a href="/" class="r-logo r-d-flex r-al-i-c">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="375pt" height="374.999991pt" viewBox="0 0 375 374.999991" version="1.2">
                    <defs>
                        <clipPath id="clip1">
                            <path d="M 57.75 37.5 L 317.25 37.5 L 317.25 337.5 L 57.75 337.5 Z M 57.75 37.5 "/>
                        </clipPath>
                        <clipPath id="clip2">
                            <path d="M 112.5 113 L 262.5 113 L 262.5 262 L 112.5 262 Z M 112.5 113 "/>
                        </clipPath>
                    </defs>
                    <g id="surface1">
                        <g clip-path="url(#clip1)" clip-rule="nonzero">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(32.159424%,8.239746%,30.589294%);fill-opacity:1;" d="M 296.976562 58.140625 L 296.976562 206.308594 C 297.054688 210.902344 296.136719 215.480469 294.285156 219.695312 C 268.402344 276.207031 202.785156 310.433594 189.417969 316.925781 C 176.046875 310.640625 107.800781 276.378906 80.875 219.695312 C 78.925781 215.386719 77.960938 210.695312 78.023438 205.960938 L 78.023438 58.140625 L 296.976562 58.140625 M 309.140625 37.867188 L 65.875 37.867188 C 61.394531 37.867188 57.75 41.507812 57.75 45.992188 L 57.75 205.960938 C 57.671875 213.707031 59.316406 221.355469 62.566406 228.390625 C 96.109375 299.027344 183.699219 336.597656 183.699219 336.597656 C 184.933594 336.980469 186.21875 337.183594 187.5 337.199219 L 191.554688 337.199219 C 192.804688 337.183594 194.058594 336.980469 195.246094 336.597656 C 195.246094 336.597656 280.296875 298.933594 312.71875 228.136719 C 315.777344 221.261719 317.328125 213.816406 317.25 206.308594 L 317.25 45.992188 C 317.25 41.507812 313.621094 37.867188 309.140625 37.867188 "/>
                        </g>
                        <g clip-path="url(#clip2)" clip-rule="nonzero">
                            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(32.159424%,8.239746%,30.589294%);fill-opacity:1;" d="M 186.925781 113.074219 C 145.957031 113.074219 112.5 146.527344 112.5 187.5 C 112.5 228.472656 145.957031 261.925781 186.925781 261.925781 C 225.617188 261.925781 257.597656 232.136719 260.996094 194.253906 L 262.117188 181.773438 L 192.652344 181.773438 L 192.652344 204.675781 L 234.695312 204.675781 C 227.539062 224.535156 209.335938 239.027344 186.925781 239.027344 C 158.347656 239.027344 135.402344 216.082031 135.402344 187.5 C 135.402344 158.917969 158.347656 135.972656 186.925781 135.972656 C 200.570312 135.972656 212.871094 141.25 222.082031 149.839844 L 237.738281 133.109375 C 224.410156 120.675781 206.519531 113.074219 186.925781 113.074219 Z M 186.925781 113.074219 "/>
                        </g>
                    </g>
                </svg>
                <span class="r-logo_text r-fw-medium r-suffix r-visible-sm-up">
        GTISMA
    </span>
            </a></div>
        <div class="r-w-100% r-maxwidth-xs">

            <h3 class="r-mt-0 r-headline--small">Welcome back!</h3>
            @if (session('status'))
                <div class="alert alert-info r-blue" style="margin: 30px">
                    {{ session('status') }}
                </div>
            @endif


            <p class="r-mb-0">
                New to GTISMA? <a href="{{ route('register') }}" class="r-co-secondary">Sign up.</a>
            </p><div class="r-tx-l">
                <form method="POST" action="{{ route('password.email') }}" >
                    @csrf
                    <p class="input-field r-mb-0">

                        <input id="email" name="email" class="validate  @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" required autocomplete="email" autofocus>
                        <label for="email" class="">Email</label>
                        @error('email')
                        <span class=" invalid-feedback r-fs-pico r-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </p>


                    <button type="submit" class="r-btn r-btn--primary r-btn--match-input r-btn--left-floated-icon input-field r-btn-spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-unlock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 9.9-1" />
                        </svg>
                        <span class="r-fw-medium r-btn_text">{{ __('Send Password Reset Link') }}</span>
                        <div class="r-spinner r-pos-a r-right-edge">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                </form>

                <a href="{{ route('password.request') }}" class="r-gutter--top--as-edge r-d-flex r-j-c-fe r-co-secondary r-mb-0">
                    Forgot password?
                </a>



            </div></div>
    </section>
@endsection
