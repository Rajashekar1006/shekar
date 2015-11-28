<html>
<head>

<title>Untitled Document</title>
</head>

<div style="background:#FFF;height:100px;margin:0px auto;overflow:hidden;">
<img src="imges/zoom.png"style="float:left;height:120px;width:230px;"/>


<h1 style="text-align:center;margin:0px;padding:28px;color:#088bd7;padding-right:295px;">Faculty Registration Form</h1>
</div>

<body style="background-color:#088bd7;margin:0px auto;width:100%;">


<div style="margin:0px auto;">
<div style="width:410px;margin:0px auto;padding:80px;background-color:#CCC;height:650px;border-radius:25px">

<form  action="facultyinsert.php" method="post" name="faculty" enctype="multipart/form-data">
<table style="margin:0px auto;">

<tr>
<td >Name of the Faculty:</td>
<td> <input type="text" name="facultyname" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Father's Name:</td>
<td> <input type="text" name="fathername" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Date Of Birth:</td>
<td><input type="date" name="dob" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><input type="date" name="doj"  style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/> </td>
</tr>

<tr>
<td >Gender:</td>
<td><input type="radio" name="gender" value="male" /> Male <input type="radio" name="gender" value="female"  /> Female </td>
</tr>

<tr>
<td >Email Id:</td>
<td><input type="text" name="email_id"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >UserName:</td>
<td><input type="text" name="username"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Password:</td>
<td><input type="password" name="password"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Department:</td>
<td >
<select name="department" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" >
<option value="select">select</option>
<option value="IT">IT</option>
<option value="ECE">ECE</option>
<option value="DIPLOMA">DIPLOMA</option>
<option value="CSE">CSE</option>
<option value="MECHANICAL">MECHANICAL</option>
</select>
</td>
</tr>

<tr>
<td >Designation:</td>
<td><input type="text" name="designation" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Qualification:</td>
<td><input type="text" name="qualification" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Pay Scale:</td>
<td><input type="text" name="pay_scale" style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Experience:</td>
<td><input type="text" name="expireance"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Address:</td>
<td><textarea name="address" rows="5" cols="21" style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;" >

</textarea></td>
</tr>

<tr>
<td>Faculty Photo:</td>
<td><input type="file" name="faculty_photo"  style="margin-bottom:5px; padding-bottom:10px; border-radius:5px;" /></td>
</tr>

<tr>
<td >Mobile Number:</td>
<td><input type="text" name="mobile_number"  style="width:164px; margin-bottom:5px; padding-bottom:10px; border-radius:5px;"/> </td>
</tr>


</table>

<table style="">
<tr>

<td colspan="2">
<input type="submit" name="submit" value="signup"/>
</td>
<td></td>
</tr>
</table>

</form>
</div>
</div>

</body>
</html>
