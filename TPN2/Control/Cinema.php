<?php
class Cinema
{
public function arrayAHtml($col) {
	/* $str = ""; */
	foreach ($col as $key => $value ) {
		$str[] = "<span class='texto-titulo'>{$key}: </span><span class='texto-descripcion'>{$value}</span></br>";
	}
	return $str;
}
}
