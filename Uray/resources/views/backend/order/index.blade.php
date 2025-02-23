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
		                                <li><a href="{{ route('orderBackend.index') }}">Quản lý đơn đặt hàng</a> <span class="bread-slash">/</span>
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
		                                <li><a href="{{ route('orderBackend.index') }}">Quản lý đơn đặt hàng</a>
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
		                            <h1>Quản lý đơn đặt hàng</h1>
		                            <div class="sparkline8-outline-icon">
		                                <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
		                                <span><i class="fa fa-wrench"></i></span>
		                                <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="sparkline8-graph">
		                        <div class="datatable-dashv1-list custom-datatable-overright">
		                         
		                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
		                                <thead>
		                                    <tr>
		                                        
		                                        <th data-field="id">ID</th>
		                                        <th data-field="user_name">Tên khách hàng</th>
		                                        <th data-field="emai">Email</th>
		                                        <th data-field="address">Địa chỉ</th>
		                                        <th data-field="phone">Điện thoại</th>
							                    <th data-field="totalMoney">Tổng tiền</th>
							                    <th data-field="Date">Ngày đặt hàng</th>
							                    <th data-field="status">Trạng thái</th>
		                                        <th data-field="action" width="100px">Hành động</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                    @foreach($orders as $order)
						                  	<tr>
							                    <td>{{$order->id}}</td>
							                    <td>{{$order->user_name}}</td>
							                    
							                    <td>{{$order->totalMoney}}</td>
							                    <td>{{$order->Date}}</td>
							                    <td>{{$order->status}}</td>
		                                        <td style="width: 125px !important;">
		                                            <div class="btn-group project-list-action">
						                                <a href="{{ route('orderBackend.show',['id'=>$order->id])}}" style="float: left;">
						                                	<button type="button" class="btn btn-white btn-action btn-xs">Xem chi tiết</button>
						                                </a>
						                                
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