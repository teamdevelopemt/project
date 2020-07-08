<?php
//まず01から完成させる
//todo
//①DBにお問い合わせデータ登録
//②メールを内藤さん、ダレさん、そらさんに届くように設定

session_start();
//送信確認
// var_dump($_SESSION);
// exit();

include('functions.php');
//DB接続処理を実行
$pdo = connect_to_db();


// // 受け取ったデータを変数に入れる
// $name = $_POST['name'];
// $kana = $_POST['kana'];
// $child_name = $_POST['child_name'];
// $child_kana = $_POST['child_kana'];
// $organization = $_POST['organization'];
// // $grade = $_POST['grade'];
// $reason = $_POST['reason'];
// $email = $_POST['email'];
// $email_cf = $_POST['email_cf'];
// $email_cf = $_POST['phone'];
// $contact = $_POST['contact'];
// $date01 = $_POST['date01'];
// $date02 = $_POST['date02'];
// $content = $_POST['content'];

// //ラジオボタン用
// if (isset($_POST["grade"])) {
//     $grade = $_POST["grade"];
// }



// データ登録SQL作成
$sql = 'INSERT INTO contact(id, name, kana, child_name, child_kana, organization, reason, email, email_cf, phone, contact, date01, date02, content, created_at) VALUES(NULL, :name, :kana, :child_name, :child_kana, :organization, :reason, :email, :email_cf, :phone, :contact, :date01, :date02, :content, sysdate())';

// SQL準備&実行
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':name', $_SESSION['name'], PDO::PARAM_STR);
$stmt->bindValue(':kana', $_SESSION['kana'], PDO::PARAM_STR);
$stmt->bindValue(':child_name', $_SESSION['child_name'], PDO::PARAM_STR);
$stmt->bindValue(':child_kana', $_SESSION['child_kana'], PDO::PARAM_STR);
$stmt->bindValue(':organization', $_SESSION['organization'], PDO::PARAM_STR);
$stmt->bindValue(':reason', $_SESSION['reason'], PDO::PARAM_STR);
$stmt->bindValue(':email', $_SESSION['email'], PDO::PARAM_STR);
$stmt->bindValue(':email_cf', $_SESSION['email_cf'], PDO::PARAM_STR);
$stmt->bindValue(':phone', $_SESSION['phone'], PDO::PARAM_INT);
$stmt->bindValue(':contact', $_SESSION['contact'], PDO::PARAM_STR);
$stmt->bindValue(':date01', $_SESSION['date01'], PDO::PARAM_STR);
$stmt->bindValue(':date02', $_SESSION['date02'], PDO::PARAM_STR);
$stmt->bindValue(':content', $_SESSION['content'], PDO::PARAM_STR);


$status = $stmt->execute();

if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
}

//メール送信処理
// $request_param = $_POST;

$request_datetime = date("Y年m月d日 H時i分s秒");


$mailto = $_SESSION['email'];
$to = "soramikuu72@gmail.com";
$mailfrom = "soramikuu72@gmail.com";
$subject = "お問い合わせ、ありがとうございます。";

$content = "";
$content .= $_SESSION['name'] . "様\r\n";
$content .= "お問い合わせ、ありがとうございます。\r\n 内容を確認し、詳細につきましては、後日ご連絡いたします。";
// $content .= "=================================\r\n";
// $content .= "お名前　 　　　　　　" . htmlspecialchars($request_param['name']) . "\r\n";
// $content .= "メールアドレス　 　　" . htmlspecialchars($request_param['email']) . "\r\n";
// $content .= "お問い合わせ内容　 　" . htmlspecialchars($request_param['content']) . "\r\n";
// $content .= "お問い合わせ日時　 　" . $request_datetime . "\r\n";
// $content .= "=================================\r\n";

//管理者確認用メール
$subject2 = "お問い合わせがありました。";
$content2 = "";
$content2 .= "お問い合わせがありました。\r\n";
$content2 .= "=================================\r\n";
$content2 .= "お名前　 　　　　　" . htmlspecialchars($_SESSION['name']) . "\r\n";
$content2 .= "メールアドレス　 　" . htmlspecialchars($_SESSION['email']) . "\r\n";
$content2 .= "お問い合わせ内容　 " . htmlspecialchars($_SESSION['contact']) . "\r\n";
$content2 .= "お問い合わせ詳細　 " . htmlspecialchars($_SESSION['content']) . "\r\n";
$content2 .= "お問い合わせ日時   " . $request_datetime . "\r\n";
$content2 .= "=================================" . "\r\n";

mb_language("ja");
mb_internal_encoding("UTF-8");
//mail 送信
// var_dump($_SESSION['token']);
// exit();
if ($_SESSION['token']  === NULL) {
    if (mb_send_mail($to, $subject2, $content2, $mailfrom)) {
        mb_send_mail($mailto, $subject, $content, $mailfrom);
?>
        <script>
            window.location = "thankspage/thanks.php";
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
