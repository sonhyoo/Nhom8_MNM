@extends('Layouts.frontend')
@section('content')
<!--title page-->
<div class="title-page"
     style="background-image: url('{{ asset('imager/shop/Shop_3Columns-title.jpg') }}');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <p>Tài khoản / Đổi mật khẩu</p>
            </div>
        </div>
    </div>
</div>
<!--end title page-->
<div class="container">
    <div class="row content-checkout">
        <h3 style="text-transform: uppercase; margin-top: 20px;">Đổi mật khẩu</h3> 
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
       <form role="form" id="form-edit" method="post" action="{{ route('changePassword.update',['id'=>auth()->user()->id ])}}" style="width: 100%;">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            <table style="width: 100%">
                <tr>
                    <td class="td-infor">Mật khẩu cũ</td>
                    <td class="td-infor">
                        <input type="password" class="form-control" id="inputWarning" placeholder="Mật khẩu cũ" name="old_password" required >
                    </td>
                </tr>
                <tr>
                    <td class="td-infor">Mật khẩu mới</td>
                    <td class="td-infor">
                        <input type="password" class="form-control" id="inputWarning" placeholder="Mật khẩu mới " name="password" required >
                        <span class="error">{{ $errors->first('password') }}</span>
                    </td>
                </tr>
                <tr>
                    <td class="td-infor">Nhập lại mật khẩu mới</td>
                    <td class="td-infor"><input class="form-control" placeholder="Xác nhận mật khẩu" name="password_confirmation" type="password" required ></td>
                </tr>
                <tr>
                    <td class="td-infor"></td>
                    <td class="td-infor" style="text-align: right;">
                        <button type="submit" class="btn-update" form="form-edit">
                            Đổi mật khẩu
                        </button>
                    </td>
                </tr>
            </table>
    </div>
</div>
@endsection