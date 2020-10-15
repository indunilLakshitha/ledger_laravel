@extends('layouts.login')
@section('content')
    @if(session('error'))
        <script>
            var getMessage = '{{ session('error')  }}'

            $(document).ready(function(){

                swal("Please check!", getMessage ,"error");

            });
        </script>
    @endif

    <div class="container">

        <div class="row justify-content-center" id="login-form"  style="margin-top: 300px">
            <div class="col-6">
                <div class="card">
                    <img  class="logo" alt="" src="{{asset('logo_new.png')}}" width="100px" style="margin-left: 200px " >
                    {{-- <div class="card-header">
                        <strong>Login</strong> Admin
                    </div> --}}
                    <div class="card-body card-block">
                        <form action="{{ route('login') }}" method="POST" class="form-horizontal">
                           @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="hf-email" class=" form-control-label">Email</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="user_name" id="email" name="email" placeholder="Enter Email..."
                                           class="form-control @error('email') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="hf-password" class=" form-control-label">Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="hf-password" name="password"
                                           placeholder="Enter Password..." class="form-control @error('password') is-invalid @enderror">
                                    {{-- <span class="help-block">Please enter your password</span> --}}
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-8">

                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Login
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    @if (Route::has('password.request'))
                                    {{-- <a class="" > --}}
                                        <i class="fa fa-ban " href="{{ route('password.request') }}"></i> Reset
                                    {{-- </a> --}}
                                     @endif

                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
