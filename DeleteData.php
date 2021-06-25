<!DOCTYPE html>
<html>
<body>

<h1>INSERT DATA TO DATABASE</h1>

<?php
ini_set('display_errors', 1);
echo "Insert database!";
?>

<?php


if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=dc093vuc6gjaav', 'ubniakvyleptee', '237d8b8b0a1597a3f29b43a35aa8b02b413148386f81c7210be32fe2baaf259e');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-34-195-143-54.compute-1.amazonaws.com;port=5432;user=ubniakvyleptee;password=237d8b8b0a1597a3f29b43a35aa8b02b413148386f81c7210be32fe2baaf259e;dbname=dc093vuc6gjaav",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

$sql = "DELETE FROM student WHERE stuid = 'SV02'";
$stmt = $pdo->prepare($sql);
if($stmt->execute() == TRUE){
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: ";
}

?>
</body>
</html>