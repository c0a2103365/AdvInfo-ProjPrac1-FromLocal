<?php
// 平均を算出する関数
function average($arr){
    return array_sum($arr)/count($arr);
}
// 分散を算出する関数
function dispersion($arr){
    // 平均値を求める
    $ave= average($arr);
    $variance = 0.0;
    // 配列を参照
    foreach ($arr as $value) {
        $variance += pow($value - $ave, 2);
    }
    return (float) ($variance / count($arr));
}

// 標準偏差を算出する関数
function std_dev($num){
    return sqrt($num);
}

// 偏差値を算出する関数
function dev_val($num,$ave,$std_dev){
    return (($num-$ave)/$std_dev)*50+10;
}

// 偏差値の逆数を算出する関数(重さと価格に適用)
function reverse_val($value){
    return 100-$value;
}


function radercart($score_1, $score_2, $score_3, $score_4, $score_5){
    //値
    $values = array($score_1,$score_2,$score_3,$score_4,$score_5);
    //ラベル
    $labels = array("価格", "重さ", "稼働時間", "メモリ", "ストレージ");

    $max         = 75;    //上限
    $step        = 10;     //目盛の間隔
    $margin      = 80;    //グラフの余白
    $text_margin = 15;    //ラベルの余白
    $size        = 300;   //サイズ（正方形）

    //フォント
    $font = "migmix-1p-regular.ttf";
    $font_size = 10;

    //画像
    $image = imagecreatetruecolor($size + $margin, $size + $margin);
    imageantialias($image, true);

    //色
    $bg   = imagecolorallocate($image, 255, 255, 255);    // 背景
    $line = imagecolorallocate($image, 100, 100, 100); // チャートの線
    $grid = imagecolorallocate($image, 50, 50, 50);    // グリッドの色
    $font_color = imagecolorallocate($image, 0, 0, 0);

    $center_x = round(($size + $margin) / 2);
    $center_y = round(($size + $margin) / 2);
    $count = count($values);
    $div = round(360 / $count);
    $length = round($size / 2);

    // 背景の描画
    imagefill($image, 0, 0, $bg);
    for ($i = 1; $i <= $max; $i++) {
        if ($i % $step != 0) continue;
        $points = array();
        for ($j = 0; $j < $count; $j++) {
            list($x, $y) = point_rotate($length * ($i / $max), $div * $j - 90);

            $point = array($x + $center_x, $y + $center_y);
            imageline($image, $center_x, $center_y, $point[0], $point[1], $grid);
            $points = array_merge($points, $point);
        }
        imagepolygon($image, $points, $count, $grid);
    }


    // 文字の描画
    for ($i = 0; $i < $count; $i++) {
        $box = imagettfbbox($font_size, 0, $font, $labels[$i]);
        $text_width = $box[2] - $box[6];
        $text_height = $box[3] - $box[7];

        list($x, $y
        ) = point_rotate($length + $text_margin, $div * $i - 90);

        $text_x = (-1 * $text_width / 2) + $center_x + $x;
        $text_y = ($text_height / 2) + $center_y + $y;
        imagettftext($image, $font_size, 0, $text_x, $text_y, $font_color, $font, $labels[$i]);
    }

    for ($i = 0;$i <= $max;$i = $i + $step){
        $box = imagettfbbox($font_size, 0, $font, $i);
        $text_width = $box[2] - $box[6];
        $text_height = $box[3] - $box[7];

        $text_x = (-1 * $text_width) + $center_x - $font_size;
        $text_y = ($text_height / 2) + $center_y - ($length * ($i / $max));
        imagettftext($image, $font_size, 0, $text_x, $text_y, $grid, $font, $i);
    }

    // グラフの描画
    $points = array();
    for ($i = 0; $i < $count; $i++) {
        $value = $length * $values[$i] / $max;
        list($x, $y) = point_rotate($value, $div * $i - 90);
        $point = array($x + $center_x, $y + $center_y);
        $points = array_merge($points, $point);
    }
    imagepolygon($image, $points, $count, $line);

    // 画像の出力
    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
}

function point_rotate($length, $angle){
    $angle = deg2rad($angle);
    $x = round($length * cos($angle));
    $y = round($length * sin($angle));
    return array($x, $y);
}


radercart(60, 50, 40, 30, 55);

?>