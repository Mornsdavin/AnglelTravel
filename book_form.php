<?php
    if($_SERVER['REQUEST_METHOD']== 'POST'&& isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['location']) && isset($_POST['guests']) && isset($_POST['arrival']) && isset($_POST['leaving'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrival = $_POST['arrival'];
        $leaving = $_POST['leaving'];

        $sql = " insert into book_form(name, email, phone, address, location, guests, arrival, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrival','$leaving')";

        $query = mysqli_query($connection, $sql);
        
        if($query){
            echo 'Enter Successfull';
        }
        else{
            echo 'Error 404! something went wrong try again';
        }

        header('location:book.html');
    }
} 
?>