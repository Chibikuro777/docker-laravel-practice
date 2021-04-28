<div id="wrapper">
    <section id="form_area">
        <div class="header"><h1>-確認-</h1></div>
        <div class="inner">
            <p class="txt_ty">&#42;印は入力必須項目です。<br class="sp">漏れのないようにご入力ください。</p>
            <form action="{{ route('complete') }}" method="POST">
                @csrf
                <input type="hidden" name="user_agent" value="{{ $_SERVER['HTTP_USER_AGENT'] }}">
                <input type="hidden" name="ip_address" value="{{ $_SERVER['REMOTE_ADDR'] }}">
                <input type="hidden" name="last_name" value="{{ $request['last_name'] }}">
                <input type="hidden" name="first_name" value="{{ $request['first_name'] }}">
                <input type="hidden" name="last_name_kana" value="{{ $request['last_name_kana'] }}">
                <input type="hidden" name="first_name_kana" value="{{ $request['first_name_kana'] }}">
                <input type="hidden" name="email" value="{{ $request['email'] }}">
                <input type="hidden" name="email_confirmation" value="{{ $request['email_confirmation'] }}">
                <input type="hidden" name="zip" value="{{ $request['zip'] }}">
                <input type="hidden" name="address" value="{{ $request['address'] }}">
                <input type="hidden" name="telephone" value="{{ $request['telephone'] }}">
                <div class="container confirm">
                    <dl class="table_row">
                        <dt class="row_title"><label>お名前<sup>&#42;</sup></label></dt>
                        <dd class="row_detail">
                            {{ $request['last_name'] }} {{ $request['first_name'] }}

                        </dd>
                    </dl>
                    
                    <dl class="table_row">
                        <dt class="row_title"><label>フリガナ<sup>&#42;</sup></label></dt>
                        <dd class="row_detail">
                            {{ $request['last_name_kana'] }} {{ $request['first_name_kana'] }}
                        </dd>
                    </dl>
                    
                    <dl class="table_row">
                        <dt class="row_title"><label>Eメール<sup>&#42;</sup></label></dt>
                        <dd class="row_detail">
                            {{ $request['email'] }}
                        </dd>
                    </dl>
        
                    <dl class="table_row">
                        <dt class="row_title"><label>郵便番号<sup>&#42;</sup></label></dt>
                        <dd class="row_detail local">
                            {{ $request['zip'] }}
                        </dd>
                    </dl>
        
                    <dl class="table_row">
                        <dt class="row_title"><label>ご住所<sup>&#42;</sup></label></dt>
                        <dd class="row_detail local">
                            {{ $request['address'] }}
                        </dd>
                    </dl>
                    
                    <dl class="table_row">
                        <dt class="row_title"><label>電話番号<sup>&#42;</sup></label></dt>
                        <dd class="row_detail">
                            {{ $request['telephone'] }}
                        </dd>
                    </dl>

                    <div class="btn_area">
                        <div class="confirm_btn_col2">
                            <button type="submit" id="back" name="button" value="back">修正</button>
                            <button type="submit" name="button" value="send">完了</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section> 
</div>
