<?php
if (!isset($_COOKIE['kunci'])){
	setcookie("kunci", rand(10,100), time()+3*30*24*3600,"/");
}
echo "Hallo, nama saya Mr. PHP.</p>";
echo " Saya telah memilih secara random sebuah bilangan bulat. Silahkan Anda menebak ya!";

if (isset($_POST['tebak'])){
	if($_POST['tebakan']==$_COOKIE['kunci']){
		echo "Selamat ya... Anda benar, saya telah memilih bilangan ".$_COOKIE['kunci']."<br>";
		setcookie('kunci',null,-1,'/');
		echo "<a href='TebakAngka.php'>Ulangi permainan</a>";
	}elseif ($_POST['tebakan']> $_COOKIE['kunci']){
		include('formTA.html');
		echo "Waaah... masih salah ya, bilangan tebakan Anda terlalu tinggi";
	}elseif ($_POST['tebakan']> $_COOKIE['kunci']){
		include('formTA.html');
		echo "Waaah... masih salah ya, bilangan tebakan Anda terlalu rendah";
	}else {
		include('formTA.html');
	}
	}else {
		include('formTA.html');
}
?>