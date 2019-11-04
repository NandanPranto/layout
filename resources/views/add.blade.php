<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Validation</h2>
		<form method="post" action="{{ URL::to('store') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Name</label>
				<input type="text" value="{{ old('name') }}" class="form-control" name="name">

				@if($errors->first('name'))
					<div class="alert alert-danger">
						{{ $errors->first('name') }}	
					</div>
				@endif
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" value="{{ old('email') }}" class="form-control" name="email">

				@if($errors->first('email'))
					<div class="alert alert-danger">
						{{ $errors->first('email') }}	
					</div>
				@endif		
			</div>

			<div class="form-group">
				<label>New password</label>
			    <input type="password" class="form-control" name="password1" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
				@if($errors->get('password'))
					<div class="alert alert-danger">
						{{ $errors->get('password') }}	
					</div>
				@endif		
			</div>

			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" >	

				@if($errors->first('password'))
					<div class="alert alert-danger">
						{{ $errors->first('password') }}	
					</div>
				@endif		
			</div>

			<div class="form-group">
				<label>Date of birth</label>
				<input type="date" value="{{ old('birth_date') }}" class="form-control" name="birth_date">

				@if($errors->first('birth_date'))
					<div class="alert alert-danger">
						{{ $errors->first('birth_date') }}	
					</div>
				@endif			
			</div>

			<div class="form-group">
				<label>Salary</label>
				<input type="number" value="{{ old('salary') }}" class="form-control" name="salary">
				
				@if($errors->first('salary'))
					<div class="alert alert-danger">
						{{ $errors->first('salary') }}	
					</div>
				@endif			
			</div>

			<div class="form-group">
			
            	<input class="btn-btn-primary" type="submit" name="submit">	    
		
			</div>
		</form>
	</div>





<!--password validation----------------------------------------
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
---->
</body>
</html>
