<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>dare method Contact form</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>

<!-- <header>
    <nav class="navbar fixed-top bg-primary pb-3">
      <div class="bg-primary text-white pl-1">
        <h2>dare式</h2>
    </div>
    </nav>
    </header>
  <div></div> -->

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <a class="navbar-brand" href="#">dare式</a>
  </nav>
</header>

<!-- contact titke-->

<body class="bg-light">
  <div class="container">
    <div class="text-left pt-2">
      <div class="bg-primary text-white pl-1">
        <h2>dare式</h2>
      </div>
      <div class="pt-3">
        <p class="lead bg-info text-white pl-1">お問い合わせフォーム</p>
      </div>
    </div>

    <!-- contact form -->
    <div class="row">
      <div class="col-md-6 order-md-1">
        <!-- form entry -->
        <form class="needs-validation" novalidate method="post" action="../confirm.php">

          <div class="row">
            <div class="col-md-12 mt-3 mb-3">
              <!-- name -->
              <label for="fullname">氏名</label>
              <input type="text" name="name" class="form-control" id="firstName" placeholder="ダレイオス久保" value="" maxlength="32">
            </div>
            <!-- name kana -->
            <div class="col-md-12 mb-3">
              <label for="fullnameKana">氏名（カナ）</label>
              <input type="text" name="kana" class="form-control" id="firstName" placeholder="ダレイオスクボ" value="" maxlength="32" pattern="[\u30A1-\u30F6]*">
            </div>
            <!-- child -->
            <div class="col-md-12 mb-3">
              <label for="childname">お子様氏名</label>
              <input type="text" name="child_name" class="form-control" id="childname" placeholder="ダレイオス久保子供" value="" maxlength="32">
            </div>
            <!-- child kana -->
            <div class="col-md-12 mb-3">
              <label for="fullnameKana">お子様氏名（カナ）</label>
              <input type="text" name="child_kana" class="form-control" id="chilenameKana" placeholder="ダレイオスクボジュニア" value="" maxlength="32" pattern="[\u30A1-\u30F6]*">
            </div>
            <!-- organization -->
            <div class="col-md-12 mb-3">
              <label for="org_details">お子様の学校名・団体名</label>
              <input type="text" name="organization" class="form-control" id="org" value="" maxlength="32" placeholder="所属されていない方は「所属なし」とご記入ください。">
            </div>
            <!-- class -->
            <div class="col-md-12 mb-3">
              <label for="childClass">お子様の学年</label>
              <div>
                <input type="radio" name="grade" value="01">高１
                <input type="radio" name="grade" value="02">高２
                <input type="radio" name="grade" value="03">高３
              </div>
            </div>
            <!-- reason -->
            <div class="col-md-12 mb-3">
              <label for="reasoncheck">ホームページアクセスのきっかけ</label>
              <div>
                <input type="checkbox" name="[reason[]]" value="検索サイト">検索サイト
                <input type="checkbox" name="[reason[]]" value="ご紹介">ご紹介
                <input type="checkbox" name="[reason[]]" value="twitter">twitter
                <input type="checkbox" name="[reason[]]" value="Facebook">Facebook
                <input type="checkbox" name="[reason[]]" value="その他">その他
              </div>
            </div>
            <!-- email address -->
            <div class="col-md-12 mb-3">
              <label for="email">メールアドレス</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="半角英数字でご入力ください  ****@example.ne.jp" value="" maxlength="129">
            </div>
            <!-- email_check address -->
            <div class="col-md-12 mb-3">
              <label for="emailcf">メールアドレス（確認用）</label>
              <input type="email" name="email_cf" class="form-control" id="emailCf" placeholder="半角英数字でご入力ください  ****@example.ne.jp" value="" maxlength="129">
            </div>
            <!-- phone number -->
            <div class="col-md-12 mb-3">
              <label for="phonenum">携帯電話番号</label>
              <input class="form-control" id="phoneNum" type="text" name="phone" value="" maxlength="12" placeholder="090-XXXX-XXXX">
            </div>
            <!-- contact details -->
            <div class="col-md-12 mb-3">
              <label for="contact_detail">お問い合わせ内容<span class="need">（複数選択できます）</span></label>
              <div>
                <input type="checkbox" name="contact[]" value="面談希望">面談希望
                <input type="checkbox" name="contact[]" value="体験希望">体験希望
                <input type="checkbox" name="contact[]" value="その他">その他
              </div>
            </div>
            <!-- contact date -->
            <div class="col-md-12 mb-4">
              <label for="contactdate">無料面談希望日時<span class="need">（複数選択できます）</span></label>
              <div>
                <input type="date" name="date01" class="" id="">
              </div>
              <div class="pt-3">
                <input type="checkbox" name="time01[]" value="午前">午前
                <input type="checkbox" name="time01[]" value="午後">午後
                <input type="checkbox" name="time01[]" value="夕方以降">夕方以降
              </div>
            </div>

            <!-- contact experience date -->
            <div class="col-md-12 mb-4">
              <label for="contactdateX">無料体験希望日時<span class="need">（複数選択できます）</span></label>
              <div>
                <input type="date" name="date02" class="" id="">
              </div>
              <div class="pt-3">
                <input type="checkbox" name="time02[]" value="午前">午前
                <input type="checkbox" name="time02[]" value="午後">午後
                <input type="checkbox" name="time02[]" value="夕方以降">夕方以降
              </div>
            </div>
            <!-- detail post -->
            <div class="col-md-12 mb-3">
              <label for="detailpost">お問い合わせ詳細</label>
              <div>
                <textarea class="" name="content" rows="5" wrap="soft"></textarea><br>
                <span class="msg"></span>
              </div>

            </div>
          </div>
          <input type="hidden" name="detect" value="判定">
          <!-- HIDDEN START -->
          <input type="hidden" name="SMPFORM" value="lgke-obsjt-3c793296d9a768ffa8c895846bd64e39">
          <input type="hidden" name="mode" value="0">
          <!-- HIDDEN END -->
          <input class="submit btn btn-primary btn-lg btn-block" type="submit" name="submit" value="送信">
          <!-- FORM end -->
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; dareios Company 07/2020</p>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../assets/dist/js/bootstrap.bundle.js"></script>
  <script src="form-validation.js"></script>
</body>

</html>
