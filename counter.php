<<html>
<head>
	<title>test</title>
</head>
<body>
<?php
if(!@$f=fopen("num.txt","r")){
	echo "文件不存在!";
	$num=0;
}else{
	$num=fgets($f,10); //获得9
	fclose($f);
}
$num++;
$ff = fopen("num.txt","w");
fwrite($ff,$num);
fclose($ff);

$numarr=str_split($num);
foreach($numarr as $v){

echo "<img src='img/".$v.".jpg' >";

};

?>

</body>
</html>