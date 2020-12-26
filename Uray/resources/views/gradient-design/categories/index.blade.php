@extends('Layouts.backend')
@section('content')
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
                                <li><a href="#">Quản lý danh mục</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Danh sách</span>
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
                                <li><a href="#">Quản lý danh mục</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Danh sách</span>
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
                            <h1>Quản lý danh mục sản phẩm</h1>
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
                                <button class="btn btn-white btn-xs" data-toggle="modal" data-target="#CreatCategory">
                                    <i class="fa fa-plus"></i> Sửa
                                </button>
                                <div class="modal fade" id="CreatCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <form role="form" method="POST" action="{{ route('category.store')}}" >
                                                    <div class="form-group has-warning">
                                                         {{ csrf_field() }}
                                                        <label class="">Tên danh mục</label>
                                                        <input id="name" type="text" class="form-control" name="name" placeholder="Tên danh mục" value="{{ old('name')}}">
                                                        <p>{{ $errors->first('name') }}</p>

                                                        <label class="">Mô tả</label>
                                                        <textarea id="des" type="text" class="form-control" name="description" placeholder="Mô tả"></textarea>
                                                        <p>{{ $errors->first('description') }}</p>
                                                        <label class="">Từ khóa</label>
                                                        <textarea id="key" type="text" class="form-control" name="keywords" placeholder="Từ khóa"></textarea>
                                                        <p>{{ $errors->first('keywords') }}</p>
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
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name">Tên danh mục</th>
                                        <th data-field="des" data-editable="true">Mô tả</th>
                                        <th data-field="key" data-editable="true">Từ khóa</th>
                                        <th data-field="action">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        
                                        <td><a style="color: black;" href="{{ route('category.show',['id'=>$category->id])}}">{{$category->name}}</a></td>
                                        <td><a style="color: black;" href="{{ route('category.show',['id'=>$category->id])}}">{{$category->description}}</a></td>
                                        <td><a style="color: black;" href="{{ route('category.show',['id'=>$category->id])}}">{{$category->keywords}}</a></td>
                                        <td class="td-action">
                                            <div class="ctrl-btn">
                                                
                                                <button class="btn btn-white btn-xs" data-toggle="modal" data-target="{{'#UpdateCategory'.$category->id}}"><i class="fa fa-pencil"></i> Sửa</button>
                                                <div class="modal fade" id="{{'UpdateCategory'.$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Sửa</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <form role="form" method="post" action="{{route('category.update',['id'=>$category->id])}}">
                                                                    {{ csrf_field() }}
                                                                    <input name="_method" type="hidden" value="PUT">
                                                                    <div class="form-group has-warning">
                                                                        <label class="">Tên danh mục</label>
                                                                        <input id="name" type="text" class="form-control" name="name" placeholder="Tên danh mục" value="{{$category->name}}">
                                                                        <label class="">Mô tả</label>
                                                                        <textarea id="des" type="text" class="form-control" name="description" placeholder="Mô tả">{{$category->description}}</textarea>
                                                                        <label class="">Từ khóa</label>
                                                                        <textarea id="key" type="text" class="form-control" name="keywords" placeholder="Từ khóa">{{$category->keywords}}</textarea>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                
                                                                <button type="submit" class="btn btn-primary">Sửa</button>
                                                                </form>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <form role="form" action="{{ route('category.destroy',['id'=>$category->id])}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="#" onclick="return confirm('Bạn chắc chứ?')">
                                                        <button class="btn btn-white btn-action btn-xs"><i class="fa fa-trash"></i>Xóa</button>
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
@endsection