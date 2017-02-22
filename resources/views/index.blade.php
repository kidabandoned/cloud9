@extends('master')
@section('title', 'Apple')
@section('section')
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>i</span>Phone 6S</h1>
									<p>Điều duy nhất thay đổi mọi thứ</p>
									<button type="button" class="btn btn-default get"><a href="iphone6s">Chỉ từ 17.200.000</a></button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/iphone6s.jpg" width="238" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>i</span>Pad Air 2</h1>
									<p>Không chỉ mỏng</p>
									<button type="button" class="btn btn-default get"><a href="ipadair2">Chỉ từ 9.800.000</a></button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/ipad.png" width="380" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>M</span>acbook Air</h1>
									<p>Siêu mỏng... Siêu nhẹ</p>
									<button type="button" class="btn btn-default get"><a href="macbookair">Chỉ từ 18.000.000</a></button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/macbook.jpg"  class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
@stop