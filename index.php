<?php
// Start the session
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="php/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


<table>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";


//foreach (filter_list() as $id) {
//    echo '<tr><td>' . $id . '</td><td>' . filter_id($id) . '</td></tr>';
//}

$int = 2;
$ip = "127.0.1.1";
echo filter_var($int, FILTER_VALIDATE_INT);
echo filter_var($ip, FILTER_VALIDATE_IP);

print_r($_SESSION);

?>
</table>

</body>
</html>
