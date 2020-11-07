<form method="post" action="">
    @csrf
	<!-- radio for doctors -->
	<input type="" name="speciality" value="{{$speciality}}" placeholder="Enter speciality"><br>
	<input type="" name="doctor" value="{{$doctor}}" placeholder="Enter doctor"><br>
	<input type="text" name="customer_name" placeholder="Enter Name"><br>
	<input type="text" name="customer_city" placeholder="Enter your city"><br>
	<input type="tel" name="customer_phone" placeholder="Enter phone"><br>
  <button type="submit">submit</button>
</form>