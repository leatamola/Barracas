<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>DESTACADOS</h2>
			</div>

				<div class="product-slider owl-carousel">
					@foreach ($products as $product)
					<div class="product-item">
						<div class="pi-pic">
							<img src="{{url('products/small/',$product->image)}}" alt="{{$product->p_name}}">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Ver más</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6><a href="">{{$product->p_name}}</a></h6>
							<p>{{$product->p_name}}</p>
						</div>
					</div>
					@endforeach
				</div>


		</div>
	</section>
	<!-- letest product section end -->
