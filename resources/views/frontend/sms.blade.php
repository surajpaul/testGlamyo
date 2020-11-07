<form method="post" action="{{ route('sms.store') }}">
    @csrf
	<table>
	<tr>
	<td>Name :</td>
	<td><input type="text" name="pt_name" placeholder="Enter Name"></td>
	</tr>
	<tr>
	<td>City :</td>
	<td><input type="text" name="pt_city" placeholder="Enter Email"></td>
	</tr>
	<tr>
	<td>Contact No :</td>
	<td><input type="text" name="pt_contact" placeholder="Contact No"></td>
	</tr>
	<td>
	 <button type="submit"  name="submit">Submit</button>
	</td>
	</tr>
	</table>
</form>