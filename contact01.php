<?php
//まず01から完成させる
//todo
//DBにお問い合わせデータ登録
//メールを内藤さん、ダレさん、そらさんに届くように設定

// 送信確認
// var_dump($_POST);
// exit();

include('functions.php');
// ここでDB接続処理を実行する
$pdo = connect_to_db();

// 項目入力のチェック
// 値が存在しないor空で送信されてきた場合はNGにする
if (
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['email']) || $_POST['email'] ==
    '' ||
    !isset($_POST['content']) || $_POST['content'] == ''
) {
    // 項目が入力されていない場合はここでエラーを出力し，以降の処理を中止する
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

// 受け取ったデータを変数に入れる
$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

// データ登録SQL作成
// `created_at`と`updated_at`には実行時の`sysdate()`関数を用いて実行時の日時を入力する
$sql = 'INSERT INTO contact(id, name, email, content, created_at) VALUES(NULL, :name, :email, :content, sysdate())';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    //・・入力ページファイルに移動
    header("Location:index.php");
    exit();
}








$request_datetime = date("Y年m月d日 H時i分s秒");


$mailto = $request_param['email'];
$to = "soramikuu72@gmail.com";
$mailfrom = "soramikuu72@gmail.com";
$subject = "お問い合わせ、ありがとうございます。";

$content = "";
$content .= $request_param['name'] . "様\r\n";
$content .= "お問い合わせ、ありがとうございます。\r\n";
$content .= "=================================\r\n";
$content .= "お名前　 　　　　　　" . htmlspecialchars($request_param['name']) . "\r\n";
$content .= "メールアドレス　 　　" . htmlspecialchars($request_param['email']) . "\r\n";
$content .= "お問い合わせ内容　 　" . htmlspecialchars($request_param['content']) . "\r\n";
$content .= "お問い合わせ日時　 　" . $request_datetime . "\r\n";
$content .= "=================================\r\n";

//管理者確認用メール
$subject2 = "お問い合わせがありました。";
$content2 = "";
$content2 .= "お問い合わせがありました。\r\n";
$content2 .= "=================================\r\n";
$content2 .= "お名前　 　　　　　" . htmlspecialchars($request_param['name']) . "\r\n";
$content2 .= "メールアドレス　 　" . htmlspecialchars($request_param['email']) . "\r\n";
$content2 .= "お問い合わせ内容　 " . htmlspecialchars($request_param['content']) . "\r\n";
$content2 .= "お問い合わせ日時   " . $request_datetime . "\r\n";
$content2 .= "=================================" . "\r\n";

mb_language("ja");
mb_internal_encoding("UTF-8");
//mail 送信
if ($request_param['token'] === '1234567') {
    if (mb_send_mail($to, $subject2, $content2, $mailfrom)) {
        mb_send_mail($mailto, $subject, $content, $mailfrom);
?>
        <script>
            window.location = "thanks.php";
        </script>
<?php
    } else {
        header('Content-Type: text/html; charset=UTF-8');
        echo "メールの送信に失敗しました";
    };
} else {
    echo "メールの送信に失敗しました（トークンエラー）";
}

?>
