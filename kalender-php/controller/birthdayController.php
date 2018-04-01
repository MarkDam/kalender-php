<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	$birthdays = getAllBirthdays();

	render("birthday/index", array(
		'birthdays' => $birthdays)
	);
}

function create()
{
	render("birthday/create");
}

function createSave()
{
	if (createBirthday()) {
		header("location:" . URL . "birthday/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_db");
		exit();
	}
}

function read($id)
{
	$birthday = getBirthday($id);

	render("birthday/read", array(
		"birthday" => $birthday
	));
}

function edit($id)
{
	$birthday = getBirthday($id);

	render("birthday/edit", array(
		"birthday" => $birthday
	));
}

function editSave($id)
{
	if (editBirthday($id)) {
		header("location:" . URL . "birthday/index");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}

function delete($id)
{
	if (deleteBirthday($id)) {
		header("location:" . URL . "birthday/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();
	}
}
