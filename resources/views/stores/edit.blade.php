<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Create Store Information</title>
    </head>
    <body>
        <h1>店舗編集</h1>
        <form action="/stores/{{ $store->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="store_name">
                <h2>店名</h2>
                <textarea name="store[name]">{{ $store->name }}</textarea>
            </div>
            <div class="hotpeppar">
                <h2>ホットペッパー</h2>
                <textarea name="store[hotpeppar]">{{ $store->hotpeppar }}</textarea>
            </div>
            <div class="tabelog">
                <h2>食べログ</h2>
                <textarea name="store[tabelog]">{{ $store->tabelog }}</textarea>
            </div>
            <div class="Google">
                <h2>Google</h2>
                <textarea name="store[google]">{{ $store->google }}</textarea>
            </div>
            <div class="average">
                <h2>平均</h2>
               <textarea name="store[average]">{{ $store->average }}</textarea>
            </div>
            <div class="address">
                <h2>住所</h2>
                <textarea name="store[address]">{{ $store->address }}</textarea>
            </div>
            <div class="tell">
                <h2>電話番号</h2>
                <textarea name="store[tell]">{{ $store->tell }}</textarea>
            </div>
            <div class="time">
                <h2>営業時間</h2>
                <textarea name="store[time]">{{ $store->time }}</textarea>
            </div>
            <div class="ジャンル">
                <h2>ジャンル</h2>
                <textarea name="store[genre]">{{ $store->genre }}</textarea>
            </div>
            <div class="pay">
                <h2>支払い方法</h2>
                <textarea name="store[pay]">{{ $store->pay }}</textarea>
            </div>
            <div class="close">
                <h2>定休日</h2>
                <textarea name="store[close]">{{ $store->close }}</textarea>
            </div>
            <div class="station">
                <h2>最寄駅</h2>
                <textarea name="store[station]">{{ $store->station }}</textarea>
            </div>
            <div class="budget">
                <h2>予算</h2>
                <textarea name="store[budget]">{{ $store->budget }}</textarea>
            </div>
            <div class="parking">
                <h2>駐車場</h2>
                 <textarea name="store[parking]">{{ $store->parking }}</textarea>
            </div>
            <div class="image">
                <h2>画像1を登録</h2>
                <input type="file" name="image_url1">
                <h2>画像2を登録</h2>
                <input type="file" name="image_url2">
                <h2>画像3を登録</h2>
                <input type="file" name="image_url3">
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>