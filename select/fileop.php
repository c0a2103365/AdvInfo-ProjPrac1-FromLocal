<?php
// ファイル削除を行う関数
function delete_file(){
    $files = glob('raderchart*_*.png'); // ワイルドカードで一致するファイルのリストを取得

    if ($files !== false) { // ファイルが存在するかチェック
        foreach ($files as $file) {
            if (unlink($file)) {
                // echo 'ファイルを削除しました: ' . $file . '<br>';
                continue;
            } else {
                // echo 'ファイルの削除に失敗しました: ' . $file . '<br>';
                continue;
            }
        }
    } else {
        echo '指定されたファイルが存在しません';
    }
}
?>