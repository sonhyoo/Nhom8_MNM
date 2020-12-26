@extends('Layouts.frontend')
@section('content')
<div class="title-page"
     style="background-image: url('{{ asset('imager/shop/Shop_3Columns-title.jpg')}}');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Shop</h1>
                <p><span>Home</span> / Shop / Edit Review</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
        <div class="col-lg-8">
            <h1>Edit product</h1>
			<form role="form" method="post" action="{{route('review.update',['id'=>$review->id])}}">
			    {{ csrf_field() }}
			    <input name="_method" type="hidden" value="PUT">
			    <div class="form-group has-warning">

			        <textarea id="des" type="text" class="form-control" name="review" placeholder="Review">{{$review->review}}</textarea>			        
			    </div>
		</div>
	</div>
	<div class="row">
        <div class="col-lg-4">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
	</div>
	</form>
</div>
@endsection