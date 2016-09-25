<?php 

/**
* @param Book Name
* @return Book price
*/
function get_price($bookName)
{
	$books = array('java'=>55,'c'=>88,'php'=>99);
	foreach($books as $book=>$price){
	  if($book == $bookName){
	  	return $price;
	  	break;
	  }
	}
}


?>