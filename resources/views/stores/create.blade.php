<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Create Store Information</title>
    </head>
    <body>
        <h1>店舗新規登録</h1>
        <form action="/stores" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="store_name">
                <h2>店名</h2>
                <input type="text" name="store[name]" placeholder="店名を入力"/>
            </div>
            <div class="hotpeppar">
                <h2>ホットペッパー</h2>
                <input type="text" name="store[hotpeppar]" placeholder="ホットペッパーの評価を入力"/>
            </div>
            <div class="tabelog">
                <h2>食べログ</h2>
                <input type="text" name="store[tabelog]" placeholder="食べログの評価を入力"/>
            </div>
            <div class="Google">
                <h2>Google</h2>
                <input type="text" name="store[google]" placeholder="Googleの評価を入力"/>
            </div>
            <div class="average">
                <h2>平均</h2>
                <input type="text" name="store[average]" placeholder="３つの評価の平均を入力"/>
            </div>
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="store[address]" placeholder="住所を入力"/>
            </div>
            <div class="tell">
                <h2>電話番号</h2>
                <input type="text" name="store[tell]" placeholder="電話番号を入力"/>
            </div>
            <div class="time">
                <h2>営業時間</h2>
                <textarea name="store[time]" placeholder="営業時間を入力"></textarea>
            </div>
            <div class="ジャンル">
                <h2>ジャンル</h2>
                <input type="text" name="store[genre]" placeholder="ジャンルを入力"/>
            </div>
            <div class="pay">
                <h2>支払い方法</h2>
                <textarea name="store[pay]" placeholder="支払い方法を入力"></textarea>
            </div>
            <div class="close">
                <h2>定休日</h2>
                <input type="text" name="store[close]" placeholder="定休日を入力"/>
            </div>
            <div class="station">
                <h2>最寄駅</h2>
                <textarea name="store[station]" placeholder="最寄駅からの所要時間を入力"></textarea>
            </div>
            <div class="budget">
                <h2>予算</h2>
                <textarea name="store[budget]" placeholder="予算を入力"></textarea>
            </div>
            <div class="parking">
                <h2>駐車場</h2>
                <textarea name="store[parking]" placeholder="駐車場情報を入力"></textarea>
            </div>
            <div class="image">
                <h2>画像1を登録</h2>
                <input type="file" name="image_url1">
                <h2>画像2を登録</h2>
                <input type="file" name="image_url2">
                <h2>画像3を登録</h2>
                <input type="file" name="image_url3">
            </div>
            <input type="submit" value="新規登録"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>