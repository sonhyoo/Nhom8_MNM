@extends('Layouts.frontend')
@section('content')
<!--title page-->
<div class="title-page"
     style="background-image: url('{{ asset('imager/shop/Shop_3Columns-title.jpg') }}');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Shop</h1>
                <p><span>Home</span>/ Shop / Check out</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
        <div class="col-lg-8">
            <h1>Edit</h1>

            <form role="form" method="post" action="{{ route('frontenduser.update',['id'=>$user->id])}}" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                {{ csrf_field() }}
                @foreach($errors ->all() as $error)
                <li style="color: red">{{ $error}}</li>
                @endforeach
              <div class="form-group has-warning" >
                
                <label>Name</label>
                <input type="text" class="form-control" id="inputWarning" placeholder="UserName" value="{{$user->name}}" name="name">
                <label>Email</label>
                <input type="text" class="form-control" id="inputWarning" placeholder="Email" value="{{$user->email}}" name="email">
                <label>Phone</label>
                <input type="text" class="form-control" id="inputWarning" placeholder="Phone" value="{{$user->phone}}" name="phone">
                <label>Address</label>
                <input type="text" class="form-control" id="inputWarning" placeholder="Address" value="{{$user->address}}" name="address">
                <label>Password</label>
                <input type="text" class="form-control" id="inputWarning" placeholder="Password" value="{{$user->password}}" name="password">
                <label>Avatar</label>
                <img style="width: 100px; height: 100px;" src="{{ asset('Uploads/avatar/'.$user->avatar) }}">
                <input type="file" class="form-control" id="inputWarning" placeholder="avatar" name="avatar" value="" style="margin-bottom: 5px;">
              </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-4">
    		<input type="submit" class="btn btn-success">
    	</div>
    </div>
</div>
@endsection