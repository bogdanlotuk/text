<form action="/mailer.php" method="POST" autocomplete="off" class="contact_form || validate_form">
	<div class="modal_title"><?=(isset($modal_title) ? $modal_title : 'Contact Us Today')?></div>
	
	<?php if(isset($locationInput) && !empty($locationInput)):?>
		<input name="location_url" type="hidden" value="<?= $locationInput?>" >
	<?php endif;?>
	
	<div class="row_f">
		<div class="col_6">
			<label>
				<input name="name" type="text" class="input || validate" placeholder="Your Name" autocomplete="off">
			</label>
			
			<label>
				<input name="email" type="text" class="input || validate_email" placeholder="Your Email" autocomplete="off">
			</label>
			
			<label>
				<input name="phone" type="text" class="input || phone_us || validate_tel" placeholder="Your Phone" autocomplete="off">
			</label>
			
			<label>
				<input name="city" type="text" class="input || validate" placeholder="City" autocomplete="off">
			</label>
			
			<label>
				<input name="a" type="text" placeholder="Answer: <?= $firstCaptchaNumber ?>+<?= $secondCaptchaNumber ?> = ?" class="input || validate_cap" autocomplete="off">
			</label>
		</div>
		<div class="col_6">
			<label>
				<textarea name="message" class="input || validate" placeholder="Your Message" autocomplete="off"></textarea>
			</label>
		</div>
		<div class="col_12 || tc">
			<button type="submit" class="button || black_2">Submit</button>
		</div>
	</div>
</form>