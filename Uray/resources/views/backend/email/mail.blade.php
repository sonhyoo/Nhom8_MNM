<h2>Đặt hàng thành công!</h2>

<p>Tên khách hàng : <b>{{ $order->user_name }}</b></p>
<p>Email : <b>{{ $order->email }}</b></p>
<p>Địa chỉ : <b>{{ $order->address }}</b></p>
<p>Điện thoại : <b>{{ $order->phone }}</b></p>
<p>Ngày đặt hàng <b>{{ $order->Date }}</b></p>

<table id="table" border="1px solid black" style="padding: 0px; border-spacing: 0px; text-align: left;" >
    <thead>
        <tr>
        	<th>Tên sản phẩm</th>
            <th width="50px">Số lượng</th>
            <th width="100px">Đơn giá</th>
        </tr>
    </thead>
    <tbody>
        @foreach($details as $detail)
        <tr>
            <td>{{$detail->product_name}}</td>
            <td>{{$detail->qty}}</td>
            <td>{{$detail->product_price}} VND</td>
      	</tr>
      	@endforeach
      	<tr>
      		<td>Tổng tiền</td>
      		<td colspan="2">{{$order->totalMoney}} VND</td>
      	</tr>
        
    </tbody>
</table>
<p>Chúng tôi sẽ xử lý đơn hàng của bạn trong thời gian sớm nhất!</p>
<h2>Cảm ơn bạn đã tin tưởng và ủng hộ Uray!</h2>

