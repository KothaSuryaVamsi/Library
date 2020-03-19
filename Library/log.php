<?php
function show()
{
	global $connect,$uname;
	$sel="select fname,lname,date,mail,phone,uid from registeration";
	$res=mysql_query($sel,$connect);
	$rows=mysql_num_rows($res);
	$arr=array("First Name","Last Name","Date of Birth","Email","Phone Number");
	echo "<table cellspacing=5 cellpadding=10 border=2>";
	for($i=0;$i<$rows;$i++)
	{
		$a=mysql_fetch_array($res);
		if($a[5]==$uname){
			echo "<br><br><font color=green><h1>DashBoard</h1></font><br>";
		for($j=0;$j<mysql_num_fields($res)-1;$j++)
		{
			echo "<tr>";
			echo "<td><b> ".$arr[$j]." </b></td>";
			echo "<td> ".$a[$j]." </td>";
			echo "</tr>";

		}
	break;
	}
	}
	$sel="select bookname,idate from books where uid='$uname'";
	$res=mysql_query($sel,$connect);
	$rows=mysql_num_rows($res);
	echo "<table border=2 ><th>Book Name</th><th>Issued Date</th>";
	for($i=0;$i<$rows;$i++)
	{
		$a=mysql_fetch_array($res);
		echo "<tr>";
		for($j=0;$j<mysql_num_fields($res);$j++)
		{
			echo "<td> ".$a[$j]." </td>";
		}
			echo "</tr>";
	}
	echo "</table><tr></tr>";
	echo "<form action='profile.html'><input type='submit' value='Edit Profile' name='edit' action='profile.html' onclick='profile.html'></form></table>";
	echo "<form action='search.php' method='post'>
	<table>
		<tr>
			<td>Enter name of the author or book or title</td>
			<td><input type='text' name='box'></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' name='search' value='Search' onclick='search.php'></td></tr>
			<tr><td><a href='submisiion.html'>Last Date of Submission</a></td>
		</tr><tr><td><a href='comp.html'>Fine of Received Books</a></td></tr>
	</table>
</form>";
}
$connect=mysql_connect("localhost","root","");
$uname=$_POST['username'];
$pass=$_POST['pass'];
mysql_select_db('library',$connect);
$k=0;
$query="select uid,pass from registeration";
$result=mysql_query($query,$connect);
$num_rows=mysql_num_rows($result);
for($i=0;$i<$num_rows;$i++)
{
	$row=mysql_fetch_array($result);
	for($j=0;$j<mysql_num_fields($result);$j++)
	{if($uname==$row[0]&&$pass==$row[1])
	{
		show();
		$k=1;break;
	}}
	if($k==1)
		break;
	}
	if($k==0)
		echo "incorrect password";
//echo $rows;
mysql_close($connect);
?>