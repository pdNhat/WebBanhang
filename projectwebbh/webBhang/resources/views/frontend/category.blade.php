@extends('frontend.master')
@section('title','Danh mục sản phẩm')
@section('content')

	<link rel="stylesheet" href="css/category.css">
	
					<div id="wrap-inner">
						<div class="products">
							<h3>SamSung</h3>
							<div class="product-list row">
								@foreach($product as $pr)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img width="150" src="{{url('upload/product/'.$pr->pr_img)}}" class="img-thumbnail"></a>
									<p><a href="#">{{$pr->pr_name}}</a></p>
									<p class="price">{{$pr->pr_price}}</p>	  
									<div class="marsk">
										<a href="{{url('detail/'.$pr->pr_id.'/'.$pr->pr_slug.'.html')}}">Xem chi tiết</a>
									</div>                                    
								</div>
								@endforeach
								
							</div>                	                	
						</div>

						<div id="pagination">
							
							{{ $product->links() }}
						</div>
					</div>
</div>
					
					<!-- end main -->
@endsection