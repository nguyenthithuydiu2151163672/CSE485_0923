<?php
require_once(APP_ROOT . "/app/model/post.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class PostService
{
    public function getCountPost()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM baihat";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount();
        }
    }
    public function getAllPost()
    {

        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM baihat";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $postArr = [];
            if ($stmt->rowCount() > 0) {
                foreach ($stmt->fetchAll() as $row) {
                    $post = new Post($row["id"], $row["tenbaihat"], $row["casi"], $row["idtheloai"]);
                    $postArr[] = $post;
                }
            }
            return $postArr;
        }
    }
}
