<?php
class Order
{  
   
   function __construct(){
   }
   
   function create($email_id,$status,$updatedate,$createdate,$name,$price,$quantity){
	   this.email_is = $email_id;
	   this.status = $status;
	   this.updatedate = $updatedate;
	   this.createdate = $createdate;
	   this.name = $name;
	   this.price = $ price;
	   this.quantity = $qunatity;
   }
   
   function update(){
   }
   
   function today_order(){
   	$date = date("Y-m-d:h:i:s");
   }
   
   function delete(){
   }
   
   function index(){
   }
 }
?>