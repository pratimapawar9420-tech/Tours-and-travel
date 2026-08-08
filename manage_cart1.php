<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'place_name');
            if (in_array($_POST['place_name'], $myitems)) {
                echo "<script> 
                alert('Item already added');
                window.location.href='index.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('place_name' => $_POST['place_name'], 'price' => $_POST['price']);
                echo "<script> 
                alert('Item added');
                window.location.href='index.php';
                </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('place_name' => $_POST['place_name'], 'price' => $_POST['price']);
            echo "<script> 
            alert('Item added');
            window.location.href='index.php';
            </script>";
        }
    }
    if (isset($_POST['remove_item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['place_name'] == $_POST['place_name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                alert('Item Removed');
                window.location.href='mybooking.php';
                </script>";
            }
        }
    }
}
?>
