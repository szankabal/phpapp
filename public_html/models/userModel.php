<?php
class UserModel
{
	protected $database;

	public function __construct(PDO $database)
	{
		$this->database = $database;
	}

	public function getUserData() {
	return $this->database->query('SELECT name FROM users');
	}
}
?>
