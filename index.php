<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
  var lname=document.reg.ln.value;
   var session=document.reg.session.value;
    var rn=document.reg.rn.value;
    var branch=document.reg.branch.value;
     var year=document.reg.year.value;
      var semester=document.reg.semester.value;
       var mm=document.reg.mm.value;
        var dd=document.reg.dd.value;
         var yy=document.reg.yy.value;
          var address=document.reg.address.value;

if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.ln.focus();
    return false;

 }
 if(session=='')
  {
    window.alert("Please Select Session!");
    document.reg.session.focus();
    return false;

 }
 if(rn=='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false;

 }
 if(branch=='')
  {
    window.alert("Please Select Branch!");
    document.reg.branch.focus();
    return false;

 }
 if(year=='')
  {
    window.alert("Please Select Year!");
    document.reg.year.focus();
    return false;

 }
 if(semester=='')
  {
    window.alert("Please Select Semester!");
    document.reg.semester.focus();
    return false;

 }
 if(dd=='')
  {
    window.alert("Please Select Day!");
    document.reg.dd.focus();
    return false;

 }
 if(mm=='')
  {
    window.alert("Please Select Month!");
    document.reg.mm.focus();
    return false;

 }
 if(yy=='')
  {
    window.alert("Please Select Year!");
    document.reg.yy.focus();
    return false;

 }
 if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
    return false;

 }


}


</script>
<title>Books</title>
</head>

<body>
<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<center><table border="5" bgcolor="pink"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="index.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>

	<tr>
		<td>FIRST NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<tr>
		<td>LAST NAME:</td>
		<td><input type="text" name="ln" /></td>
	</tr>
<tr>
		<td>SESSION:</td>    
 <td>
<select name="session">
<option >Select Session</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
 </td>
</tr>
	<tr>
		<td>ROLL NO:</td>
		<td><input type="text" name="rn" ></td>
	</tr>
	<tr>
		<td>BRANCH</td>
<td>
<select name="branch">
<option >select branch</option>
<option value="CSE">CSE</option>
<option value="ET&T">ET&T</option>
<option value="CIVIL">CIVIL</option>
<option value="MECHNICAL">MECHNICAL</option>
<option value="EEE">EEE</option>
</select>
</td>
</tr>

<tr>
		<td>YEAR:</td>
<td>
<select name="year">
<option >select year</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD </option>
<option value="FOURTH">FOURTH</option>
</select>
</td></tr>

<tr>
		<td>SEMESTER:</td>
<td>
<select name="semester">
<option >select semester</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD</option>
<option value="FOURTH">FOURTH</option>
<option value="FIFTH">FIFTH</option>
<option value="SIX">SIX</option>
<option value="SEVENTH">SEVENTH</option>
<option value="EIGHT">EIGHT</option>
</select>
</td>
</tr>

<tr>
<td>Date Of Birth(DD-MM-YYYY)</td>
<td><select name="dd">
<option> select day </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>

</select>
<select name="mm">
<option> select mounth </option>
<option value="jan">JAN</option>
<option value="feb">FEB</option>
<option value="mar">MAR</option>
<option value="apr">APR</option>
<option value="may">MAY</option>
<option value="jun">JUN</option>
<option value="jul">JUL</option>
<option value="aug">AUG</option>
<option value="sep">SEP</option>
<option value="oct">OCT</option>
<option value="nov">NOV</option>
<option value="dec">DEC</option>
</select>
<select name="yy">
<option>select year</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
</select>
</td>
</tr>


<tr>
		<td>ADDRESS:</td>
		<td><input type="text" name="address" /></td>
	</tr>

		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="ADD" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';
if(isset($_POST['fn']) && isset($_POST['ln'])&& isset($_POST['session'])&& isset($_POST['rn'])&& isset($_POST['branch'])&& isset($_POST['year'])&& isset($_POST['semester'])&& isset($_POST['dd'])&& isset($_POST['mm'])&& isset($_POST['yy'])&& isset($_POST['address']))
{
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$session=$_POST['session'];
$rn=$_POST['rn'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$semester=$_POST['semester'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$address=$_POST['address'];
$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=strtoupper($address);
}
if(isset($_POST['submit']))
 {

 $q1=mysql_query("insert into bhup values('$cap1','$cap2','$session','$rn','$branch','$year','$semester','$dd $mm $yy','$cap3')");
if($q1)
{
 echo"Record Successfully Add";
}
else
{

echo"Not Add Your Record" ;
}
 }
?>