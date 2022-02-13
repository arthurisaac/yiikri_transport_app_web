@extends('layouts.auth')

@section('content')

    <form class="form w-100" method="POST" action="{{ route('login') }}">
    @csrf
    <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">{{ __('Connectez-vous à ') }} {{ config('app.name', 'WEBAPP') }}</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">{{ __('Nouveau ici?') }}
                <a href="{{ route('register') }}"
                   class="link-primary fw-bolder">{{ __('Créer un compte') }}</a></div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">{{ __('Adresse mail') }}</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                   type="email" name="email" autocomplete="off" value="{{ old('email') }}"/>
            @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Mot de passe') }}</label>
                <!--end::Label-->
                <!--begin::Link-->
                @if (Route::has('password.request'))
                    <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                   type="password" name="password"
                   autocomplete="off"/>
            @error('password')<span class="invalid-feedback"
                                    role="alert"><strong>{{ $message }}</strong></span>@enderror
        <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">{{ __('Continuer') }}</span>
                <span class="indicator-progress">{{ __('Patientez svp') }}...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Submit button-->
            <!--begin::Separator-->
            <div class="text-center text-muted text-uppercase fw-bolder mb-5">{{ __('Ou') }}</div>
            <!--end::Separator-->
            <!--begin::Google link-->
            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                     class="h-20px me-3"/>{{ __('Continuer avec Google') }}</a>
            <!--end::Google link-->
        </div>
        <!--end::Actions-->
    </form>

    {{--<form>
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end"></label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control " name="email"
                       required autocomplete="email" autofocus>


            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>--}}
@endsection
