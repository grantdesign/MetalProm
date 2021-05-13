<!--information-starts-->
<div class="information">
	<div class="container">
		<div class="infor-top">
			<div class="col-md-3 infor-left">
				<h3>Follow Us</h3>
				<ul>
					<li><a href="https://ru-ru.facebook.com/" target="_blank"><span class="fb"></span><h6>Facebook</h6></a></li>
					<li><a href="https://twitter.com/" target="_blank"><span class="twit"></span><h6>Twitter</h6></a></li>
					<li><a href="https://accounts.google.com/" target="_blank"><span class="google"></span><h6>Google+</h6></a></li>
				</ul>
			</div>
			<div class="col-md-3 infor-left">
				<h3>Information</h3>
				<ul>
					<li><a href="#"><p>Specials</p></a></li>
					<li><a href="#"><p>New Products</p></a></li>
					<li><a href="#"><p>Our Stores</p></a></li>
					<li><a href="#"><p>Contact Us</p></a></li>
					<li><a href="#"><p>Top Sellers</p></a></li>
				</ul>
			</div>
			<div class="col-md-3 infor-left">
				<h3>My Account</h3>
				<ul>
					<li><a href="#"><p>My Account</p></a></li>
					<li><a href="#"><p>My Credit slips</p></a></li>
					<li><a href="#"><p>My Merchandise returns</p></a></li>
					<li><a href="#"><p>My Personal info</p></a></li>
					<li><a href="#"><p>My Addresses</p></a></li>
				</ul>
			</div>
			<div class="col-md-3 infor-left">
				<h3>Company Information</h3>
				<h4>Ярославская область,
					<span>г. Ярославль, ул. Кирова, 10</span></h4>
				<h5>+7 (800) 555-35-35</h5>
				<p><a href="mailto:metalprom@mail.ru">metalprom@mail.ru</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 footer-left">
				<form action="{{ route('subscribes.store') }}" method="post">
					@csrf
					<input type="text" name="email" placeholder="Ваш Email" required>
					<input type="submit" value="Подписаться">
				</form>
			</div>
			<div class="col-md-6 footer-right">					
				<p>© {{ date('Y') }} Metal Prom. All Rights Reserved | Design by  <a href="https://vk.com/thegrant" target="_blank">Grant</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--footer-end-->