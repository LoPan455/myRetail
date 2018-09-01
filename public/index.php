<?php
require_once ('../vendor/autoload.php');

use MyRetail\MyClass;

$myClass = new MyClass();
$title = $myClass->getTitle();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to <?php echo $title?></title>
</head>
<body>
<h1>PHP Info for <?php echo $title?> </h1>
<?php echo phpinfo()?>
</body>
</html>