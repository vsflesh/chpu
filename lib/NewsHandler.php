<?php

class NewsHandler {

    protected $dbConnection;
    protected $tableName = 'news';

    public function __construct() {
        $this->dbConnection = mysqli_connect("localhost", 'root', '', 'chpu_site');
    }

    public function getAllNews() {
        //TODO
        $query = 'select * from ' . $this->tableName;
        $queryResult = $this->dbConnection->query($query);
        if ($queryResult) {
            $allNews = $queryResult->fetch_all(MYSQLI_ASSOC);
            return $allNews;
        }
        return 'all news';
    }

    public function getNewsItem($itemID) {
       $query = 'select * from ' . $this->tableName.' where id='.$itemID;
        $queryResult = $this->dbConnection->query($query);
        if ($queryResult) {
            $newsItem = $queryResult->fetch_array(MYSQLI_ASSOC);
            return $newsItem;
        }
        return 'news with id ' . $itemID;
    }

}
