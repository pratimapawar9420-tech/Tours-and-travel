
<?php
session_start();
$c = mysqli_connect("localhost", "root", "", "purchase1");

if (mysqli_connect_error()) {
    echo "<script>
    alert('Cannot connect to database');
    window.location.href='booking.php';
    </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure the user is logged in before allowing purchase
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        
        // Check if the username from session matches the full name provided in the form
        if ($_SESSION['username'] !== $_POST['fullname']) {
            echo "<script>
            alert('Username does not match the logged-in user. Login first.');
            window.location.href='booking.php';
            </script>";
            exit();
        }

        // Proceed with order processing
        if (isset($_POST['submit'])) { 
            $order_date = date('Y-m-d H:i:s');
            $query1 = "INSERT INTO `order`(`fullname`, `email`, `phoneno`, `address`, `paymode`, `order_date`) VALUES (?, ?, ?, ?, ?, ?)";
            
            // Prepare and execute the first query for the order
            $stmt1 = mysqli_prepare($c, $query1);
            mysqli_stmt_bind_param($stmt1, "ssssss", $_POST['fullname'], $_POST['email'], $_POST['phoneno'], $_POST['address'], $_POST['paymode'], $order_date);
            
            if (mysqli_stmt_execute($stmt1)) {
                $order_id = mysqli_insert_id($c); // Get the last inserted order ID
                
                $query2 = "INSERT INTO `user_order1`(`order_id`, `product_name`, `price`, `quantity`) VALUES (?, ?, ?, ?)";
                $stmt2 = mysqli_prepare($c, $query2);
                
                if ($stmt2) {
                    mysqli_stmt_bind_param($stmt2, "isii", $order_id, $product_name, $price, $quantity);

                    foreach ($_SESSION['cart'] as $key => $value) {
                        $price = $value['price'];
                        $quantity = $value['quantity'];
                        $product_name = $value['product_name'];
                        // Execute the insertion for every product
                        mysqli_stmt_execute($stmt2);
                    }

                    // Clear the cart
                    unset($_SESSION['cart']);
                    echo "<script>
                    alert('Order placed successfully');
                    window.location.href='bill.php?order_id=$order_id'; // Redirect to bill.php with order ID
                    </script>";
                } else {
                    echo "<script>
                    alert('Error preparing user_order query');
                    window.location.href='booking.php';
                    </script>";
                }
            } else {
                echo "<script>
                alert('Error placing order');
                window.location.href='booking.php';
                </script>";
            }
        }
    } else {
        // If not logged in, redirect to login page
        echo "<script>
        alert('Please log in to make a purchase');
        window.location.href='login.php';
        </script>";
    }
}
?>

