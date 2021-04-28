<div id="wrapper">
    <section id="form_area">
        <div class="header"><h1>送信完了</h1></div>
        <div class="complete">
            <div class="container">
                <p class="complete_txt_l">ご入力ありがとうございました。</p>
                <p class="complete_txt_s">プレゼントの発送まで今しばらくお待ちください。</p>
                <p>姓：{{ $request['last_name'] }}</p>
                <p>名：{{ $request['first_name'] }}</p>
                <p>セイ：{{ $request['last_name_kana'] }}</p>
                <p>メイ：{{ $request['first_name_kana'] }}</p>
                <p>郵便番号：{{ $request['zip'] }}</p>
                <p>ご住所：{{ $request['address'] }}</p>
                <p>電話番号：{{ $request['telephone'] }}</p>
                <p>メールアドレス：{{ $request['email'] }}</p>
            </div>
        </div>
    </section> 
</div>
