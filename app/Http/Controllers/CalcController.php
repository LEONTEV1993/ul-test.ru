<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
   public function calc() {
	   $string = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data_attempts.json");
	   $json = json_decode($string, true);
	   foreach($json as $items)
{

}

foreach($items as $item) {
  $idvzaezde = $item['id'];
  $resultchela = $item['result'];


}
$file =$_SERVER['DOCUMENT_ROOT']."/data_cars.json";
$json = json_decode(file_get_contents($file), true);
$maxresult = 0;
foreach($json as $peoples)
{
  foreach($peoples as $key => $people) {
    $idchela = $people['id'];
    $namechela = $people['name'];
    $citychela = $people['city'];
    $carchela = $people['car'];
	foreach($items as $current)
	{
		if($current['id'] == $idchela) 
		{
			$minresult = 0;
			if($current['result'] > 0 and $minresult<=$current['result']) {$minresult = $current['result'];}
			$peoples[$key]['result'] = $minresult;
			if($maxresult < $current['result']) {$maxresult = $current['result'];}
		}
	}
	
	

  }
}
$array_itogo = array();
$tekresult = 1;
$mesto = 1;
for($i = 1; $i<= $maxresult; $i ++) {
foreach ($peoples as $key => $people) {
	$idchela = $people['id'];
    $namechela = $people['name'];
    $citychela = $people['city'];
    $carchela = $people['car'];
	$resultchela = $people['result'];
	if($tekresult < $resultchela and $resultchela > 0) 
	{
		$tekresult ++;
	}
	if($tekresult >= $resultchela and $resultchela > 0)
		{
			$tekresult = $resultchela; $array_itogo[$mesto] = array('id'=>$people['id'],'name'=>$people['name'],'city'=>$people['city'],'car'=>$people['car'],'result'=>$people['result'],'mesto'=>$mesto);
			unset($peoples[$key]);
			$mesto ++;
		}
}
}

//print_r($array_itogo);
	   
	   //return view('calc');
	   return view('calc',['array_itogo'=>$array_itogo]);
   }
 
 
public function csv() {
	   $string = file_get_contents($_SERVER['DOCUMENT_ROOT']."/data_attempts.json");
	   $json = json_decode($string, true);
	   foreach($json as $items)
{

}

foreach($items as $item) {
  $idvzaezde = $item['id'];
  $resultchela = $item['result'];


}
$file =$_SERVER['DOCUMENT_ROOT']."/data_cars.json";
$json = json_decode(file_get_contents($file), true);
$maxresult = 0;
foreach($json as $peoples)
{
  foreach($peoples as $key => $people) {
    $idchela = $people['id'];
    $namechela = $people['name'];
    $citychela = $people['city'];
    $carchela = $people['car'];
	foreach($items as $current)
	{
		if($current['id'] == $idchela) 
		{
			$minresult = 0;
			if($current['result'] > 0 and $minresult<=$current['result']) {$minresult = $current['result'];}
			$peoples[$key]['result'] = $minresult;
			if($maxresult < $current['result']) {$maxresult = $current['result'];}
		}
	}
	
	

  }
}
$array_itogo = array();
$tekresult = 1;
$mesto = 1;
for($i = 1; $i<= $maxresult; $i ++) {
foreach ($peoples as $key => $people) {
	$idchela = $people['id'];
    $namechela = $people['name'];
    $citychela = $people['city'];
    $carchela = $people['car'];
	$resultchela = $people['result'];
	if($tekresult < $resultchela and $resultchela > 0) 
	{
		$tekresult ++;
	}
	if($tekresult >= $resultchela and $resultchela > 0)
		{
			$tekresult = $resultchela; $array_itogo[$mesto] = array('id'=>$people['id'],'name'=>$people['name'],'city'=>$people['city'],'car'=>$people['car'],'result'=>$people['result'],'mesto'=>$mesto);
			unset($peoples[$key]);
			$mesto ++;
		}
}
}

//print_r($array_itogo);
	   
	   //return view('calc');
	   return $array_itogo;
   }
}
