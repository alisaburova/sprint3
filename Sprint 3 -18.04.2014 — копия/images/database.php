<?php
$con = start_connection();
select_all($con,'','items');

   function start_connection(){
        $con=mysqli_connect("www17.subdomain.com","user2649510","qwerty123","db2649510-main") ;
       //$con=mysqli_connect("localhost","root","","db2649510-main") ;
        if (!$con) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            else{
               return $con;
            }
    };

    function select_all($con, $type, $table){ 
      if ($type==''){
         $query = "SELECT * FROM ".$table.";";
         $result = $con->query($query);
        if (!$result) {
            printf("Query failed: %s\n", $mysqli->error);
            exit;
            }
         else{
            if($table=='items'){
               while($row = $result->fetch_row()) { 
                    $item = new Goods();        
		    $item->name = $row[1]; 					 
                    $item->price = $row[2]; 
		    $item->photo = $row[4];	
		    $item->description = $row[5];
                     $items[] = $item;                               
                              
               }
			 
               $result->close();
               $con->close();
               return $items;
            }
            if ($table=='category'){	       
               while($row = $result->fetch_row()) {   
		    $category = new Categories();
		    $category ->name = $row[0];
                    $category ->photo = $row[1];
		    $categories[] = $category;
                           
               }         
               $result->close();
               $con->close();
               return $categories;
            }
            else{
               echo 'check table name in seelctAll method!';
               return null;
            }
         }
      }
      if($type!=''){
         $query = "SELECT * FROM ".$table." WHERE Category='".$type."';";        
         $result = $con->query($query);
         if (!$result) {
            printf("Query failed: %s\n", $mysqli->error);
            exit;
            }
         else{
            while($row = $result->fetch_row()) {               
		    $item = new Goods();
		    $item->name = $row[1]; 					 
		    $item->price = $row[2]; 
		    $item->photo = $row[4];	
		    $item->description = $row[5];
		    $items[] = $item;             
               }	     
               $result->close();
               $con->close();
               return $items;
         }
         
      }
    }
    class Goods {
        public $name, $price, $description, $photo, $type;        
    }
    class Categories {
        public $name, $photo;
    }
?>