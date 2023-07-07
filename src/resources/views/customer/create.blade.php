@extends('layouts.app')

@section('title')
    取引先 新規登録 | {{ config('app.name') }}
@endsection

@section('content')
    <main class="layout-main">
        <div class="main-container">

            <div class="content-header-block">
                <div class="title title-h1">
                    取引先 > 新規登録
                </div>
                <button class="btn btn-store">保存</button>
            </div>

            <div class="input-block">
                <div class="input-body">

                    <div class="row">
                        <div class="col">
                            <label for="nameInput" class="form-label">
                                <span class="label-txt">顧客名</span>
                                <span class="required-label">必須</span>
                            </label>
                            <input id="nameInput" type="text" class="input-field" name="name" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="nameKanaInput" class="form-label">
                                <span class="label-txt">ヨミガナ</span>
                            </label>
                            <input id="nameKanaInput" type="text" class="input-field" name="name_kana" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="longNameInput" class="form-label">
                                <span class="label-txt">正式名称</span>
                            </label>
                            <input id="longNameInput" type="text" class="input-field" name="long_name" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="contactNameInput" class="form-label">
                                <span class="label-txt">担当者氏名</span>
                            </label>
                            <input id="contactNameInput" type="text" class="input-field" name="contact_name" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="addressInput" class="form-label">
                                <span class="label-txt">住所</span>
                            </label>
                            <input id="addressInput" type="text" class="input-field" name="address" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="telInput" class="form-label">
                                <span class="label-txt">TEL</span>
                            </label>
                            <input id="telInput" type="text" class="input-field" name="tel" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="faxInput" class="form-label">
                                <span class="label-txt">FAX</span>
                            </label>
                            <input id="faxInput" type="text" class="input-field" name="fax" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="mobileInput" class="form-label">
                                <span class="label-txt">携帯番号</span>
                            </label>
                            <input id="mobileInput" type="text" class="input-field" name="mobile" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="emailInput" class="form-label">
                                <span class="label-txt">E-mail</span>
                            </label>
                            <input id="emailInput" type="text" class="input-field" name="email" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="remarkInput" class="form-label">
                                <span class="label-txt">備考</span>
                            </label>
                            <textarea id="remarkInput" rows="5" class="input-field" name="remarks"></textarea>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
