@extends('layouts.app')
@section('content')
	<div class="container-fluid loginbg">
		<section id="login d-flex align-items-center">
			<div class="col-12 ">
				<div class="row pt-5" style="height: 1000px;">
					<div class="col-lg-4 col-md-6 m-auto py-5">
						<div class="mb-2 text-white text-center">
							<h2 class="text-uppercase shadow pb-2">Sign into your account</h2>
						</div>
						<div class="mb-2">
							<form method="POST" action="{{route('login')}}">
								<div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
									<input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? 'is-invalid' :'' }}
                                               bg-transparent" name="email" value="{{old('email')}}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
								</div>
								<div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                           class=" bg-transparent form-control{{ $errors->has('password') ?
                                           'is-invalid' :
                                            '' }}"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
								</div>
								<div class="form-group row">
									<button class="btn btn-pink btn-block" type="submit">{{ __('Login') }}
									</button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
								</div>



							</form>
						</div>
						<div class="mb-2 text-white">
							<p><small >Dont have an account yet? <a href="signup.blade.php" class="text-pink">Create
                                                                                                              account</a>
								<br>
							          Forgot your username or password? <a href="forgotpass.blade.php"
							                                               class="text-pink">Recover
							                                                                          account</a></small></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
	</div>
@endsection
