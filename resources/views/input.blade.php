    <div id="wrapper">
        <section id="form_area">
            <div class="header"><h1>-入力-</h1></div>
            <div class="inner">
                <p class="txt_ty">&#42;印は入力必須項目です。<br class="sp">漏れのないようにご入力ください。</p>
                <form action="{{ route('confirm') }}" method="POST">
                    @csrf
                    <div class="container">
                        <dl class="table_row">
                            <dt class="row_title"><label>お名前<sup>&#42;</sup></label></dt>
                            <dd class="row_detail">
                                    <div><input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="姓">
                                        <p class="caption">※全角入力</p>
                                        @error('last_name')
                                            <p class="error" style="color:red">{{ $message }}</p>
                                        @enderror                              
                                    </div>
                                    <div><input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="名">
                                        @error('first_name')
                                            <p class="error" style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                            </dd>
                        </dl>
                    
                        <dl class="table_row">
                            <dt class="row_title"><label>フリガナ<sup>&#42;</sup></label></dt>
                            <dd class="row_detail">
                                    <div><input type="text" name="last_name_kana" value="{{ old('last_name_kana') }}" placeholder="セイ">
                                        <p class="caption">※全角入力</p>
                                        @error('last_name_kana')
                                            <p class="error" style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div><input type="text" name="first_name_kana" value="{{ old('first_name_kana') }}" placeholder="メイ">
                                        @error('first_name_kana')
                                            <p class="error" style="color:red">{{ $message }}</p>
                                        @enderror
                                    </div>
                            </dd>
                        </dl>
                    
                        <dl class="table_row">
                            <dt class="row_title"><label>Eメール<sup>&#42;</sup></label></dt>
                            <dd class="row_detail">
                                <input type="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="error" style="color:red">{{ $message }}</p>
                                @enderror
                            </dd>
                        </dl>
        
                        <dl class="table_row">
                            <dt class="row_title"><label>Eメール(確認用)<sup>&#42;</sup></label></dt>
                            <dd class="row_detail">
                                <input type="email" name="email_confirmation" value="{{ old('email_confirmation') }}">
                                @error('email_confirmation')
                                    <p class="error" style="color:red">{{ $message }}</p>
                                @enderror
                            </dd>
                        </dl>
        
                        <dl class="table_row">
                            <dt class="row_title"><label>郵便番号<sup>&#42;</sup></label></dt>
                            <dd class="row_detail local">
                                <input type="text" name="zip" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{ old('zip') }}">
                                @error('zip')
                                    <p class="error" style="color:red">{{ $message }}</p>
                                @enderror                    
                            </dd>
                        </dl>

                        <dl class="table_row">
                            <dt class="row_title"><label>ご住所<sup>&#42;</sup></label></dt>
                            <dd class="row_detail">
                                <input type="text" name="address" value="{{ old('address') }}">
                                <p class="caption">※物件名・部屋番号までご記入ください。</p>
                                @error('address')
                                    <p class="error" style="color:red">{!! $message !!}</p>
                                @enderror                    
                            </dd>
                        </dl>

                        <dl class="table_row">
                            <dt class="row_title"><label>電話番号<sup>&#42;</sup></label></dt>
                            <dd class="row_detail">
                                <input type="tel" name="telephone" value="{{ old('telephone') }}">
                                @error('telephone')
                                    <p class="error" style="color:red">{{ $message }}</p>
                                @enderror
                            </dd>
                        </dl>

                        <div class="checkbox_wrap"><label for="agree"><input type="checkbox" class="js_check_rule" name="agree" id="agree"><span class="checkbox"></span>当選規約に同意する</label></div>
                        <div class="btn_area">
                            <div class="js_btn_confirm"><button type="submit" id="submit" name="image[confirm]">確認</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </section> 
    </div>
