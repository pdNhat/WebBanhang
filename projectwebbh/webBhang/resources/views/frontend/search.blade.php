

	@extends('frontend.master')
@section('title','Vietpro Shop - Category')
@section('content')
	<link rel="stylesheet" href="css/search.css">


					<div id="wrap-inner">
						<div class="products">
							<h3>Tìm kiếm với từ khóa: <span>{{$search}}</span></h3>
							<div class="product-list row">

									@foreach($items as $pr)
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
							<ul class="pagination pagination-lg justify-content-center">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item disabled"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
@endsection			
					<!-- end main -->
			