		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-12">
							<div class="text-center color-elements">
							<h2>ارتباط با ما</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-8">
							<form class="inline" id="contactForm" method="post" >
								<div class="row">
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="text" name="first_name" class="form-control custom-labels" id="name" placeholder="نام کامل" required data-validation-required-message="Please write your name!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-6 height-contact-element">
										<div class="form-group">
											<input type="email" name="email" class="form-control custom-labels" id="email" placeholder="ایمیل" required data-validation-required-message="Please write your email!"/>
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-sm-12 height-contact-element">
										<div class="form-group">
											<input type="text" name="message" class="form-control custom-labels" id="message" placeholder="متن نظر" required data-validation-required-message="Please write a message!"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<input type="submit" class="btn btn-md btn-custom btn-noborder-radius" value="ارسال"/>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<button type="button" class="btn btn-md btn-noborder-radius btn-custom" name="reset">بازنشانی
											</button>
										</div>
									</div>
									<div class="col-sm-3 col-xs-6 height-contact-element">
										<div class="form-group">
											<div id="response_holder"></div>
										</div>
									</div>
									<div class="col-sm-12 contact-msg">
									<div id="success"></div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-5 col-md-3 col-lg-offset-1 col-md-offset-1">
							<div class="row">
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-map-marker"></i>
										<span class="text">آدرس دفتر مرکزی: مازندران-ساری-خیابان خیام-مجتمع تجاری خیام-بلوک ۲ غربی-طبقه اول-واحد ۱۰۶</span>
									</div>
								</div>
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-phone"></i>
										<span class="text">01133115979</span>
									 </div>
								 </div>
								<div class="col-md-12 height-contact-element">
									<div class="form-group">
										<i class="fa fa-2x fa-envelope"></i>
										<span class="text">info@saroobms.com</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="follow-us">
			<div class="container">
				<div class="text-center height-contact-element">
					<h2>ما را دنبال کنید</h2>
				</div>
				<img class="img-responsive displayed" src="/images/short.png" alt="short" />
				<div class="text-center height-contact-element">
					<ul class="list-unstyled list-inline list-social-icons">
						<li class="active"><a href="#"><i class="fa fa-facebook social-icons"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter social-icons"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus social-icons"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin social-icons"></i></a></li>
					</ul>
				</div>
			</div>
		</section>

		<footer id="footer">
			<div class="container">
				<div class="row myfooter">
					<div class="col-sm-6"><div class="pull-right">
					© Copyright Company <?= date("Y"); ?> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
					</div></div>
					<div class="col-sm-6">
						<div class="pull-left">Designed by <a href="http://www.atis.al">ATIS</a></div>
					</div>
				</div>
			</div>
		</footer>
