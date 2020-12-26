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
                                        <li><a href="/admin">Thống kê</a> 
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
                                        <li><a href="/admin">Thống kê</a>
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
<!-- income order visit user Start -->
        <div class="income-order-visit-user-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>Đơn hàng trong tháng</h2>
                                    <div class="main-income-phara">
                                        <p>Monthly</p>
                                    </div>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3>
                                            <span class="counter">
                                                @foreach($countMonth as $month)
                                                    {{ $month->orderM }}
                                                @endforeach
                                            </span>
                                        </h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline1"></span>
                                    </div>
                                </div>
                                <div class="income-range">
                                    <p>Tổng thu tháng</p>
                                    <span class="income-percentange">{{$totalMonth}} VND</span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>Đơn trong ngày</h2>
                                    <div class="main-income-phara order-cl">
                                        <p>Today</p>
                                    </div>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3>
                                            <span class="counter">
                                                @foreach($countDay as $day)
                                                    {{ $day->orderD }}
                                                @endforeach
                                            </span>
                                        </h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline6"></span>
                                    </div>
                                </div>
                                <div class="income-range order-cl">
                                    <p>Tổng thu hôm nay</p>
                                    <span class="income-percentange">{{$totalDay}} VND</span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>Visitor</h2>
                                    <div class="main-income-phara visitor-cl">
                                        <p>Today</p>
                                    </div>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3><span class="counter">7888200</span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline2"></span>
                                    </div>
                                </div>
                                <div class="income-range visitor-cl">
                                    <p>New Visitor</p>
                                    <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                            <div class="income-title">
                                <div class="main-income-head">
                                    <h2>User activity</h2>
                                    <div class="main-income-phara low-value-cl">
                                        <p>Low Value</p>
                                    </div>
                                </div>
                            </div>
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-adminpro-rate">
                                        <h3><span class="counter">88200</span></h3>
                                    </div>
                                    <div class="price-graph">
                                        <span id="sparkline5"></span>
                                    </div>
                                </div>
                                <div class="income-range low-value-cl">
                                    <p>In first month</p>
                                    <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- income order visit user End -->
        <div style="display: flex;">
            <div id="chart-now" data-order="{{ $productBuy }}" style="width: 25%"></div>
            <div id="container" data-order="{{ $orderYear }}" style="width: 25%"></div>
            <div id="chart-month" data-order="{{ $orderMonth }}" style="width: 25%"></div>
            <div id="chart-day" data-order="{{ $orderDay }}" style="width: 25%"></div>
        </div>
        
    
        
        <div id="no-order" style="display: none;">Hôm nay không có đơn hàng nào</div>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>


@endsection