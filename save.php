
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ذخیره اطلاعات</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "google_keep";

$firstname = $_POST['name_1'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
$sql = "INSERT INTO keep(name) VALUES ('$firstname')" ;
if ($conn->query($sql) == true) {
   echo "اطلاعات دریافتی شما با موفقیت ثبت شد !";
} else { 
    echo "خطا مشکلی پیش آمده است !";
}


?>
</body>
</html>