<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>Tech Kids School　お問合せフォーム</title>
  <meta name="robots" content="noindex" />

  <style type="text/css"></style>
</head>

<body class="body">
  <div class="body_tbl">
    <!-- SMP_TEMPLATE_HEADER start -->
    <h1>Dare式　お問合せフォーム</h1>

    <p class="header_text">以下のフォームに必要な項目を入力のうえ「送信」ボタンを押してください。<br>ご登録いただいたメールアドレスにご連絡をさせていただきます。</p>

    <!-- FORM start -->
    <form method="post" action="confirm.php">
      <div class="smp_tmpl">
        <dl class="cf">
          <dt class="title">
            氏名 <span class="need">＊</span>
          </dt>
          <dd class="data ">

            <input class="input " type="text" name="name" value="" maxlength="32">
            <br>
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            氏名（カナ） <span class="need">＊</span>
          </dt>
          <dd class="data ">

            <input class="input " type="text" name="kana" value="" maxlength="32" pattern="[\u30A1-\u30F6]*">
            <br>
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            お子様氏名 <span class="need">＊</span>
          </dt>
          <dd class="data ">

            <input class="input " type="text" name="child_name" value="" maxlength="32">
            <br>
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            お子様氏名（カナ）<span class="need">＊</span>
          </dt>
          <dd class="data ">

            <input class="input " type="text" name="child_kana" value="" maxlength="32" pattern="[\u30A1-\u30F6]*">
            <br>
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            お子様の学校名・団体名
          </dt>
          <dd class="data ">

            <input class="input " type="text" name="organization" value="" maxlength="32">
            <br>
            <span class="sample">学校、団体に属されていない方は、所属無しとご記入ください。 </span><br>
            <span class="msg"></span>
          </dd>
        </dl>

        <dl class="cf">
          <dt class="title">
            お子様の学年 <span class="need">＊</span>
          </dt>
          <dd class="data ">
            <input type="radio" name="grade" value="01">高１
            <input type="radio" name="grade" value="02">高２
            <input type="radio" name="grade" value="03">高３

            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            当HPアクセスのきっかけ <span class="need">＊</span>
          </dt>
          <dd class="data ">
            <input type="checkbox" name="reason[]" value="検索サイト">検索サイト
            <input type="checkbox" name="reason[]" value="ご紹介">ご紹介
            <input type="checkbox" name="reason[]" value="twitter">twitter
            <input type="checkbox" name="reason[]" value="Facebook">Facebook
            <input type="checkbox" name="reason[]" value="その他">その他

            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            メールアドレス <span class="need">＊</span>
            <span class="caution">半角英数字でご入力ください</span>
          </dt>
          <dd class="data ">

            <input class="input " type="email" name="email" value="" maxlength="129"><br>
            （確認用）<br>
            <input class="input " type="email" name="email_cf" value="" maxlength="129"><br>
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            携帯電話番号 <span class="need">＊</span>
          </dt>
          <dd class="data phone">
            <input class="input " type="text" name="phone" value="" maxlength="6">
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            お問い合わせ内容 <span class="need">＊</span>
          </dt>
          <dd class="data ">
            <input type="checkbox" name="contact[]" value="面談希望">面談希望
            <input type="checkbox" name="contact[]" value="体験希望">体験希望
            <input type="checkbox" name="contact[]" value="その他">その他
            <br>
            <span class="sample">（複数選択可能です。） </span><br>
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            無料面談希望日時
          </dt>
          <dd class="data ">
            <input type="date" name="date01">
            <br><br>
            <input type="checkbox" name="time01[]" value="午前">午前
            <input type="checkbox" name="time01[]" value="午後">午後
            <input type="checkbox" name="time01[]" value="夕方以降">夕方以降
            <br>
            <span class="sample">（複数選択可能です。） </span><br>
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            無料体験希望日時
          </dt>
          <dd class="data ">
            <input type="date" name="date02">
            <br><br>
            <input type="checkbox" name="time02[]" value="午前">午前
            <input type="checkbox" name="time02[]" value="午後">午後
            <input type="checkbox" name="time02[]" value="夕方以降">夕方以降
            <br>
            <span class="sample">（複数選択可能です。） </span><br>
            <span class="msg"></span>
          </dd>
        </dl>
        <dl class="cf">
          <dt class="title">
            お問合せ詳細
          </dt>
          <dd class="data ">
            <textarea class="" name="content" rows="4" wrap="soft"></textarea><br>
            <span class="msg"></span>
          </dd>
        </dl>
      </div>
      <input type="hidden" id="token" name="token" value="1234567" />
      <input class="submit" type="submit" name="submit" value="送信">
      <!-- FORM end -->
</body>

</html>
