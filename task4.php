<?php
	if (!isset($_REQUEST['name']) and !isset($_REQUEST['lastname'])) {
?>
<form action="form.php" method="POST" name="forma">
    <label for="first_name"><br>Имя<br>
    <input type="text" name="first_name" placeholder="Введите имя"><br>
	<label for="last_name"><br>Фамилия<br>
    <input type="text" name="last_name" placeholder="Введите фамилию"><br>
	<br><input type="submit" name="submit">
</form>
<?php
	}
?>


