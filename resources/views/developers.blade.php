@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <!-- Introduction -->


                    <!-- Scope List -->

                    <div class="buttons">

                        <!-- Authorize Button -->
                        <form method="get" action="http://10.3.2.51:8002/oauth/redirect">
                            <input type="hidden" name="_token" value="UovdA7AJRyaJycc5ihOaqsJCVhMgusblnWYywl0j">
                            <input type="hidden" name="state" value="">
                            <input type="hidden" name="client_id" value="4">
                            <input type="hidden" name="auth_token" value="6SLQB1pWgFgxeLBK">
                            <button type="submit" class="btn btn-success btn-approve">Go Suite Home</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>
</div>
<script type="text/javascript">
    function redirectUrl(){
        var redirectButton=document.getElementById('redirectButton')
        redirectButton.addEventListener('click',function(){
            window.location.href = "{{ "http://10.3.2.51:8002/oauth/redirect" }}";
        })
    }


</script>

@endsection
