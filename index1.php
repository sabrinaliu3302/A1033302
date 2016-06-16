<?php

class PostOffice{
	
	function mailFiler(){
		$file = fopen("string.txt", "r");
		//輸出文本中所有的行，直到文件結束為止。
		while(! feof($file)){
			echo fgets($file). "<br />"; //當讀出文件一行後，就在後面加上 <br> 讓html知道要換行
		}
		fclose($file);
	}



	function mailRegex(){
		$file = fopen("string.txt", "r");
		$contents = "";
		while (!feof($file)) {
			$contents = fgets($file)."<br>";
			if(preg_match($file,"^[A-Za-z0-9]+$")){
				echo $contents;
			}
		}
		fclose($file);	
	}



	function spiltroad(){
		$file = fopen("road.txt", "r");
		$contents = "";
		while (!feof($file)) {
			$contents = fgets($file)."<br>";
			if(preg_match($file,"^[A-Za-z0-9]+$")){
				echo $contents;
			}
		}
		fclose($file);
	}






?>