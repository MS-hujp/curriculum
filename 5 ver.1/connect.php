   <!-- DATABASEと接続 -->
   <?php 
   //DB名
    define('DB_DATABASE', 'amazon');
   //MySQLのユーザー名
    define('DB_USERNAME', 'root');
   //MySQLのログインパスワード
    define('DB_PASSWORD', '');
    //DSNとは、プログラムからDBを参照する場合の名前
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

    /*
     * DBの接続設定をしたPDOインスタンスを返却する
     * @return object
     */
     function connect() {
     try {
        //   PDOインスタンスの作成
         $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
          // エラー処理方法の設定
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  echo "接続成功 by conncect.php";
         return $pdo;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
       }
    }

    ?>