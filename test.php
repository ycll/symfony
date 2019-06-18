<?php
$con = mysqli_connect("127.0.0.1", "root", "123456");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

var_dump($con);

//docker run --rm --name some-wordpress -d -e WORDPRESS_DB_HOST=118.24.255.103:3306 -e WORDPRESS_DB_USER=root -e WORDPRESS_DB_PASSWORD=123456 -e WORDPRESS_DB_NAME=wordpress -p 80:80 wordpress
