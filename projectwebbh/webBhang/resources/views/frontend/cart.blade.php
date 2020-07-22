@extends('frontend.master')
@section('title','Vietpro Shop - Home')
@section('content')
	<link rel="stylesheet" href="css/cart.css">
	<script type="text/javascript">
		function updatecart(qty,id) {
			// body...
			$.get(
                 "{{url('cart/update')}}",
                 {qty:qty,id:id},
                 function(){
                 	location.reload();
                 }
				);
		}
	</script>
					<div id="wrap-inner">
                    
						<div id="list-cart">
                                 @if($items->count() >= 1)
							<h3>Giỏ hàng</h3>
							<form>
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="11.111%">Ảnh mô tả</td>
										<td width="22.222%">Tên sản phẩm</td>
										<td width="22.222%">Số lượng</td>
										<td width="16.6665%">Đơn giá</td>
										<td width="16.6665%">Thành tiền</td>
										<td width="11.112%">Xóa</td>
									</tr>
									<?php $price = 0; ?>
									@foreach($items as $pr)
									<tr>
										<td><img width="150" class="img-responsive" src="{{url('upload/product/'.$pr->attributes->img)}}"></td>
										<td>{{$pr->name}}</td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number" value="{{$pr->quantity}}" onchange="updatecart(this.value,'{{$pr->id}}')">
											</div>
										</td>
										<td><span class="price">{{ number_format($pr->price,0,',','.') }}đ</span></td>
										<td><span class="price">{{number_format($pr->price * $pr->quantity,0,',','.')}} đ</span></td>
										<td><a href="{{url('cart/delete/'.$pr->id)}}">Xóa</a></td>
									</tr>
									<?php

									$x = $pr->price * $pr->quantity;
									
									$price = $price + $x; 
                                    
									?>
									@endforeach
									
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
											Tổng thanh toán: <span class="total-price">{{number_format($price,0,',','.')}} đ</span>
																													
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="{{url('/')}}" class="my-btn btn">Mua tiếp</a>
										<a href="{{url('cart/cartadd')}}" class="my-btn btn">Cập nhật</a>
										<a href="{{url('cart/delete/all')}}" class="my-btn btn">Xóa giỏ hàng</a>
									</div>
								</div>
							</form>             	                	
						</div>

						<div id="xac-nhan">
							<h3>Xác nhận mua hàng</h3>
							<form method="post" action="{{url('cart/email')}}">
								<div class="form-group">
									<label for="email">Email address:</label>
									<input required type="email" class="form-control" id="email" name="email">
								</div>
								<div class="form-group">
									<label for="name">Họ và tên:</label>
									<input required type="text" class="form-control" id="name" name="name">
								</div>
								<div class="form-group">
									<label for="phone">Số điện thoại:</label>
									<input required type="number" class="form-control" id="phone" name="phone">
								</div>
								<div class="form-group">
									<label for="add">Địa chỉ:</label>
									<input required type="text" class="form-control" id="add" name="add">
								</div>
								<div class="form-group text-right">
									<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
								</div>
								{{csrf_field()}}
							</form>
							 @else
                     <div><h3>Giỏ hàng trống</h3></div>
                              @endif
						</div>
            
					</div>

					</div>
					<!-- end main -->
@endsection