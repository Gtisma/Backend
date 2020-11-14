@extends('auth.layouts.mainauth')

@section('content')
    <section class="r-split-twin_content r-gutter--bottom r-d-flex r-flex-dir-col r-al-i-c r-tx-c r-gutter--2x@lg r-edges">
        <h2 class="r-sr">Log In Form</h2>
        <div class="r-visible-lg-up r-gutter--bottom"><a href="/" class="r-logo r-d-flex r-al-i-c"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000">
                    <title>Gtisma Credit Logo Icon (Full Brand Red Background)</title>
                    <rect fill="#ea4425" width="2000" height="2000" rx="1000" />
                    <polygon fill="#fff" points="556.34 1245.12 1013.01 280.07 1657.54 1627.43 995.66 653.14 556.34 1245.12" />
                    <polygon fill="#fff" points="342.46 1673.68 992.77 844.3 1178.66 1127.58 1018.79 1029.29 342.46 1673.68" />
                </svg><span class="r-logo_text r-fw-medium r-suffix r-visible-sm-up">
        GTISMA
    </span>
            </a></div>
        <div class="r-w-100% r-maxwidth-xs">
            <h3 class="r-mt-0 r-headline--small">Welcome back!</h3>
            <p class="r-mb-0">
                New to GTISMA? <a href="/sign-up" class="r-co-secondary">Sign up.</a>
            </p><div class="r-tx-l">
                <form action="{{ route('login') }}" class="">
                    <p class="input-field r-mb-0">
                        <input id="email" class="validate  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" required autocomplete="email" autofocus>
                        <label for="email" class="">Email</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </p>
                    <p class="input-field r-mb-0">
                        <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                        <label for="password" class="">Password</label>
                    </p>
                    <button type="submit" class="r-btn r-btn--primary r-btn--match-input r-btn--left-floated-icon input-field r-btn-spinner"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-unlock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 9.9-1" />
                        </svg><span class="r-fw-medium r-btn_text">Log in</span>
                        <div class="r-spinner r-pos-a r-right-edge">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                </form>
                <a href="{{ route('password.request') }}" class="r-gutter--top--as-edge r-d-flex r-j-c-fe r-co-secondary">
                    Forgot password?
                </a>
                <p class="r-mb-0 r-gutter--as-edge r-opacity-08 r-fs-nano">
                    By continuing you accept our
                    <a href="/tocs" target="_blank">Terms of Use</a> and
                    <a href="/privacy" target="_blank">Privacy Policy</a>.
                </p>
            </div></div>
    </section>
@endsection
