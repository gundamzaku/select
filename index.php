<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>中午吃什么</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<style> 
	li{ display:inline}
	ul{ height: 30px}
</style> 

</script>
</head>
<body class="keBody">
<h1 class="keTitle">中午吃什么</h1>
<form method="post" action="eat.php">
<div class="kePublic">
<?php 
for($i=1;$i<=9;$i++){
?>
<ul>
	<li>菜单<?=$i?></li>
	<li><input type="text" name="menu[]"></li>
</ul>
<?php 
}
?>
<ul>
	<li><input type="submit" value="提交"></li>
	<li><input type="submit" value="测试"></li>
</ul>
</form>
</div>

</body>
</html>