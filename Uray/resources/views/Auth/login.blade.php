@extends('Layouts.backend')
@section('login')
<title>Login</title>
@endsection
@section('content')
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<div class="container" style="margin-top: 10%">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<h1 style="text-align: center;">ĐĂNG NHẬP</h1>
					<form role="form" action="{{ url('/login') }}" method="POST">
						{!! csrf_field() !!}
						<fieldset>
							<div class="row">
								<div class="col-sm-12 col-md-10  col-md-offset-1 ">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="far fa-user"></i></span> 
											<input class="form-control" placeholder="Email" name="email" type="text" value="{{ old('email') }}" autofocus>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fas fa-lock"></i></span>
											<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
										</div>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-lg btn-primary btn-block" value="Đăng nhập">
									</div>
									<div class="login-help">
										<a href="{{ url('/register') }}" >Đăng ký</a> - <a href="#" >Quên mật khẩu</a>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
body{
	background: #17568C;
}
.panel{
	border-radius: 5px;
}
.panel-heading {
    padding: 10px 15px;
}
.panel-title{
	text-align: center;
	font-size: 15px;
	font-weight: bold;
	color: #17568C;
}
.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}
</style>
@endsection