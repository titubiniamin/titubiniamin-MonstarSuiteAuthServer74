@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body row justify-content-center" >
                    <!-- Introduction -->

                    <!-- Scope List -->
{{--                    @php--}}
{{--//                    echo auth('web')->user()->email_verified_at;--}}
{{--                         if(auth('web')->user()->email_verified_at !== null){--}}
{{--                            header("Location: http://10.3.2.51:8002/oauth/redirect");--}}
{{--                        };--}}
{{--                    @endphp--}}
                    <div class="buttons">
                        <!-- Authorize Button -->
{{--                        <form method="get" action="http://10.3.2.51:8002/oauth/redirect">--}}
                        <form method="get" action="http://localhost:5173/login">
                            <input type="hidden" name="client_id" value="4">
                            <input type="hidden" name="redirect_uri" value="http://localhost:5173/callback">
                            <button type="submit" class="btn btn-success btn-approve">Go Suite Home Page</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
