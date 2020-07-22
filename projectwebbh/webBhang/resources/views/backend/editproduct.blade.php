@extends('backend.index')
@section('title','Sửa sản phẩm')
@section('content')	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
						<form method="post" action="{{url('admin/home/product/edit/'.$data->pr_id)}}" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="name" class="form-control" value="{{ $data->pr_name }}">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="price" class="form-control" value="{{ $data->pr_price }}">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input type="file" name="img" class="form-control">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{url('upload/product/'.$data->pr_img)}}">
									</div>
									<div class="form-group" >
										<label>Phụ kiện</label>
										<input required type="text" name="accessories" class="form-control" value="{{ $data->pr_accessories }}">
									</div>
									<div class="form-group" >
										<label>Bảo hành</label>
										<input required type="text" name="waranty" class="form-control" value="{{ $data->pr_waranty }}">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="promotion" class="form-control" value="{{ $data->pr_promotion }}">
									</div>
									<div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="condition" class="form-control" value="{{ $data->pr_condition }}">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											@if($data->status == 1)
											<option value="1">Còn hàng</option>
											<option value="0">Hết hàng</option>
											@else
											<option value="0">Hết hàng</option>
											<option value="1">Còn hàng</option>
											
											@endif
					                    </select>
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea required class='ckeditor' name="description">
											{{$data->pr_description}}
										</textarea>
										
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											@foreach($cate as $ct)
											
											<option 
                                            @if($ct->ca_id == $ca_id)
                                               {{"selected"}}
                                            @endif
											value="{{$ct->ca_id}}">{{$ct->ca_name}}</option>
											
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										@if($data->pr_featured == 0)
										Có: <input type="radio" name="featured" value="1">
										Không: <input type="radio" checked name="featured" value="0">
										@else
										Có: <input type="radio" checked name="featured" value="1">
										Không: <input type="radio"  name="featured" value="0">
										@endif
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{ csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection