<?php
$a=$_POST['date'];
$b=explode("-",$a);
$y=$b[0];
$d=$b[2];
$m=$b[1];
if( ($m!=4 || $m!=6 || $m!=9 || $m!=11)&& $m!=2 )
{
if($d<17)
{
$d=$d+14;
}
else
{
$d=15-(31-$d);
$m=$m+1;
if($m==13)
{
$m=1;
$y=$y+1;
}
}
}
else if($m==2)
{
if($d<16)
{
$d=$d+14;
}
else
{
$m=$m+1;
if($y%4!=0)
$d=14-(28-$d);
else
$d=14-(28-$d+1);
}
}
else
{
if($d<16)
{
$d=$d+14;
}
else
{
$d=15-(30-$d);
$m=$m+1;
}
}
echo "the last date of submission is ".$y."-".$m."-".$d."<br>";
$c=$_POST['date1'];
echo "the book submitted date is ".$c;
$f=explode("-",$c);
$y1=$f[0];
$d1=$f[2];
$m1=$f[1];
$arr=array(31,59,90,120,151,181,212,243,273,304,334,365);
if($y==$y1)
{
$x=$arr[$m-1]+$d;
$x1=$arr[$m1-1]+$d1;
$z2=$x1-$x+2;
echo "<br>the fine should pay is ".$z2."<br>";
echo "After removing holidays the stundent should pay is ";
$ax=$z2-$z2/7;
echo $ax;
echo "<br>after rounding the amount is ";
echo round($ax,0);
}
?>