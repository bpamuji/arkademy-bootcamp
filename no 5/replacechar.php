<?php
function replaceTitle($title,$find,$replace)
{
	$replace_char = str_replace('i', 'o', $title);
	echo $replace_char;
}

$title = "presiden indonesia adalah Bpk H.Ir.Joko Widodo";
$find = "i";
$replace = 'o';
replaceTitle($title,$find,$replace)
?>