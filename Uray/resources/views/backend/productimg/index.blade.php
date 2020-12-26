@extends('Layouts.backend')
@section('content')
<div class="wrapper-pro">
    <div class="left-sidebar-pro">
        @include('Layouts.partionsBackend.sidebar')
    </div>
    <!-- Header top area start-->
    <div class="content-inner-all">
        @include('Layouts.partionsBackend.menutop')
        <!-- Header top area end-->
        <!-- Breadcome start-->
        <div class="breadcome-area mg-b-30 small-dn">
		    <div class="container-fluid">
		        <div class="row">
		            <div class="col-lg-12">
		                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
		                    <div class="row">
		                        <div class="col-lg-6">
		                            <div class="breadcome-heading">
		                                <form role="search" class="">
											<input type="text" placeholder="Search..." class="form-control">
											<a href=""><i class="fa fa-search"></i></a>
										</form>
		                            </div>
		                        </div>
		                        <div class="col-lg-6">
		                            <ul class="breadcome-menu">
		                                <li><a href="{{ route('productimg.index') }}">Quản lý ảnh sản phẩm</a>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
<!-- Breadcome End-->
<!-- Breadcome start-->
		<div class="breadcome-area des-none mg-b-30">
		    <div class="container-fluid">
		        <div class="row">
		            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
		                    <div class="row">
		                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		                            <div class="breadcome-heading">
		                                <form role="search" class="">
											<input type="text" placeholder="Search..." class="form-control">
											<a href=""><i class="fa fa-search"></i></a>
										</form>
		                            </div>
		                        </div>
		                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		                            <ul class="breadcome-menu">
		                                <li><a href="{{ route('productimg.index') }}">Quản lý ảnh sản phẩm</a>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
<!-- Breadcome End-->
		<div class="admin-dashone-data-table-area mg-b-15">
		    <div class="container-fluid">
		        <div class="row">
		            <div class="col-lg-12">
		                <div class="sparkline8-list shadow-reset">
		                    <div class="sparkline8-hd">
		                        <div class="main-sparkline8-hd">
		                            <h1>Quản lý ảnh sản phẩm</h1>
		                            <div class="sparkline8-outline-icon">
		                                <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
		                                <span><i class="fa fa-wrench"></i></span>
		                                <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="sparkline8-graph">
		                        <div class="datatable-dashv1-list custom-datatable-overright">
		                            <div id="toolbar">
		                                <button class="btn btn-white btn-xs" data-toggle="modal" data-target="#CreatImg">
		                                    <i class="fa fa-plus"></i> Thêm mới
		                                </button>
		                                <div class="modal fade" id="CreatImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		                                    <div class="modal-dialog modal-dialog-centered" role="document">
		                                        <div class="modal-content">
		                                            <div class="modal-header">
		                                                <h5 class="modal-title" id="exampleModalLongTitle">Lưu lại</h5>
		                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                                                  <span aria-hidden="true">&times;</span>
		                                              </button>
		                                            </div>
		                                            <div class="modal-body">
		                                               @foreach($errors ->all() as $error)
		                                                    <li style="color: red">{{ $error}}</li>
		                                                @endforeach
		                                                <form role="form" method="post" action="{{ route('productimg.store')}}" enctype="multipart/form-data" class="form-create">
										                	{{ csrf_field() }}
							                                <div class="form-group has-warning">
							                                    <label>Ảnh sản phẩm</label>
							                                    <input type="file" class="form-control" id="inputWarning" placeholder="Ảnh sản phẩm" name="image_detail">
							                                    <p>{{ $errors->first('image_detail') }}</p>
							                                    <label>Mã sản phẩm</label>
							                                    <select name="product_id" class="form-control">
							                                        @foreach($productIds as $product_id)
							                                        <option >{{$product_id->id}}</option>
							                                        @endforeach
							                                    </select>

							                                    <p>{{ $errors->first('product_id') }}</p>
							                                </div>
		                                            </div>
		                                            <div class="modal-footer">
		                                                
		                                                <button type="submit" class="btn btn-primary">Lưu</button>
		                                                </form>
		                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
		                                            </div>

		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25, 30, 35]" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
		                                <thead>
		                                    <tr>
		                                        
		                                        <th data-field="id">ID</th>
		                                        <th data-field="product_id">Mã sản phẩm</th>
		                                        <th data-field="image_detail">Hình ảnh</th>
							                    
		                                        <th data-field="action" width="100px">Hành động</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                    @foreach($productimgs as $productimg)
					                        <tr>
					                        	<td>{{ $productimg->id }}</td>
					                            <td>{{ $productimg->product_id }}</td>
					                            <td><img width="150px" height="150px" src="{{ asset('Uploads/Product_detail/'.$productimg->image_detail)}}"></td>
					                            
		                                        <td style="width: 125px !important;">
		                                            <div class="btn-group project-list-action">
		                                                
		                                                <a href="#"><button class="btn btn-white btn-xs btn-action" data-toggle="modal" data-target="{{'#UpdateImg'.$productimg->id}}"><i class="fa fa-pencil"></i> Sửa</button></a>
						                                <div class="modal fade" id="{{'UpdateImg'.$productimg->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						                                    <div class="modal-dialog modal-dialog-centered" role="document">
						                                        <div class="modal-content">
						                                            <div class="modal-header">
						                                                <h5 class="modal-title" id="exampleModalLongTitle">Sửa</h5>
						                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						                                                  <span aria-hidden="true">&times;</span>
						                                              </button>
						                                            </div>
						                                            <div class="modal-body">
						                                               <form role="form" id="{{'form-edit'.$productimg->id}}" method="post" action="{{ route('productimg.update', ['id'=>$productimg->id])}}" enctype="multipart/form-data">
															              	{{ csrf_field() }}
					                                                        <input name="_method" type="hidden" value="PUT">
					                                                        <div class="form-group has-warning">
					                                                            <label>Ảnh sản phẩm</label>
					                                                            <img style="width: 200px; height: 200px;" src="{{ asset('Uploads/Product_detail/'.$productimg->image_detail) }}">
					                                                            <input type="file" class="form-control" id="inputWarning" placeholder="Hình ảnh" name="image_detail">
					                                                            <p>{{ $errors->first('image_detail') }}</p>
					                                                            <label>Mã sản phẩm</label>
					                                                            <select name="product_id" class="form-control">
					                                                                <option selected="selected">{{ $productimg->product_id}}</option>
					                                                                @foreach($productIds as $productId)
					                                                                <option >{{$productId->id}}</option>
					                                                                @endforeach
					                                                            </select>

					                                                            <p>{{ $errors->first('product_id') }}</p>
					                                                        </div>
						                                            </div>
						                                            <div class="modal-footer">
						                                                
						                                                <button type="submit" form="{{'form-edit'.$productimg->id}}" class="btn btn-primary">Sửa</button>
						                                            	</form>
						                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						                                            </div>

						                                        </div>
						                                    </div>
						                                </div>
						                                
						                                <form role="form" action="{{ route('productimg.destroy',['id'=>$productimg->id])}}" method="POST" style="float: left;">
						                                    {{ csrf_field() }}
						                                    <input type="hidden" name="_method" value="DELETE">
						                                    <a href="#" onclick="return confirm('Bạn chắc chứ?')">
		                                                        <button class="btn btn-white btn-action btn-xs">
		                                                        	<i class="fa fa-trash"></i>  Xóa
		                                                        </button>
		                                                    </a>
						                                </form>
		                                            </div>
		                                        </td>
		                                  </tr>
		                                  @endforeach
		                                    
		                                </tbody>
		                            </table>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        <!-- Transitions End-->
    </div>
</div>

@endsection