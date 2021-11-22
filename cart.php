<?php 

include 'partials/_cart.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cart Screen</title>
</head>
<body >
    <div class="container">
    <h1>Cart</h1>
    <br>
    <div class='row'>
        <div class='col-md-8'>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Item Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
            <?php 
                if(isset($_SESSION['cart'])){
                $total=0;
                  
                  foreach ($_SESSION['cart'] as $key => $value) {
                      $total=$total+($value['item_price'] *$value['qty']);
                     echo"
                     <tr>
                     <th scope='row'>1</th>
                     <td>$value[item_name]</td>
                     <td>$value[item_price]</td>
                     <td>$value[qty]</td>
                     <td><button type='button' class='btn btn-danger btn-sm'>Remove</button></td>
                     </tr>
                     ";
                     
                  }
                }
            ?>
               
                
              </tbody>
            </table>
        </div>
        
        <div class="col-md-4">
          <h1>Total: <?php echo $total ?></h1>  
          <button type='button' class='btn btn-info'>Checkout</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>