<?php 

 //What is website?
  // Response will be in Html
  // Access by humans via browsers
//What is web service?
  // Access by Programs like mobile apps
  //Resposne will be in json or xml
 
	//header("Content-Type:application/json");

	require 'functions.php';

	if(!empty($_GET['name'])){
		$price = get_price($_GET['name']);
		if(empty($price))
			response(200,'Book not found',null);
		else
		    response(200,'Book found',$price);
	}
	else{
		response(400,'Invalid Request',null);
	}

  	

  	function response($status,$status_message,$data){
  		  //header("HTTP 1.1/ $status $status_message");
  		  $response['status'] = $status;
  		  $response['status_message'] = $status_message;
  		  $response['data'] = $data;
  		  $json = json_encode($response);
  		  echo $json;
  	}
?>