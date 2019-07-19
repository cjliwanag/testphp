<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#0f3e82">
	<meta name="description" content="Coindrop salary loan">
	<meta name="author" content="Ayannah">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'KayaCredit') }}</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
	<!-- autonumeric -->
</head>

<body>

	<nav class="navbar light-color">
		<div class="container text-left">
			<a class="navbar-brand" href="#">
				<img src="/images/logo4.png" height="45" alt="kayacredit logo" style="margin-left: -50px">
			</a>
		</div>
	</nav>

	<div id="app" class="container label-font-weight" style="margin-bottom: 3rem;">
		<!-- MultiStep Form -->
		<div class="row">
			<div class="col">
				<div id="msform">
					<!-- progressbar -->
					<ul id="progressbar">
						<li class="active">Offers</li>
						<!-- <li>Loan Offers</li> -->
						<li>Verify</li>
					</ul>
					<!-- fieldsets -->
					<fieldset class="card">
						<h2 class="fs-title">Loan Amount</h2>
						<h3 class="fs-subtitle">Hi :First Name, please enter your desired loan amount</h3>

						<div class="row justify-content-md-center">
							<div class="col col-md-9">

								<form id="loanAmountForm" action="/" method="POST" align="left">
									{{ csrf_field() }}
									<div class="md-form group">
										<input type="text" id="loanAmount" class="form-control form-control-lg" min="500" max="15000" required="" contenteditable="true" value="500">
										<label for="loanAmount" class="">Loan Amount</label>
										<small id="" class="form-text text-muted text-left">
											Minimum: 500, Maximum: 15,000
										</small>

									</div>
								</form>

								<div class="form-group text-right">
									<!-- <button type="submit" name="next" form="loanAmountForm" class="btn btn-primary waves-effect waves-light action-button next">Next</button> -->
								</div>
							</div>
						</div>

						<h2 class="fs-title">Loan Offers</h2>
						<h3 class="fs-subtitle">Please select your desired loan offer</h3>

						<div class="row justify-content-md-center">
							<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
								<!-- Card -->
								<div class="card">
									<div class="view overlay">
										<!-- <img class="card-img-top" src="/images/cimb/cimblogo.jpg" alt="Card image cap"> -->
										<a href="#!">
											<div class="mask rgba-white-slight"></div>
										</a>
										<div class="col-md-12" style="height: 130px; background: url(/images/cimb/cimblogo.jpg) no-repeat center;">
										</div>
										<hr class="mr-4 ml-4">
									</div>

									<div class="card-body text-left">
										<!-- <h4 class="card-title">Card title</h4> -->
										<p class="card-text"><label>Product Name : </label> Good Lending - Salary Loan</p>
										<p class="card-text"><label>Interest Rate : </label> 4%</p>
										<p class="card-text"><label>Monthly Amortization : </label> 15,000</p>
										<div class="text-center">
											<a href="#" class="btn btn-primary next">Select</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
								<!-- Card -->
								<div class="card">
									<div class="view overlay">
										<!-- <img class="card-img-top" src="/images/cimb/cimblogo.jpg" alt="Card image cap"> -->
										<a href="#!">
											<div class="mask rgba-white-slight"></div>
										</a>
										<div class="col-md-12" style="height: 130px; background: url(/images/cimb/cimblogo.jpg) no-repeat center;">
										</div>
										<hr class="mr-4 ml-4">
									</div>

									<div class="card-body text-left">
										<!-- <h4 class="card-title">Card title</h4> -->
										<p class="card-text"><label>Product Name : </label> Good Lending - Salary Loan</p>
										<p class="card-text"><label>Interest Rate : </label> 4%</p>
										<p class="card-text"><label>Monthly Amortization : </label> 15,000</p>
										<div class="text-center">
											<a href="#" class="btn btn-primary next">Select</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset class="card">
						<h2 class="fs-title">Verify information</h2>
						<h3 class="fs-subtitle">Please verify and submit your application</h3>

						<div class="row">
							<div class="col-md-6">
								<form>
									{{ csrf_field() }}
									<div class="md-form">
										<input type="text" id="name" class="form-control" required value="Sample" disabled>
										<label for="name" class="">Name</label>
									</div>
									<div class="md-form">
										<input type="text" id="birthdate" class="form-control" required value="Sample" disabled>
										<label for="birthdate" class="">Birthdate</label>
									</div>
									<div class="md-form">
										<input type="text" id="mobileNumber" class="form-control" required value="Sample" disabled>
										<label for="mobileNumber" class="">Mobile Number</label>
									</div>
									<div class="md-form">
										<input type="text" id="secondaryNumber" class="form-control" required value="Sample" disabled>
										<label for="secondaryNumber" class="">Secondary Number</label>
									</div>
									<div class="md-form">
										<textarea class="form-control md-textarea" id="textarea" placeholder="" required disabled>Sample</textarea>
										<label for="textarea">Address</label>
									</div>
								</form>
							</div>

							<div class="col-md-6">

								<div class="card">

									<div class="card-body text-left">
										<h4 class="mb-4">Loan Summary</h4>
										<p class="card-text"><label>Product Name : </label> Good Lending - Salary Loan</p>
										<p class="card-text"><label>Interest Rate : </label> 4%</p>
										<p class="card-text"><label>Monthly Amortization : </label> 15,000</p>
										<p class="card-text"><label>No. Of Payments : </label> 6</p>

										<div class="custom-control custom-checkbox mb-4">
											<input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
											<label class="custom-control-label" for="defaultLoginFormRemember">I have verified the information</label>
										</div>

										<div class="text-center">
											<a href="#" id="submitApplication" class="btn btn-primary submit">Submit Application</a>
										</div>
									</div>
								</div>

							</div>
							<div class="col-md-12 text-left">
								<input type="button" name="previous" class="btn waves-effect waves-light previous my-4" value="Previous"/>
							</div>
						</div>

					</fieldset>
				</div>

			</div>
		</div>
		<!-- /.MultiStep Form -->
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small orange pt-1">
		<!-- Copyright -->
		<div class="footer-copyright text-center unique-color-dark py-3">© All rights reserved. Powered by Ayannah 2019</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->


	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>


	<!-- Stepper -->
	<!-- <script type="text/javascript" src="/js/stepper.js"></script> -->
	<!-- <link href="/css/stepper.css" rel="stylesheet"> -->

	<script>

		$('body').css('background','url(/images/background/back_3.png) no-repeat fixed center bottom');

		function spinner(id) {
			$('#'+id).html('<i id="spinner" class="fa fa-spinner fa-spin"></i>').css('pointer-events','none').blur()
		}

		$('input[type=submit]').wrap('<a href="/coindrop-offer-page/verify/?empId=asd&appId=sad"></a>')

		//setup before functions
		var typingTimer;                //timer identifier
		var doneTypingInterval = 300;  //time in ms, 5 second for example
		var $input = $('#loanAmounts');

		//on keyup, start the countdown
		$input.on('keyup', function () {
			clearTimeout(typingTimer);
			typingTimer = setTimeout(doneTyping, doneTypingInterval);
		});

		//on keydown, clear the countdown 
		$input.on('keydown', function () {
			clearTimeout(typingTimer);
		});

		//user is "finished typing," do something
		function doneTyping () {
			$('#monthlyAmortization').val($input.val() * 10)
		}

	</script>


	<script type="text/javascript">

		var minLoanAmount = 500,
		maxLoanAmount = 15000;

		$(document).ready(function() {
			$('#loanAmount').focus();

			$('#loanAmount').blur(function(){
				// $(this).val(500);
				// console.log($(this).val());
				// if ($(this).val() < minLoanAmount) {
				// }
			});

			anElement = new AutoNumeric('#loanAmount', {
				minimumValue: 500,
				maximumValue: 15000,
				emptyInputBehavior:'min',
				overrideMinMaxLimits: "ceiling",
			});
			// $('#loanAmount').val(minLoanAmount);


		})

		$('#loanAmountForm').submit(function(e){
			e.preventDefault();
			var values = $(this).serialize();
			var ajaxRequest = $.post("/coindrop-offer-page/loan/", values, function(data, status) {
				alert(status);
			})
			.fail(function() {
				alert("error");
			})
			.always(function() {
				alert("success");
			});
		})


		$('#submitApplication').click(function(){
			console.log($(this));
			$(this).attr('disabled');
		})
	</script>


	<style type="text/css">

		.label-font-weight label, .label-font-weight label.active {
			font-weight: 700;
			color: #333;
		}
		.thumbnail {
			transition: 0.3s
		}

		.thumbnail-description {
			min-height: 40px;
		}

		.thumbnail:hover {
			cursor: pointer;
			box-shadow: 0 8px 16px 0 rgba(85, 85, 85);
			margin-top: -5px;
		}

		input[type="number"]::-webkit-inner-spin-button,
		input[type="number"]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}
		.form-control[readonly] {
			background-color: #eeeeee !important 
		}
	</style>

</body>
</html>