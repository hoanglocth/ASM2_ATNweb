<?php
$host_heroku = "ec2-34-195-143-54.compute-1.amazonaws.com";
$db_heroku = "dc093vuc6gjaav";
$user_heroku = "ubniakvyleptee";
$pw_heroku = "237d8b8b0a1597a3f29b43a35aa8b02b413148386f81c7210be32fe2baaf259e";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);

if (!$pg_heroku) {
    die('Error: Could not connect: ' . pg_last_error());
}
?>