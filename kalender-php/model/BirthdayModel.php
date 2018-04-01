<?php

function getAllBirthdays()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `birthday` ORDER BY `birthday_month` ASC, `birthday_year` ASC, `birthday_day` ASC";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getBirthday($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthday WHERE birthday_id = :id LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return $query->fetch();
}

function createBirthday()
{
	$name = $_POST['name'];
	$day = $_POST['day'];
	$month = $_POST['month'];
  $year = $_POST['year'];

	if ($name === '' || $day === '' || $month === '' || $year === '') {
		return false;
	}

  $db = openDatabaseConnection();

	$sql = "INSERT INTO birthday (birthday_name, birthday_day, birthday_month, birthday_year) VALUES (:name, :day, :month, :year)";

	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":day" => $day,
		":month" => $month,
    ":year" => $year
	));

  $db = null;

	return true;
}

function deleteBirthday($id)
{
	if ($id === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthday WHERE birthday_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return true;
}

function editBirthday($id=null)
{
	$name = isset($_POST["name"]) ? $_POST["name"] : null;
	$day = isset($_POST["day"]) ? $_POST["day"] : null;
	$month = isset($_POST["month"]) ? $_POST["month"] : null;
  $year = isset($_POST["year"]) ? $_POST["year"] : null;

	if ($id === null || $name === null || $day === null || $month === null || $year === null) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE birthday
			SET birthday_name = :name, birthday_day = :day, birthday_month = :month, birthday_year = :year
			WHERE birthday_id = :id";

	$query = $db->prepare($sql);

	$query->execute(array(
		":id" => $id,
		":name" => $name,
		":day" => $day,
		":month" => $month,
    ":year" => $year
	));

	$db = null;

	return true;
}
