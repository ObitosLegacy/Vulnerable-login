<?php
    $conn = mysqli_connect('localhost', 'root', '', 'loginTest') or die (mysqli_connect_error);

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT ID FROM members WHERE members.email='$email' AND members.pass='$pass'";

    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num !== 0) {
        header('location: ./fd3h2fr783209ry32rh3209r87g32frfhj923f03208hf.html');
    } else {
        header('location: ./index.html');
    }

    mysqli_close($conn);
?>