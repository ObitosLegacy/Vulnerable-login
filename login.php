<?php
    $conn = mysqli_connect('localhost', 'virtualarity_com_Virtualarity', 'Virtualarity2a....Db', 'virtualarity_com_Virtualarity') or die (mysqli_connect_error);

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT id FROM vulnerableLogin WHERE email='$email' AND pas='$pass'";

    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num > 0) {
        header('location: ./fd3h2fr783209ry32rh3209r87g32frfhj923f03208hf.html');
    } else {
        header('location: ./index.php');
    }

    mysqli_close($conn);
?>