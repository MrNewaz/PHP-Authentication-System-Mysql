<?php 

session_start();
// session_destroy();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['add_to_cart'])){
        if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);

            $my_items = array_column($_SESSION['cart'],'item_name');

            if(in_array($_POST['item_name'],$my_items)){
               $index = array_search($_POST['item_name'],$my_items);

               $_SESSION['cart'][$index] = array(
                'item_name'=>$_POST['item_name'], 
                'item_price'=>$_POST['item_price'],
                'qty'=>$_SESSION['cart'][$index]['qty']+1,
               );

              print_r($_SESSION['cart']);

    
        
            }else{

                $_SESSION['cart'][$count] = array(
                    'item_name'=>$_POST['item_name'], 
                    'item_price'=>$_POST['item_price'],
                    'qty'=>1,
                   );
    
                   print_r($_SESSION['cart']);
            }



            // $item_array = array(
            //     'item_name' => $_POST['item_name']
            // );

        
        }else{

         $_SESSION['cart'][0] = array(
             'item_name'=>$_POST['item_name'], 
             'item_price'=>$_POST['item_price'],
             'qty'=>1,
            );

            print_r($_SESSION['cart']);
        }

    }
}

?>