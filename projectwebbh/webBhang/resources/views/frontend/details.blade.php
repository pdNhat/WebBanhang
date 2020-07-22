

@extends('frontend.master')
@section('title','Vietpro Shop - Hoàn thành')
@section('content')
	<link rel="stylesheet" href="css/details.css">
	
					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							
							<h3>{{ $data['pr_name']}}</h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img width="250px" src="{{url('upload/product/'.$data->pr_img)}}">
								</div>
								<div  id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price">{{number_format($data->pr_price,0,',','.')}}</span></p>
									<p>Bảo hành: {{$data->pr_waranty}}</p> 
									<p>Phụ kiện: {{$data->pr_accessories}}</p>
									<p>Tình trạng: {{$data->pr_condition}}</p>
									<p>Khuyến mại: {{$data->pr_promotion}}</p>
									<p>Còn hàng: @if($data->pr_status == 1) Còn hàng @else Hết hàng @endif</p>
									<p class="add-cart text-center"><a href="{{url('cart/add/'.$data->pr_id)}}">Đặt hàng online</a></p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Chi tiết sản phẩm</h3>
							<p class="text-justify">{!!$data->pr_description!!}</p>
						</div>
						<div id="comment">
							<h3>Bình luận</h3>
							<div class="col-md-9 comment">
								<form action="{{url('comment/'.$data->pr_id)}}" method="post">
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Tên:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-default">Gửi</button>
									</div>
									{{csrf_field()}}
								</form>
							</div>
						</div>
						<div id="comment-list">
							
							@foreach($comment as $cm)
							<ul>
								<li class="com-title">
									{{$cm->cm_name}}
									<br>
									<span>{{date('d/m/Y H:i',strtotime($cm->created_at))}}</span>	
								</li>
								<li class="com-details">
									{{$cm->cm_content}}
								</li>
							</ul>
							@endforeach
							
						</div>
					</div>	
					</div>				
					<!-- end main -->
@endsection