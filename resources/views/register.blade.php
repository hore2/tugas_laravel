<html>
<head>
   <title>Html Dasar</title>
</head>
  <body>
        
	<h4>Buat Accout Baru</h4>
	<p>Sign Up Form</p>
	<form action="./welcome" method="post">
		@csrf
		  <label for="fnama">First name:</label><br>
		  	<input type="text" id="fnama" name="fnama" value=""><br>
		  <label for="lnama">Last name:</label><br>
		  	<input type="text" id="lnama" name="lnama" value="">
	  		<p>Gender:</p>
	  	  <input type="radio" id="male" name="gender" value="male">
		  <label for="male">Male</label><br>
		  	<input type="radio" id="female" name="gender" value="female">
		  <label for="female">Female</label><br>
		  	<input type="radio" id="other" name="gender" value="other">
		  <label for="other">Other</label>
	  <p>Nationality:</p>
		  <select name="negara" id="negara">
		    <option value="Indonesian">Indonesian</option>
		    <option value="Singaporan">Singaporan</option>
		    <option value="Malaysian">Malaysian</option>
		    <option value="Australian">Australian</option>
	  	  </select>
	  <p>Language Spoken:</p>
		  	<input type="checkbox" id="bindo" name="bindo" value="bindo">
		  <label for="bindo"> Bahasa Indonesia</label><br>
		  	<input type="checkbox" id="English" name="English" value="English">
		  <label for="English"> English</label><br>
		  	<input type="checkbox" id="Other" name="Other" value="Boat">
		  <label for="Other"> Other</label>
	  <p>Bio:</p>
	  	  <textarea id="w3review" style="resize:none;width:300px;height:100px;"></textarea>
	  <br>
	  <br>
	  <input type="submit" value="Sign Up">
	</form> 
	
  </body>
</html>