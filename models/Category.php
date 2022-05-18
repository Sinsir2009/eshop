<?php

class Category
{

	public static function getCategoriesList()
	{
		$db = Db::getConnection();

		$categoryList = array();

		$sth = $db->prepare("SELECT id, name " . "FROM category ". "ORDER BY sort_order ASC");
		$sth->execute();
		//$result = $sth->fetch(PDO::FETCH_ASSOC);
		//$result->setFetchMode(PDO::FETCH_NUM);
		//$result->setFetchMode(PDO::FETCH_ASSOC);



		$i=0;
		while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			//print_r($row);
			$categoryList[$i]['id'] = $row['id'];
			$categoryList[$i]['name'] = $row['name'];
			$i++;
		}

		return $categoryList;
	}
}
