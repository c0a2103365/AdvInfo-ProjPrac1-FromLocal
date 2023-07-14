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

// ポップアップの要素を取得
var popup = document.querySelector(".popup");
var overlay = document.querySelector(".overlay");

// 閉じるボタンをクリックしたときの処理
document.getElementById("closeButton").addEventListener("click", function() {
    // ポップアップの非表示
    popup.style.display = "none";
    overlay.style.display = "none";
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
                }
            } else {
                console.error('エラーが発生しました');
            }
        };
    } else {
        console.log("選択されたアイテムが2つ以上必要です");
    }
});