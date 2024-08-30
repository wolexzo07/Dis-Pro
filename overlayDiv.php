<style>
	.record-result , .website-read , .finance-read , .mobile-read , .l-read , .pp-read{
		display:none;
		top:2%;
		left:2%;
		bottom:2%;
		right:2%;
		position:fixed;
		height:;
		opacity:1;
		background-color:white;
		z-index:5000;
		border:9px solid #60bea9;
		overflow:auto;
	} 
	
	.ft-rw {font-size:10pt;}
	.ft-icon{font-size:30pt;padding-top:10pt;padding-bottom:0pt;}
</style>

<div class="record-result">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
					<i class="fa fa-remove pull-right record-result-close" style="margin-top:10px;"></i>
			</div>
			
			<div class="col-12 text-center">
					<p class="ft-icon"><span class="mbr-iconfont mbrib-bookmark "></span></p>
					<h2 class="mb-4">RECORDS & RESULT PACKAGE</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12">
				<??>
				<table class="table table-striped ft-rw">
					<?php 
						$list = ["Online Admission","Student Data Management","Parent Data System","Human Resource Management","Custom Data Print","Class & Subject Management","Assignment Management","Assessment Management","Extra & Remark Result System","Result Grading & Compilation","Behaviour & Result Summary","Broadsheet Overview","Transcript Overview","SMS/Email System"];
						
						foreach($list as $key){
							?>
							<tr>
								<td><?php echo $key?></td>
							</tr>
							<?php
						}
						
					?>
					
				</table>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<img src="screen/1.png"/>
			</div>
		</div>
	</div>
</div>


<div class="website-read">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
					<i class="fa fa-remove pull-right website-read-close" style="margin-top:10px;"></i>
			</div>
			
			<div class="col-12 text-center">
					<p class="ft-icon"><span class="mbr-iconfont mbrib-globe-2"></span></p>
					<h2 class="mb-4">WEBSITE MANAGEMENT PACKAGE</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12">
				<??>
				<table class="table table-striped ft-rw">
					<?php 
						$list = ["Website Management","Development and Design of Website","SEO and Google Optimization","Server and Domain Management","News & Event Management"];
						
						foreach($list as $key){
							?>
							<tr>
								<td><?php echo $key?></td>
							</tr>
							<?php
						}
						
					?>
					
				</table>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<img src="screen/2.png"/>
			</div>
		</div>
	</div>
</div>



<div class="finance-read">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
					<i class="fa fa-remove pull-right finance-read-close" style="margin-top:10px;"></i>
			</div>
			
			<div class="col-12 text-center">
					<p class="ft-icon"><span class="mbr-iconfont mbrib-cash"></span></p>
					<h2 class="mb-4">STORE & FINANCIAL PACKAGE</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12">
				<??>
				<table class="table table-striped ft-rw">
					<?php 
						$list = ["Stock input and monitoring","Payment Gateway Integration","Student Billing & Invoice System","Staff Payroll","Extra-Ledger (Pettycash) Management","Custom Account Print","Account Statistics","Account Reports"];
						
						foreach($list as $key){
							?>
							<tr>
								<td><?php echo $key?></td>
							</tr>
							<?php
						}
						
					?>
					
				</table>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<img src="screen/3.png"/>
			</div>
		</div>
	</div>
</div>


<div class="mobile-read">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
					<i class="fa fa-remove pull-right mobile-read-close" style="margin-top:10px;"></i>
			</div>
			
			<div class="col-12 text-center">
					<p class="ft-icon"><span class="mbr-iconfont mbrib-mobile"></span></p>
					<h2 class="mb-4">CUSTOMIZED MOBILE APP ON STORES</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12">
				<??>
				<table class="table table-striped ft-rw">
					<?php 
						$list = ["Customize School App on Playstore/App Store","Annoucement System","Class Stories","Mailing System for Parents","Facebook Feed Integration","Multiple User Login","Games Integration"];
						
						foreach($list as $key){
							?>
							<tr>
								<td><?php echo $key?></td>
							</tr>
							<?php
						}
						
					?>
					
				</table>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<img src="screen/4.png"/>
			</div>
		</div>
	</div>
</div>


<div class="l-read">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
					<i class="fa fa-remove pull-right l-read-close" style="margin-top:10px;"></i>
			</div>
			
			<div class="col-12 text-center">
					<p class="ft-icon"><span class="mbr-iconfont mbrib-database"></span></p>
					<h2 class="mb-4">E-LEARNING MANAGEMENT</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12">
				<??>
				<table class="table table-striped ft-rw">
					<?php 
						$list = ["Topic Discussion","Class Activities / Assignment","Assessent Upload","Online CBT","Online Entrance Exams","E-Library (Unlimited Materials)","Virtual Classroom"];
						
						foreach($list as $key){
							?>
							<tr>
								<td><?php echo $key?></td>
							</tr>
							<?php
						}
						
					?>
					
				</table>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<img src="screen/5.png"/>
			</div>
		</div>
	</div>
</div>


<div class="pp-read">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
					<i class="fa fa-remove pull-right pp-read-close" style="margin-top:10px;"></i>
			</div>
			
			<div class="col-12 text-center">
					<p class="ft-icon"><span class="mbr-iconfont mbrib-gift"></span></p>
					<h2 class="mb-4">PREMIUM PACKAGE</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12">
				<??>
				<table class="table table-striped ft-rw">
					<?php 
						$list = ["Hostel Management","Library Management","Transport Tracking System","Timetable system","Reminder system","Receptionist Call Center","Customize Portal Request","API Integration"];
						
						foreach($list as $key){
							?>
							<tr>
								<td><?php echo $key?></td>
							</tr>
							<?php
						}
						
					?>
					
				</table>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<img src="screen/6.jpg"/>
			</div>
		</div>
	</div>
</div>








