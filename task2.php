<?php
	if (!isset($_REQUEST['name']) and !isset($_REQUEST['lastname'])) {
?>
<form action="" method="GET">
	<br>Имя<br>
    <input type="text" name="name" placeholder="Введите имя"><br>
	<br>Фамилия<br>
    <input type="text" name="lastname" placeholder="Введите фамилию"><br>
	<br><input type="submit" name="submit">
</form>
<?php
	}
?>

<?php
	if (isset($_REQUEST['submit'])) {
		$name = strip_tags($_REQUEST['name']);
		$lastname = strip_tags($_REQUEST['lastname']);
		echo "Привет, $name $lastname.";
	}
?>