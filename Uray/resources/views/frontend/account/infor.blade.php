@extends('Layouts.frontend')
@section('content')
<!--title page-->
<div class="title-page"
     style="background-image: url('{{ asset('imager/shop/Shop_3Columns-title.jpg') }}');background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <p>Cài đặt tài khoản</p>
            </div>
        </div>
    </div>
</div>
<!--end title page-->
<div class="container">
    <div class="row content-checkout">

        <div class="col-md-4 billing-detail" style="margin-top: 20px; ">
            <h2 style="text-transform: uppercase; ">Thông tin người dùng</h2>
            <img width="270px" height="328px" src="{{ asset('Uploads/avatar/'.auth()->user()->avatar) }}">
        </div>  
       <form role="form" id="form-edit" method="post" action="{{ route('account.update',['id'=>$user->id])}}" enctype="multipart/form-data" style="width: 100%; margin-top: 65px;" class="col-md-8">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            <table style="width: 100%">
                <tr>
                    <td class="td-infor">Tên người dùng</td>
                    <td class="td-infor">
                        <input type="text" class="form-control" id="inputWarning" placeholder="Tên người dùng" value="{{$user->name}}" name="name" required>
                        <span class="error">{{ $errors->first('name') }}</span>
                    </td>
                    
                </tr>
                <tr>
                    <td class="td-infor">Email</td>
                    <td class="td-infor">
                        <input type="text" class="form-control" id="inputWarning" placeholder="Email" value="{{$user->email}}" name="email" required>
                        <span class="error">{{ $errors->first('email') }}</span>
                    </td>
                    
                </tr>
                <tr>
                    <td class="td-infor">Số điện thoại</td>
                    <td class="td-infor">
                        <input type="text" class="form-control" id="inputWarning" placeholder="Điện thoại" value="{{$user->phone}}" name="phone" required>
                        <span class="error">{{ $errors->first('phone') }}</span>
                        
                    </td>
                    
                </tr>
                <tr>
                    <td class="td-infor">Địa chỉ</td>
                    <td class="td-infor">
                        <input type="text" class="form-control" id="inputWarning" placeholder="Địa chỉ" value="{{$user->address}}" name="address" required>
                        <span class="error">{{ $errors->first('address') }}</span>
                        
                    </td>

                </tr>
                <tr>
                    <td class="td-infor">Ảnh đại diện</td>
                    <td class="td-infor">
                        <input type="file" class="form-control" id="inputWarning" placeholder="Ảnh đại diện" name="avatar" value="" style="margin-bottom: 5px;" required>
                    </td>
                </tr>
                <tr>
                    <td class="td-infor"></td>
                    <td class="td-infor" style="text-align: right;">
                        <button type="submit" class="btn-update" form="form-edit">
                            Cập nhật thông tin
                        </button>
                    </td>
                </tr>
            </table>
    </div>
</div>
@endsection