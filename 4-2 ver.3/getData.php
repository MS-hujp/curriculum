<?php
require_once("pdo.php");

class getData{

    public $pdo;
    public $data;

    //コンストラクタ
    function __construct()  {
        $this->pdo = connect();
    }

    /**
     * ユーザ情報の取得
     * @param 
     * @return array $users_data ユーザ情報
     */
    // userdataを取得する関数
     public function getUserData()
    {
        $getusers_sql = "SELECT * FROM users limit 1";
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        return $users_data;
    }

    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    
     //postを取得して順番に並べる関数
    public function getPostData(){
        $getposts_sql = "SELECT * FROM posts ORDER BY id desc";
        $post_data = $this->pdo->query($getposts_sql)->fetchall(PDO::FETCH_ASSOC);
        return $post_data;
    }
}