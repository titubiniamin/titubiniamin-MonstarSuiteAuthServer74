@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form id="resend-form" class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" onClick="showLoader()"  >{{ __('click here to request another') }}</button>.
                    </form>
                        <div id="loader" class="d-none text-center"> <!-- Loader div initially hidden -->
                            <img style="width: 50%;height: 50%" src="{{asset('images/loader.gif')}}" alt="Loader">
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    <script>
        function showLoader(){
            document.getElementById('loader').classList.remove('d-none');
        }

    </script>

