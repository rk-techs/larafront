@extends('layouts.app')

@section('title')
    User Create | {{ config('app.name') }}
@endsection

@section('content')
    <main class="layout-main">
        <div class="main-container">

            <div class="content-header-block">
                <div class="title title-h1">
                    User > Create
                </div>
            </div>

            <div class="input-block">
                <div class="input-body">

                    <div class="row">
                        <div class="col">
                            <label for="userNameInput" class="form-label">
                                <span class="label-txt">名前</span>
                                <span class="required-label">必須</span>
                            </label>
                            <input id="userNameInput" type="text" class="input-field" name="name" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="userEmailInput" class="form-label">
                                <span class="label-txt">E-mail</span>
                                <span class="required-label">必須</span>
                            </label>
                            <input id="userEmailInput" type="email" class="input-field" name="email" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="userPasswordInput" class="form-label">
                                <span class="label-txt">Password</span>
                                <span class="required-label">必須</span>
                            </label>
                            <input id="userPasswordInput" type="password" class="input-field" name="password" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="userAddressInput" class="form-label">
                                <span class="label-txt">住所</span>
                            </label>
                            <input id="userAddressInput" type="text" class="input-field" name="address" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="userMobileNumberInput" class="form-label">
                                <span class="label-txt">携帯番号</span>
                            </label>
                            <input id="userMobileNumberInput" type="text" class="input-field" name="mobile_number" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="userRemarksInput" class="form-label">
                                <span class="label-txt">備考</span>
                            </label>
                            <textarea id="userRemarksInput" rows="5" class="input-field" name="remarks"></textarea>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </main>

    <div class="layout-operation">
        <div class="operation-container">
            <button class="btn btn-store mr-3">保存</button>
            <button class="btn btn-info">キャンセル</button>
        </div>
    </div>

@endsection
