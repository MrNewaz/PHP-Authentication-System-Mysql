<?php

include 'partials/_cart.php';
include 'partials/_db_test.php';
$sql = 'SELECT * FROM `products`';
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>
<?php require 'partials/_nav.php'; ?>

<div class="container py-4" >
    <div class='row'>

<?php if ($num > 0) {
  while ($row = mysqli_fetch_array($result)) {
    echo "
        <div class='col-md-4'>
         <form  method='post' >
            <div class='card' style='width: 18rem;'>
            <img src='https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260' class='card-img-top' alt='img'>
            <div class='card-body'>
                <h5 class='card-title'>$row[title]</h5>
                <p class='card-text'>$row[price]tk</p>
                <button type='submit'
                name='add_to_cart'
                class='btn btn-info'>Add to cart</button>
                <input type='hidden' name='item_name' value=$row[title]>
                <input type='hidden' name='item_price' value=$row[price]>
            </div>
            </div>
         </form>
        </div>
        
        ";
  }
} ?>




</div>
</div>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>


