   <!-- connect.phpと接続 -->
   <?php 
    require_once("connect.php");
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
            $getusers_sql = "SELECT name FROM users";
            $users_data = $this->pdo->query($getusers_sql)->fetchall(PDO::FETCH_COLUMN);
            return $users_data;
        }

        public function getPassData()
        {
            $getusers_sqll = "SELECT password FROM users";
            $users_dataa = $this->pdo->query($getusers_sqll)->fetchall(PDO::FETCH_COLUMN);
            return $users_dataa;
        }
    
        /**
         * 記事情報の取得
         *
         * @param 
         * @return array $post_data 記事情報
         */
        
         //book一覧
        public function getbookData(){
            $getbook_sql = "SELECT * FROM books";
            $book_data = $this->pdo->query($getbook_sql)->fetchall(PDO::FETCH_ASSOC);
            return $book_data;
        }
    }
    