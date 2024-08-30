	<?php
		$state = ["Abia","Adamawa","Akwa Ibom","Anambra","Bauchi","Bayelsa","Benue","Borno","Cross River","Delta","Ebonyi","Edo","Ekiti","Enugu","Gombe","Imo","Jigawa","Kaduna","Kano","Katsina","Kogi","Kwara","Lagos","Nasarawa","Niger","Ogun","Ondo","Osun","Oyo","Plateau","Rivers","Sokoto","Taraba","Yobe","Zamfara"];
	?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="mbr-form form-with-styler">

	<div class="dragArea row">
	

	<div class="row">
		<div class="col-12">
			<div data-for="name" class="form-group">
				<input type="text" name="name" placeholder="Enter Fullname" data-form-field="name" class="form-control display-7" required="required" value="" id="name-form3-k"/>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6 col-12 col-lg-6">
				<div data-for="phone" class="form-group mb-3">
					<input type="text" name="phone" placeholder="Enter Phone number" data-form-field="phone" class="form-control display-7" required="required" value="" id="phone-form3-k">
				</div>
		</div>
		<div class="col-md-6 col-12 col-lg-6">
				<div data-for="email" class="form-group mb-3">
					<input type="email" name="email" placeholder="Enter valid email" data-form-field="email" class="form-control display-7" required="required" value="" id="email-form3-k">
				</div>
		</div>
	</div>
	
	<div class="row">
			<div class="col-12">
				<div data-for="school-name" class="form-group">
					<input type="text" name="school-name" placeholder="Enter school name" data-form-field="schname" class="form-control display-7" required="required" value="" id="schname-form3-k">
				</div>
			</div>
	</div>
	
	<div class="row">
		<div class="col-md-6 col-12 col-lg-6">
				<div class="form-group" data-for="location">
					<input type="text" name="location" placeholder="School Address" data-form-field="location" class="form-control display-7" required="required" value="" id="location-form3-k">
				</div>
		</div>
		<div class="col-md-6 col-12 col-lg-6">
				<div data-for="state" class="form-group" style="">
					<select name="state" data-form-field="state" class="form-control form-select display-7" required="required" id="select-form3-k">
						<option value="Select state/location">Select state/location</option>
						<?php
							foreach($state as $key){
								?>
								<option value="<?php echo $key;?>"><?php echo $key;?></option>
								<?php
							}
						?>
					</select>
				</div>
		</div>
	</div>
	

	<div class="row">
		<div class="col-12">
			<div class="form-group" data-for="role">
				<input type="text" name="role" placeholder="Role in school" data-form-field="role" class="form-control display-7" required="required" value="" id="role-form3-k">
			</div>
		</div>
	</div>
	
	<div class="row">
			<div class="col-md-6 col-12 col-lg-6">
				<div class="form-group" data-for="population">
					<select name="population" data-form-field="population" class="form-control form-select display-7" id="population-form3-k">
							<option value="Select population">Select population</option>
							<option value="<100">&lt;100</option>
							<option value="200-300">200-300</option>
							<option value="300-500">300-500</option>
							<option value="500-800">500-800</option>
							<option value=">800">&gt;800</option>
					</select>
				</div>
			</div>
			<div class="col-md-6 col-12 col-lg-6">
				<div class="form-group" data-for="how">
					<select name="how" data-form-field="how" class="form-control form-select display-7" id="how-form3-k">
						<option value="How did you hear about us?">How did you hear about us?</option>
						<option value="Referral">Referral</option>
						<option value="E-mail">E-mail</option>
						<option value="Social Media">Social Media</option>
						<option value="Magazine">Magazine</option>
						<option value="Fliers">Fliers</option>
						<option value="Sales Person">Sales Person</option>
						<option value="Website">Website</option>
						<option value="School">School</option>
						<option value="Others">Others</option>
					</select>
				</div>
			</div>
	</div>
	
	<input type="hidden" name="_token" value="<?php echo sha1(uniqid());?>"/>
	
	<input type="hidden" name="form_name" value="DPA Demo Application">
	
	<div class="col-md-auto col-12 mbr-section-btn"><button type="submit" class="w-100 w-100 btn btn-warning display-4">Submit Request</button></div>
	
	</div>
</form>

<?php
	
	if(isset($_POST["_token"]) && !empty("_token")){
		
		$formName = "DPA Demo Application";
		$recipientEmail = "info@distinctionpro.com";
		$subject = "DPA Demo Application Request";
		
		if(pushWork($formName, $recipientEmail, $subject) == "1"){
			
			alertus("Application sent successfully! We will get intouch.");
			
		}
		
		if(pushWork($formName, $recipientEmail, $subject) == "0"){
			
			alertus("Application was not sent!. Kindly contact admin");
			
		}
	}
?>