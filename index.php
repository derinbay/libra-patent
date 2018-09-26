<?php
include 'header.php';
?>

        <!--================Home Banner Area =================-->
        <section class="home_banner_area t-banner">
            <div class="banner_inner d-flex align-items-center t-banner">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h3>FİKRİ VE SINAİ HAKLARINIZ İÇİN ÇÖZÜM ORTAĞINIZ...</h3>
						<a class="org_btn" href="iletisim.php">Sorularınız için</a>
						<a class="green_btn" href="#">Ücretsiz Marka Araştırması</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Offer Area =================-->
        <section class="offer_area p_120">
        	<div class="container">
				<div class="offer_title homepage-text">
					<h3>Biz Kimiz?</h3>
					<p>LİBRA PATENT, fikri ve sınai haklar alanında 17 yılı aşkın deneyimiyle çözüm ortağı olduğu tüm müvekkillerine, müvekkilin gerçek ihtiyaçlarına ve hedeflerine yönelik butik hizmeti sunmayı amaçlamaktadır.</p>
				</div>
        		<div class="offer_title homepage-text">
        			<h3>Önerilerimiz</h3>
        			<p>İyi bir tasarımcı olabilirsiniz. Ancak siz “dünyayı kurtaracak” -ve belki de sizi bir anda zengin ya da popüler bir insana dönüştürebilecek- muhteşem fikrinizi bulmaya çalışırken odaklanabileceğiniz, sık tekrarlandığı için bireysel ya da sosyal yaşam kalitenizi azaltan birçok problem tespit edebileceğinizden eminim. Hatta neredeyse her gün böyle saptamalar yaptığınızdan hiç kuşkum yok. Markete uğrayıp sıra beklememek ve yük taşımamak için markete telefonla sipariş verdiğimiz, tasarruf edebileceğimiz 5 dakikanın bile hesabını yaptığımız bir çağda yaşadığımız hepimiz için ortak bir gerçek.</p>
        		</div>
        		<div class="row offer_inner">
        			<div class="col-lg-4">
        				<div class="offer_item">
        					<img class="img-fluid" src="img/offer/offer-1.png" alt="">
        					<div class="offer_text">
        						<h4>Neden Marka Başvurusu yapmalıyız?</h4>
        						<p>It is a good idea to think of your PC as an office. It stores files, programs, pictures. This can be compared to an actual.</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="offer_item">
        					<img class="img-fluid" src="img/offer/offer-2.jpg" alt="">
        					<div class="offer_text">
        						<h4>Fikri ve Sınai Haklarımızı nasıl koruruz?</h4>
        						<p>It is a good idea to think of your PC as an office. It stores files, programs, pictures.</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="offer_item">
        					<img class="img-fluid" src="img/offer/offer-3.jpg" alt="">
        					<div class="offer_text">
        						<h4>Hukuki haklarımız nelerdir?</h4>
        						<p>It is a good idea to think of your PC as an office. It stores files, programs, pictures. This can be compared to an actual.</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Offer Area =================-->
        
        <!--================Home Contact Area =================-->
        <section class="home_contact_area">
			<div class="left_img">
				<img src="img/left-img.jpg" alt="">
			</div>
			<div class="h_right_form">
				<div class="h_form_inner">
					<h4>Sorularınız için</h4>
					<form class="row home_contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="form-group col-md-12">
							<input type="text" class="form-control" id="name" name="name" placeholder="Ad Soyad">
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="Telefon">
						</div>
						<div class="form-group col-md-6">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email adresi">
						</div>
						<div class="form-group col-md-12">
							<textarea class="form-control" name="message" id="message" rows="1" placeholder="Mesajınız"></textarea>
						</div>
						<div class="form-group col-md-12">
							<button type="submit" value="submit" class="btn submit_btn form-control">Gönder</button>
						</div>
					</form>
				</div>
			</div>
        </section>
        <!--================End Home Contact Area =================-->

<?php
include 'footer.php'
?>