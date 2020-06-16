<?php
$link = mysqli_connect('localhost', 'server', 'serv', 'pig');
    if (!$link) {
          die("Connection failed: " . mysqli_connect_error());
    }
?>