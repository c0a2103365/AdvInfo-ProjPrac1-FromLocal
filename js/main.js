let status = [];
let input = [];

function inputClick(e) {
    if (input[this.i] == null) {
        return;
    }

    if (status[this.i]) {
        input[this.i].classList.add("off");
        input[this.i].classList.remove("on");
    } else {
        input[this.i].classList.add("on");
        input[this.i].classList.remove("off");
    }
    status[this.i] = status[this.i] ? false : true;
    console.log(status[this.i])
}

for (let i = 1; i < 11; i++) {
    status[i] = false;
    console.log(status[i])
    if(document.getElementById(`heart${i}`) != null) {
        input[i] = document.getElementById(`heart${i}`);
        input[i].addEventListener("click", {i: i, handleEvent: inputClick}) ;
    }
}

console.log(status)

// キーボードイベントのリスナーを追加
document.addEventListener("keydown", function(event) {
    // 押下されたキーコードを取得
    var keyCode = event.keyCode;

    // 特定のキーに応じて機能を実行
    if (event.ctrlKey) {
        return
    } else if (keyCode === 82) {
        // Rキーが押下された場合の処理
        document.getElementById("switch1").click(); // トグルボタンをクリック
    }
});

function disableScroll() {
    // スクロール位置を取得
    var scrollY = window.scrollY;
    var scrollX = window.scrollX;

    // body要素にスクロール位置を固定するスタイルを適用
    document.body.style.position = 'fixed';
    document.body.style.top = '-' + scrollY + 'px';
    document.body.style.left = '-' + scrollX + 'px';
}

function enableScroll() {
    // body要素のスクロール位置固定を解除するスタイルを適用
    document.body.style.position = '';
    document.body.style.top = '';
    document.body.style.left = '';

    // スクロール位置を元に戻す
    var scrollY = parseInt(document.body.style.top || '0', 10);
    var scrollX = parseInt(document.body.style.left || '0', 10);
    window.scrollTo(scrollX, scrollY);
}

// ポップアップの要素を取得
var popup = document.querySelector(".popup");
var overlay = document.querySelector(".overlay");

// ポップアップを表示する関数
function showPopup() {
    // オーバーレイのスタイルにoverflow: hidden;を適用
    document.querySelector(".overlay").style.display = "block";
    document.querySelector(".overlay").style.overflow = "hidden";

    // スクロールを無効にする
    disableScroll();
}

// ポップアップを非表示にする関数
function hidePopup() {
    // オーバーレイのスタイルを空にする（元のスタイルに戻る）
    document.querySelector(".overlay").style.display = "none";
    document.querySelector(".overlay").style.overflow = "";

    // スクロールを有効にする
    enableScroll();
}

// 閉じるボタンのクリックイベントを設定
document.getElementById("closeButton").addEventListener("click", function() {
    // ポップアップを非表示にする
    document.querySelector(".popup").style.display = "none";
    // ポップアップが閉じられたときにスクロールを有効にする
    hidePopup();
});

// 比較ボタンをクリックしたときの処理
document.getElementById("comparisonButton").addEventListener("click", function() {
    var selectedItems = [];

    // 選択されたアイテムの値を取得
    var checkboxes = document.querySelectorAll('input.choice:checked');

    checkboxes.forEach(function(checkbox) {
        selectedItems.push(checkbox.value);
    });
    console.log(selectedItems)

    // 選択されたアイテムが2つ以上の場合のみ処理を実行
    if (selectedItems.length >= 2) {
        // AJAXリクエストを作成
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'serch.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // データを送信
        xhr.send('selectedItems=' + JSON.stringify(selectedItems));

        // レスポンスを受け取った後の処理
        xhr.onload = function() {
            if (xhr.status === 200) {
                // ポップアップの表示
                if (popup && overlay) {
                    popup.style.display = "block";
                    overlay.style.display = "block";
                    overlay.style.overflow = "hidden";
                    disableScroll()
                }
            } else {
                console.error('エラーが発生しました');
            }
        };
    } else {
        console.log("選択されたアイテムが2つ以上必要です");
    }
});