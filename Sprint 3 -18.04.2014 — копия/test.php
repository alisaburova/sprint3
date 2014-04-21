<?php

    include('database.php'); 
    $con=start_connection();
    $categories = select_all($con, '', 'category');  


?>
<html>
<head>
<title>ajax</title>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
           // alert("document loaded");
            $("#category").change(function(){               
                var state = $("#category").val();
                $.ajax({
                    type:"post",
                    url:"second_dropdown.php",
                    data:"category="+category,
                    success: function(data) {
                       alert(data);
                        $("#good").html(data);
                    }
                });
            });
        });

</script>


</head>
<body>

<h1>Get Notes:</h1>
<br/>
<form action="delete_item.php" method="post">

Category: <select id="category" name="category">
    <option>--Select category--</option>
    <?php
    foreach($categories as $category){
        echo "<option>
        $category->name
        </option>";
    }
    ?>
    </select>
<br/>

Item: <select id="good" name="good">
<option>--Select Item--</option>
</select>
<br/>
<input type="submit" value="Search" />
</form> 


</body>
</html>
   

