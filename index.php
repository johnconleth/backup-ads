<?php
// USAGE: Copy your banner code into a html file. Use the filename (excluding extension) to display the specific advert
// EXAMPLE: http://yourwebsite.go/thisfolder/index.php?ad=yourad

if($adName = filter_input(INPUT_GET, 'ad', FILTER_SANITIZE_STRING)){
	$advert = str_ireplace('<a ','<a target="_blank" ',file_get_contents($adName.'.html'));
?>
<html>
<head>
<title></title>
</head>
<body>
<?=$advert;?>
</body>
</html>
<?php } ?>
