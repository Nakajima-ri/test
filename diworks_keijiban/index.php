<!DOCTYPE html> 
<html lang="ja">
<head>

<meta charset="UTF-8">
<title>掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head> 

<body>
    <div class="diblog">
        <img src="diblog_logo.jpg">
    </div>

    <header>
        <div class="logo">トップ</div>
        <ul>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
     </header>

     <main>
        <div class="main-container">
            <div class="right">
                <h1>プログラミングに役立つ書籍</h1>





    <h1>入力フォーム</h1>
    
    <div class="confirm">
        <p>ハンドルネーム
            <br>
            <?php echo $_POST['handlename']; ?>
        </p>

        <p>タイトル
            <br>
            <?php echo $_POST['title']; ?>
        </p>
        
        <p> コメント 
            <br>
            <?php echo $_POST['comments']; ?>
        </p>


        <form action="insert.php" method="post">
        <input type="submit" class="button2" value="登録する">
        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
        <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
    </form>


        </div>














                <div class="abc">
                    <div><img src="jQuery_image1.jpg"></div>
                    <div><img src="jQuery_image2.jpg"></div>
                    <div><img src="jQuery_image3.jpg"></div>
                    <div><img src="jQuery_image4.jpg"></div>
                    <div><img src="jQuery_image5.jpg"></div>
                </div>

                <h3>2017年年1月15日</h3>
                 <div class="bookstore">
                        <img src="bookstore.jpg">
                 </div>
                     <h2>D.I.BlogはD.I.Worksが提供する演習課題です。
                     <br>  記事中身
                     </h2>
                    <div class="box">
                      <div class="box_pic">
                         <img src="pic1.jpg">
                         <p>ドメイン取得方法</p>
                      </div>
                      <div class="box_pic">
                       <img src="pic2.jpg">
                       <p>快適な職場環境</p>
                      </div>
                      <div class="box_pic">
                       <img src="pic3.jpg">
                       <p>Linuxの基礎</p>
                       </div>
                      <div class="box_pic">
                       <img src="pic4.jpg">
                       <p>マーケティング入門</p>
                      </div>
                      <br>
                      <div class="box_pic">
                        <img src="pic5.jpg">
                        <p>アクティブラーニング</p>
                     </div>
                     <div class="box_pic">
                      <img src="pic6.jpg">
                      <p>CSSの効率的な勉強方法</p>
                     </div>
                     <div class="box_pic">
                      <img src="pic7.jpg">
                      <p>リーダブルコードとは</p>
                      </div>
                     <div class="box_pic">
                      <img src="pic8.jpg">
                      <p>HTML5の可能性</p>
                     </div>
               </div>
            </div>
            <div class="left">
                <ul>
                    <h2>人気の記事</h2>
                      <li>PHPおすすめ本</li>
                      <li>PHP MyAdminの使い方</li>
                      <li>いま人気のエディタTops</li>
                      <li>HTMLの基礎</li>
                    <h2>オススメリンク</h2>
                       <div class="link">
                        <a href="https://diworks.co.jp/">ディーアイワークス株式会社</a>
                        <br>
                        <a href="https://www.apachefriends.org/jp/download.html">XAMPPのダウンロード</a>
                        <br>
                        <a href="https://www.eclipse.org/downloads/">Eclipseのダウンロード</a>
                        <br>
                        <a href="https://github.com/adobe/brackets/releases">Braketsのダウンロード</a>
                       </div>
                   
                      <h2>カテゴリ</h2>
                      <li>HTML</li>
                      <li>PHP</li>
                      <li>MySQL</li>
                      <li>JavaScript</li>
                </ul>
           </div>
        </div>
     </main>

    <footer>
        Copyright D.I.works|D.I.blog is the one which provides Ato Z about programming
    </footer>
</body>

</html>