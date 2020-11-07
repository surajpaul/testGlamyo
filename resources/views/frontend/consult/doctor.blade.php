<div id="hello1">
	General Surgan
</div>
<div id="hello2">
	Ortho
</div>

<form method="post" action="{{ route('consult.store') }}">
    @csrf
	<!-- speciality -->
	<input type="" id="speciality" name="speciality">
	<!-- radio for doctors -->
	<input type="radio" id="male" name="doctor" value="male">
	<label for="male">Male</label><br><br>
	<input type="radio" id="female" name="doctor" value="female">
	<label for="female">Female</label><br><br>
	<input type="radio" id="other" name="doctor" value="other">
	<label for="other">Other</label>
  <button type="submit">submit</button>
</form>



<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- custom -->
<script>
$(document).ready(function() {
  if(window.location.href.indexOf('#hello1') != -1) {
    $("#hello1").show();
    $("#hello2").hide();
    $("#speciality").val("hello 1");
  }
  if(window.location.href.indexOf('#hello2') != -1) {
    $("#hello1").hide();
    $("#hello2").show();
    $("#speciality").val("hello2");
  }
});

// instant submit while selecting
$('input[type=radio]').on('change', function() {
    $(this).closest("form").submit();
});
</script>