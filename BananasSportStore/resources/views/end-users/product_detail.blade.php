@extends('layouts.homepage')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product-single.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/cart.js') }}"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>
function addToCart(){
	event.preventDefault();
	let url = $(this).data('url')
	$.ajax({
		type: "GET",
		url: url,
		dataType: 'json',
		success: function(data) {
			if(data.code === 200){
				alert('Thêm sản phẩm thành công vào giỏ hàng');
			}
		},
		error: function(){

		}
	})
}

 $(function(){
	$('.add_to_cart').on('click', addToCart);
 });

</script>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="container py-3">
			<a style="text-decoration: none; color: #415EC6;" href="{{ route('category.product',
                        ['slug' => $categoryParent[0]->slug,
                         'id' => $categoryParent[0]->id]) }}">{{ $categoryParent[0]->name }}</a> <span class="bi bi-chevron-compact-right " style="color: #415EC6;"></span>
            <a style="text-decoration: none; color: #415EC6;" href="#">{{ $productdetail[0]->name }}</a>
		</div>
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content row">
							<div class="tab-pane active col-9 m-auto " id="pic-1">
								<img style="border-radius: 15px;"  src="{{ $productdetail[0]->feature_image_path }}" />
							</div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
							<a class="left carousel-control m-auto" href="#myCarousel" role="button" data-slide="prev">
								<span class="bi bi-chevron-compact-left " style="font-size: 25px; color: #415EC6" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							@foreach($images as $image)
							<li class="active" ><a data-target="#pic-1" data-toggle="tab" ><img style="border-radius: 15px;"  src="{{ $image->image_path }}" /></a></li>
							@endforeach
							<a class="right carousel-control m-auto" href="#myCarousel" role="button" data-slide="next">
								<span class="bi bi-chevron-compact-right " style="font-size: 25px; color: #415EC6" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</ul>
					</div>
					<div class="col-md-6">
						<h3 class="product-title" style="color: #5974D4;">{{ $productdetail[0]->name }}</h3>
							<div class="product-description " style="font-weight: 500; text-align: justify;">
                            {{ $productdetail[0]->content }}
							</div>
						<h4 class="price my-4 text-center py-3" style="background-color: #E8EBF4;border-radius: 10px;"> <span> {{ number_format($productdetail[0]->price) }} VNĐ </span></h4>	
						<div class="row py-4 " > 
							<h6 class="col-3 my-auto">Số lượng:</h6>
							<div class="col-6 count" >
								<div class="input-group" >
									<span class="input-group-btn">
										<button type="button" class="quantity-left-minus btn rounded-3" onclick="minus('quantity')" style="left: -11px;" data-type="minus" data-field="quantity">
											<span class="bi bi-dash-lg"></span>
										</button>
									</span>
									<input type="text" id="quantity" name="quantity" class="form-control input-number text-center " style="border: none; " value="1" min="1" max="100">
									<span class="input-group-btn">
										<button type="button" class="quantity-right-plus btn btn-number rounded-3" onclick="plus('quantity')" style="right: -11px;" data-type="plus" data-field="quantity">
											<span class="bi bi-plus-lg"></span>
										</button>
									</span>
								</div>
							</div>
						</div>
						<div class="action pt-2 pb-5">
							<a class="add_to_cart btn btn-act btn-outline-act"
							data-url="{{ route('addToCart', ['id' => $productdetail[0]->id]) }}" 
							href="#">Thêm vào giỏ</a>
							<button class="buy btn btn-act btn-outline-act " type="button">Mua ngay</button>
						</div>
					</div>
				</div>
			</div>
			<hr class="hr-about container mx-auto col-sm-12 col-md-6 col-lg-6">
			<div class="container pt-5">
				<h5 class="text-center" style="color: #5974D4; font-size: 25px;">HƯỚNG DẪN CHỌN SIZE</h5>
				<img class="img-fluid mx-auto p-3 d-block col-lg-10 col-md-12"  src="{{ asset('img/Rectangle46.png') }}">
				<hr class="hr-about container mx-auto col-sm-12 col-md-6 col-lg-6">
				<h5 class="text-center p-5" style="color: #5974D4; font-size: 25px;">CÁC SẢN PHẨM KHÁC</h5>
				<div class="row container">
					<div class="product-list">
						<div class="row ">
                            @foreach( $productsHot as $productItem)
							<div class=" col-md-6 col-lg-3 p-3">
								<div class="product" style="background-color: #E8EBF4; border-radius: 30px;">
									<a href="{{ route('category.productdetail', ['id' => $productItem->id,
                                            'category_id' => $productItem->category_id]) }}" class="img-prod"><img class="img-fluid mx-auto p-3 d-block" src="{{$productItem->feature_image_path}}" alt="Colorlib Template">
									</a>
									<div class="text py-3 px-3">
										<h3><a href="{{ route('category.productdetail', ['id' => $productItem->id,
                                                    'category_id' => $productItem->category_id]) }}"  class="card-name">{{$productItem->name}}</a></h3>
											<div class="pricing">
												<p class="price"><span class="mr-2 price-dc">{{$productItem->price}}</span></p>
											</div>
									</div>
								</div>
							</div>
                            @endforeach
							<a href="#" class="text-center" style="color: black;">Xem thêm></a>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>
@endsection