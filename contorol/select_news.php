<?php

require_once('funcs.php');
$pdo = news_conn();


//２．データ登録SQL作成
$stmt   = $pdo ->prepare('SELECT * FROM kadai_news;');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . $result['id'] . '">';
        $view .= $result['indate'] . '：' . $result['name'];
        $view .= '</a>';

        $view .= '<a href="delete.php?id=' . $result['id'] . '">';
        $view .= '  : [削除]';
        $view .= '</a>';
        $view .= '</p>';
    }
}
?>