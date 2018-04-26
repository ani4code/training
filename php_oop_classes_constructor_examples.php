<!DOCTYPE html>
<html>
<body>

<?php

class Books {
	//data members or member variables
	
		private  $title;
	private  $price;
	
	
	
 function __construct($parm1,$parm2){
		$this->title=$parm1;
		$this->price=$parm2;
		
	} 
	

	
	//member functions
	function setTitle($par){
		$this->title=$par;
	}
	
	function getTitle(){
		echo $this->title;
		return  $this->title;
	}
	
	function setPrice($par){
		$this->price=$par;
	}
	
	function getPrice(){
		echo $this->price;
		return $this->price;
	}
	
}

$history= new Books();
$chemistry= new Books();
$math= new Books();


$history->setTitle("World War 2");
$history->setPrice(100);
$history->getTitle();
echo "<br>";
$history->getPrice();
echo "<br>";

$chemistry->setTitle("biochemistry");
$chemistry->setPrice(120);
$chemistry->getTitle();
echo "<br>";
$chemistry->getPrice();
echo "<br>";

$math->setTitle("calculus");
$math->setPrice(150);
$math->getTitle();
echo "<br>";
$math->getPrice();
echo "<br>";

/* $physics=new Books("particle physics",120);
$physics->getTitle();
echo "<br>";
$physics->getPrice();
echo "<br>"; */

print_r($_SERVER);

?>

</body>
</html>