<nav id="sidebar">
    <div class="sidebar-header">
        <a href="#">
            <img style="width: 90px; height: 90px;" src="{{ asset('Uploads/avatar/'.auth()->user()->avatar) }}">
        </a>
        <p style="margin: 3px 0px;">{{ auth()->user()->name }}</p>
        <p style="margin: 3px 0px;">
            @if(auth()->user()->level == 1)
                Admin
            @else
                Khách hàng
            @endif
        </p>
    </div>
    <div class="left-custom-menu-adp-wrap">
        <ul class="nav navbar-nav left-sidebar-menu-pro">
            <li class="nav-item">
                <a href="/admin" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Thống kê</span></a>
            </li>
            <li class="nav-item">
                <a href="/admin/user" class="nav-link"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Quản lý người dùng</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Quản lý sản phẩm</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Quản lý danh mục</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('productimg.index') }}" class="nav-link"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Quản lý ảnh sản phẩm</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sale.index') }}" class="nav-link"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Quản lý ưu đãi</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('orderBackend.index') }}" class="nav-link"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Quản lý đơn đặt hàng</span></a>
            </li>
            <li class="nav-item">
                <a href="/admin/review/" class="nav-link"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Quản lý đánh giá</span></a>
            </li>
        </ul>
    </div>
</nav>