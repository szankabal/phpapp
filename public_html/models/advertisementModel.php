<?php
class AdvertisementModel
{
	protected $database;
	
	public function __construct(PDO $database)
	{
		$this->database = $database;
	}

	public function getAdvertisementData() {
	return $this->database->query('select advertisements.userid, users.name, advertisements.title from users  INNER JOIN advertisements ON users.id = advertisements.id;');
	}
}
?>
