<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.ico') }}">
	<title>{{ $information['title'] }}</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap-arabic-theme.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap-arabic.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" >
	<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" >
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<link href="{{URL::asset('css/parsley.css')}}" rel="stylesheet">




</head>

<body id="page-top" data-spy="scroll">
	




	<a href="#page-top" id="toTop" class=" page-scroll"><span id="toTopHover" ></span>To Top</a>
	<div class="topbar-panel panel panel-primary " >
		<!--	<span class="clickable"><i class="fa fa-angle-up"></i></span>-->
		<div class="panel-body">
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-left">
							<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري .</p>
						</div>
						<!-- end left -->
						<div class="col-md-6 text-right">
							<ul class="social-icon">
								<li><a href="{{ $information['fb_id'] }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="{{ $information['tw_id'] }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="{{ $information['google_id'] }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="{{ $information['instagram_id'] }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="{{ $information['linked_id'] }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<!-- end left -->
					</div>
					<!-- end row -->
				</div>
				<!-- enc ontainer -->
			</div>
			<!-- end topbar -->  
		</div>
	</div>

	<header class="header wow fadeIn">
		<div class="container menu-margin">
			<div class="row">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a>
				</div>
				<!-- end col -->
				<div class="main-menu">
					<nav class="navbar navbar-default"  data-spy="affix" data-offset-top="150">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="active"><a  class=" page-scroll nav_li" href="#page-top">الرئيسية <span class="sr-only">(current)</span></a></li>
								<li ><a href="#services" class="page-scroll nav_li">خدماتنا</a></li>
								<li ><a href="#order_service" class="page-scroll nav_li">طلب خدمة</a></li>
								<li ><a href="#order_service" class="page-scroll nav_li">من نحن</a></li>
								<li ><a href="#products" class="page-scroll nav_li">منتجاتنا</a></li>
								<li ><a href="#contact" class="page-scroll nav_li">اتصل بنا</a></li>
							</ul>
						</div>
					</nav>
					<!-- end navbar -->
				</div>
			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
		<div class="information  wow fadeIn">
			<div class="container">
				<div class="col-md-4 col-sm-4  infor">
					<div class="header-contact clearfix">
						<p><i class="fa fa-map-marker alignleft green"></i><span >{{ $information['address'] }}</span></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4  infor infor-design">
					<div class="header-contact clearfix">
						<p><i class="fa fa-clock-o alignleft"></i><span>ماذا نقدم !<br>وقت أقصر - جودة الخدمة - الإلتزام بالمطلوب</span></p>
					</div>
					<!-- end header-contact -->
				</div>
				<div class="col-md-4 col-sm-4  infor">
					<div class="header-contact clearfix">
						<p><i class="fa fa-phone alignleft green"></i></i><span>اتصل بنا مجانا<br> {{ $information['phone'] }},</span></p>
					</div>
					<!-- end header-contact -->
				</div>
				<!-- end col -->
			</div>
		</div>
	</header>



	<section class="banner">

		<div id="main_slider" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#main_slider" data-slide-to="0" class="active"></li>
				<li data-target="#main_slider" data-slide-to="1"></li>
				<li data-target="#main_slider" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="div1">
						<div class=" wow fadeIn"  data-wow-delay="0.5s" data-wow-duration="2s">
							<img src="img/slider/garden7.png" alt="..." class="tree_fra">
						</div>
						<div class="carousel-caption">
							<div class=" wow fadeIn"  data-wow-delay="1s" data-wow-duration="2s">
								<img src="img/slider/icon-star.png" class="sun">
							</div>
							<h1 class="animate_word wow fadeInUp" data-wow-delay="1.5s" data-wow-duration="2s">
								<a href="" class="typewrite" data-period="2000" data-type='[ "اجعل بيتك قطعة من الجنة.", "هل تريد أن تكون فيلتك ذو واجهه رائعة.", "العين تريد أن تنظر للجمال  امتلك أفضل حديقة.", "اجعل بيتك منتعش من الخضرة , لدينا أفضل العمال فى خدمتك طوال الوقت ." ]'>
									<span class="wrap"></span>
								</a>
							</h1>

							<h3 class="animate_word wow fadeInDown"  data-wow-delay="2s" data-wow-duration="2s">
								<a href="" class="typewrite" data-period="2000" data-type='[ "لدينا أفضل المعدات والخدمات. محطة واحدة لجميع الاحتياجات الخاصة بك البستنة لمنزلك", "لدينا أفضل المعدات والخدمات. محطة واحدة لجميع الاحتياجات الخاصة بك البستنة لمنزلك", "لدينا أفضل المعدات والخدمات. محطة واحدة لجميع الاحتياجات الخاصة بك البستنة لمنزلك", "لدينا أفضل المعدات والخدمات. محطة واحدة لجميع الاحتياجات الخاصة بك البستنة لمنزلك ." ]'>
									<span class="wrap"></span>
								</a>
							</h3>

							<div class="btns ">
								<a href="#" class="btn btn-theme wow fadeInUp" data-wow-delay="3s" data-wow-duration="2s">المزيد من الخدمات</a>
								<a href="#" class="btn btn-theme-border wow fadeInUp" data-wow-delay="3.4s" data-wow-duration="2s">اطلب خدمة</a>
							</div>



						</div>
					</div>
				</div>
				<div class="item">
					<div class="div2">
						<div class=" wow zoomInUp"  data-wow-delay="0.5s" data-wow-duration="2s">
							<img src="img/slider/garden3.png" alt="..." class="img_div2">
						</div>
						<div class=" wow slideInRight hidden-xs"  data-wow-delay="1s" data-wow-duration="2s">
							<img src="img/slider/garden5.png" alt="..." class="img_motor">
						</div>
						<div class="carousel-caption">
							<div class=" wow fadeIn"  data-wow-delay="1s" data-wow-duration="2s">
								<img src="img/slider/icon-star.png" class="sun">
							</div>
							<h1 class="animate_word wow fadeInUp" data-wow-delay="1.5s" data-wow-duration="2s">
								<a href="" class="typewrite" data-period="2000" data-type='[ "اجعل بيتك قطعة من الجنة.", "هل تريد أن تكون فيلتك ذو واجهه رائعة.", "العين تريد أن تنظر للجمال  امتلك أفضل حديقة.", "اجعل بيتك منتعش من الخضرة , لدينا أفضل العمال فى خدمتك طوال الوقت ." ]'>
									<span class="wrap"></span>
								</a>
							</h1>

							<h3 class="animate_word wow fadeInDown"  data-wow-delay="2s" data-wow-duration="2s">
								<a href="" class="typewrite" data-period="2000" data-type='[ "لدينا أفضل المعدات والخدمات. محطة واحدة لجميع الاحتياجات الخاصة بك البستنة لمنزلك", "لدينا أفضل المعدات والخدمات. محطة واحدة لجميع الاحتياجات الخاصة بك البستنة لمنزلك", "لدينا أفضل المعدات والخدمات. محطة واحدة لجميع الاحتياجات الخاصة بك البستنة لمنزلك", "لدينا أفضل المعدات والخدمات. محطة واحدة لجميع الاحتياجات الخاصة بك البستنة لمنزلك ." ]'>
									<span class="wrap"></span>
								</a>
							</h3>

							<div class="btns ">
								<a href="#" class="btn btn-theme wow fadeInUp" data-wow-delay="3s" data-wow-duration="2s">المزيد من الخدمات</a>
								<a href="#" class="btn btn-theme-border wow fadeInUp" data-wow-delay="3.4s" data-wow-duration="2s">اطلب خدمة</a>
							</div>



						</div>
					</div>
				</div>
				<div class="item">
					<div class="div3">
						<div class=" wow zoomIn"  data-wow-delay="0.5s" data-wow-duration="2s">
							<img src="img/slider/garden4.png" alt="..." class="img_motor2">
						</div>
						<div class="carousel-caption wow fadeIn" data-wow-delay="0.5s">
							<h1 class="animate_word wow fadeInUp" data-wow-delay="1s" data-wow-duration="2s">
								<a href="" class="typewrite" data-period="2000" data-type='[ "اجعل بيتك قطعة من الجنة.", "هل تريد أن تكون فيلتك ذو واجهه رائعة.", "العين تريد أن تنظر للجمال  امتلك أفضل حديقة.", "اجعل بيتك منتعش من الخضرة , لدينا أفضل العمال فى خدمتك طوال الوقت ." ]'>
									<span class="wrap"></span>
								</a>
							</h1>
							<h3 class="animate_word wow fadeInDown"  data-wow-delay="1.5s" data-wow-duration="2s">
								<a href="" class="typewrite" data-period="2000" data-type='[ "لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات ." ]'>
									<span class="wrap"></span>
								</a>
							</h3>

							<ul class="list-unstyled">
								<li class="wow fadeInLeft" data-wow-delay="1.7s" data-wow-duration="2s"><a href="#"><img src="img/slider/slider3-icon1.png"></a></li>
								<li class="wow fadeInLeft" data-wow-delay="2s" data-wow-duration="2s"><a href="#"><img src="img/slider/slider3-icon2.png"></a></li>
								<li class="wow fadeInLeft" data-wow-delay="2.3s" data-wow-duration="2s"><a href="#"><img src="img/slider/slider3-icon3.png"></a></li>
								<li class="wow fadeInLeft" data-wow-delay="2.7s" data-wow-duration="2s"><a href="#"><img src="img/slider/slider3-icon4.png"></a></li>
							</ul>

							<div class="btns ">
								<a href="#" class="btn btn-theme wow fadeInUp" data-wow-delay="3s" data-wow-duration="2s">المزيد من الخدمات</a>
								<a href="#" class="btn btn-theme-border wow fadeInUp" data-wow-delay="3.4s" data-wow-duration="2s">اطلب خدمة</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#main_slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#main_slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


	</section>

	



	<section class="services" id="services">
		<div class="container-fluid">
			@foreach($services as $service)
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
				<div class="box">
					<img src="{{ $service->image }}" alt="{{$service->title}}">
					<div class="bottom">
						<h4>{{$service->title}}</h4>
						<p>{{ $service->content }} .</p>
					</div>
				</div>
			</div>
			@endforeach
			<!-- <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
				<div class="box">
					<img src="img/services/wwd-lawn-moving.png">
					<div class="bottom">
						<h4>تنجيل الحدائق</h4>
						<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s" data-wow-duration="1s">
				<div class="box">
					<img src="img/services/wwd-planting.png">
					<div class="bottom">
						<h4>زراعة النباتات</h4>
						<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s" data-wow-duration="1s">
				<div class="box">
					<img src="img/services/wwd-rubbish-removing.png">
					<div class="bottom">
						<h4>نظافة الحديقة </h4>
						<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
				<div class="box">
					<img src="img/services/wwd-snow-removal.png">
					<div class="bottom">
						<h4>تجريف الأرضيات</h4>
						<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
				<div class="box">
					<img src="img/services/wwd-watering-garden.png">
					<div class="bottom">
						<h4>الرش بالتنقيط</h4>
						<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s" data-wow-duration="1s">
				<div class="box">
					<img src="img/services/wwd-garden-care.png">
					<div class="bottom">
						<h4>إسم الخدمة المقدمة</h4>
						<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s" data-wow-duration="1s">
				<div class="box">
					<img src="img/services/wwd-lawn-moving.png">
					<div class="bottom">
						<h4>إسم الخدمة المقدمة</h4>
						<p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
					</div>
				</div>
			</div> -->

		</div>
	</section>

	<section class="about" id="order_service">
		<div class="container">
			<div class="col-md-6 col-sm-12 right wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
				<h1>{{ $about['title'] }}</h1>
				<h3>{{ $about['second_title'] }}</h3>
				<br>
				<img src="{{ $about['image'] }}">

				<p >{{ $about['details'] }} </p>
			</div>

			<div class="col-md-1"></div>

			<div class="col-md-5 col-sm-12 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">


				<div class="forma_order">
					<h3>أرسل طلب خدمة</h3>

					<form id="order" data-parsley-validate data-validate="parsley">
						<div class="form-group">
							<input type="text" name="" id="serName" placeholder="أدخل الإسم" class="form-control" data-parsley-trigger="change focusout" data-parsley-required=''>
						</div>
						<div class="form-group">
							<input type="text" name="" id="serPhone" placeholder="رقم الهاتف" class="form-control" data-parsley-trigger="change focusout" data-parsley-required=''>
						</div>
						<div class="form-group">
							<input type="text" name="" id="serAddress" placeholder="العنوان" class="form-control" data-parsley-trigger="change focusout" data-parsley-required=''>
						</div>
						<div class="form-group">
							<select class="form-control" id="serType" data-parsley-trigger="change focusout" data-parsley-required=''>
								<option>اختر</option>
								<option value="تنجيل الحدائق" selected="true">تنجيل الحدائق </option>
								<option value="زراعة النباتات">زراعة النباتات</option>
								<option value="الرى بالتنقيط">الرى بالتنقيط</option>
							</select>
						</div>
						<div class="form-group">
							<textarea class="form-control" id="serDetails" data-parsley-trigger="change focusout" data-parsley-required=''></textarea>
						</div>
						<div class="form-group text-center">

							<button type="submit" class="btn btn-theme-border " value="submit">اطلب خدمة</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</section>



	<section class="section wow fadeIn" id="products">
		<div class="container">
			<div class="section-title wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
				<i class="flaticon-shovel"></i>
				<h3>يمكنك شراء منتجاتنا</h3>
				<p class="lead">إليك بعض المنتجات المتاحة يمكنك معرفة أسعارها</p>
			</div>
			<div class="row text-center">
				<ul  id="myList">
					@foreach($products as $product)
					<li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro"  data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="{{ $product->image }}" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<br>
									<h4>{{ $product->title }}</h4>
									<!-- <h4>مميزات السلعة</h4> -->
									<!-- <ul>
										<li>العرض 30 سم</li>
										<li>الطول 30 سم</li>
										<li>الألوان المتوفرة: أحمر أخضر</li>
									</ul> -->
								</div>
							</div>
							<div class="shop-meta">
								<!-- <small><a href="shop-single.html">$21.00</a></small> -->
								<h4><a href="#">{{ $product->title }}</a></h4>
							</div>
						</div>
					</li>
					@endforeach
					<!-- <li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="img/products/shop_02.jpg" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="shop-meta">
								<small><a href="shop-single.html">$9.00</a></small>
								<h4><a href="shop-single.html">ألة رش</a></h4>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="img/products/shop_03.jpg" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="shop-meta">
								<small><a href="shop-single.html">$8.00</a></small>
								<h4><a href="shop-single.html">جاروف صغير</a></h4>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="img/products/shop_01.jpg" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<br>
									<h4>إسم السلعة</h4>
									<h4>مميزات السلعة</h4>
									<ul>
										<li>العرض 30 سم</li>
										<li>الطول 30 سم</li>
										<li>الألوان المتوفرة: أحمر أخضر</li>
									</ul>
								</div>
							</div>
							<div class="shop-meta">
								<small><a href="shop-single.html">$21.00</a></small>
								<h4><a href="shop-single.html">زهرية ورد</a></h4>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="img/products/shop_02.jpg" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="shop-meta">
								<small><a href="shop-single.html">$9.00</a></small>
								<h4><a href="shop-single.html">ألة رش</a></h4>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="img/products/shop_03.jpg" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="shop-meta">
								<small><a href="shop-single.html">$8.00</a></small>
								<h4><a href="shop-single.html">جاروف صغير</a></h4>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="img/products/shop_01.jpg" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html">
											<i class="fa fa-shopping-cart"></i>
										</a>
									</div>
									<br>
									<h4>إسم السلعة</h4>
									<h4>مميزات السلعة</h4>
									<ul>
										<li>العرض 30 سم</li>
										<li>الطول 30 سم</li>
										<li>الألوان المتوفرة: أحمر أخضر</li>
									</ul>
								</div>
							</div>
							<div class="shop-meta">
								<small><a href="shop-single.html">$21.00</a></small>
								<h4><a href="shop-single.html">زهرية ورد</a></h4>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="img/products/shop_02.jpg" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="shop-meta">
								<small><a href="shop-single.html">$9.00</a></small>
								<h4><a href="shop-single.html">ألة رش</a></h4>
							</div>
						</div>
					</li>
					<li class="col-md-4 col-sm-6 col-xs-12 wow fadeIn skew-pro" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="shop-wrapper">
							<div class="post-media entry">
								<img src="img/products/shop_03.jpg" alt="" class="img-responsive img-thumbnail">
								<div class="magnifier">
									<div class="buttons">
										<a class="st" rel="bookmark" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							<div class="shop-meta">
								<small><a href="shop-single.html">$8.00</a></small>
								<h4><a href="shop-single.html">جاروف صغير</a></h4>
							</div>
						</div>
					</li> -->
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-button text-center  wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
						<a class="btn btn-primary btn-lg" id="loadMore">مشاهدة المزيد <i class="fa fa-angle-left"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="bottom-section wow fadeIn" id="contact">
		<div class="container-fluid">
			<div class="col-lg-5 col-md-5 col-sm-8 col-xs-12  wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
				<h2>تواصل معنا</h2>
				<form id="mForm" data-parsley-validate data-validate="parsley">
					<div class="form-group col-sm-6">
						<input type="text" name="name" id="name" placeholder="اسمك" class="form-control" data-parsley-trigger="change focusout" data-parsley-required=''>
					</div>
					<div class="form-group col-sm-6">
						<input type="number" name="phone" id="phone" placeholder="رقم الهاتف" class="form-control" data-parsley-trigger="change focusout" data-parsley-required=''>
					</div>
					<div class="form-group col-sm-6">
						<input type="text" name="email" id="email" placeholder="البريد الإلكترونى" class="form-control" data-parsley-trigger="change focusout" data-parsley-required=''>
					</div>
					<div class="form-group col-sm-6">
						<textarea  placeholder="رسالتك" name="message" id="message" class="form-control" data-parsley-trigger="change focusout" data-parsley-required=''></textarea>
					</div>
					<div class="center"><button class="btn-contact" type="submit" value="submit" href="#">أرسل رسالتك</button></div>
				</form>
				
			</div>
			<div class="col-lg-7 col-md-7 col-sm-4 col-xs-12"></div>

		</div>
	</section>

	<div class="copyright wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1s">
		<div class="container-fluid">
			
			<div class="col-sm-6">

			</div>
			<div class="col-sm-6">
				<p>جميع الحقوق محفوظة © لدى جروب <a href="http://semicolonsoft.com/">أمازنج </a> .</p>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('js/jquery-1.10.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-arabic.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollspeed.js') }}"></script>

	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script src="{{URL::asset('js/parsley.min.js')}}"></script>
	<script>
		new WOW().init();
		$(function() {  
	    jQuery.scrollSpeed(70, 800);
	});
	</script>

	<script>
		$(document).ready(function () {
			$('#myList li.skew-pro').append('<div class="clearfix"></div>');
			size_li = $("#myList li.skew-pro").size();
			x=6;
			$('#myList li.skew-pro:lt('+x+')').show();
			$('#loadMore').click(function () {
				x= (x+6 <= size_li) ? x+6 : size_li;
				$('#myList li.skew-pro:lt('+x+')').show();

			});
			/*
			$('#showLess').click(function () {
				x=(x-4<0) ? 3 : x-4;
				$('#myList li').not(':lt('+x+')').hide();
			});
			*/
		});
	</script>
	<script type="text/javascript">
		$('#mForm').submit(function(event){
			event.preventDefault();
			$.ajax({
				"type": "POST",
				"url" : "{{ route('contact') }}",
				"data": {name: $("#name").val(), phone: $("#phone").val(), email: $("#email").val(), message: $("#message").val()},
				success:function(data){
					alert('تم استلام رسالتك و سيقوم فريق العمل بالرد عليك');
					location.reload();
				},
				error:function(data){
					console.log(data);
				}
			});
		});
	</script>
	<script type="text/javascript">
		$('#order').submit(function(event){
			event.preventDefault();
			$.ajax({
				"type": "POST",
				"url" : "{{ route('orderService') }}",
				"data": {name: $("#serName").val(), phone: $("#serPhone").val(), address: $("#serAddress").val(), service: $("#serType").val(), details: $("#serDetails").val()},
				success:function(data){
					alert('تم استلام طلبك و سيتم التواصل معك قريبا جدا.');
					location.reload();
				},
				error:function(data){
					console.log(data);
				}
			});
		});
	</script>
</body>
</html>
