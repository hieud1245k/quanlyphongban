<?php
	$arr = array(1,2,3,4);
	foreach($arr as $value) {
		$value *= 2;
	}
	print_r($arr);
	echo '<br><br>';
?>
<?php
$a="I am learning PHP on  Itelvn.net .";
echo " ECHO:";
echo "
";
echo $a;
echo "
";
echo " PHP is easy to learn. ";
echo "
";
echo "$a PHP is easy to lean.";
echo "
";
print " PRINT: ";
print "
";
print $a;
print "
";
print " PHP is easy to learn. ";
print "
";
print "$a PHP is easy to lean.";?>
<?php
	echo '<br><br>';
   $a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
   print_r ($a);?>
 <?php
 echo '<br><br>';	
$str = 'Itelvn.net';
echo "The length of Itelvn.net is: ";
echo strlen($str); //10echo "";$str = ' Itelvn .net ';
echo "The length of ( Itelvn .net ) is: ";
echo strlen($str);
?>



<?php
echo '<br><br>';
$a=10;
$b=0;
$c=@($a/$b);
echo "Gia tri b = ".$c;
?>

<?php
echo '<br><br>';
function testing()
{ echo "Testing function";
echo 1;
echo 2;
echo 3;
} //end testing
testing(); testing(); testing();
?>
<?php
echo '<br><br>';
$a="xin chao cac ban va tat ca cac ban than men";
$vitri= strpos($a,"chao");
$chuoi= str_replace("ban","em",$a);
$chuoi2=substr_replace($chuoi,"ban ",13,3);
echo "chuoi : ".$chuoi."<br>";
echo "chuoi 2 ".$chuoi2."<br>";
?>

<?php $a = 1; //biến toàn cục
//hàm do tự tạo
echo '<br><br>';

function test()
{ //từ khoá global báo cho php biết là bên test
//bây giờ ta sẽ dùng biến toàn cục
global $a;
echo $a; //in ra giá trị: 1
} //end test
test();
?>
<?php
$a=2;
print $a;
?>