<?php
function toJson($id,$name,$price,$color1,$color2,$ongkir){
	$obj->itemId = $id;
	$obj->itemName = $name;
	$obj->price = $price;
	$obj->availableColorAndSize= array($color1=> $size = array('M','L','XL' ),$color2=>$size = array('L'));
	$obj->freeShiping=$ongkir;

	echo json_encode($obj);
}

toJson("12341822","FGX Flannel Shirt",195000,'blue-black','black-white',false)

?>