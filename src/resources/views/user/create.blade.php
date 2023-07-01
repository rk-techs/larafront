@extends('layouts.app')

@section('title')
    User Create | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <div class="content-top-bar">
                <div>
                    <div class="title title-h1">
                        User Create
                    </div>
                </div>
                <div>
                    {{-- some text here --}}
                </div>
                <div>
                    <div class="btn btn-store">Store</div>
                </div>
            </div>

            <div class="input-block">
                <div class="input-body">
                    <div class="input-col">
                        <div class="input-row">
                            <label for="userNameInput">名前</label>
                            <input id="userNameInput" type="text" class="input-field" name="name" placeholder="">
                        </div>
                        <div class="input-row">
                            <label for="userEmailInput">E-mail</label>
                            <input id="userEmailInput" type="email" class="input-field" name="email" placeholder="">
                        </div>
                        <div class="input-row">
                            <label for="userPasswordInput">パスワード</label>
                            <input id="userPasswordInput" type="password" class="input-field" name="password" placeholder="">
                        </div>
                        <div class="input-row">
                            <label for="userAddressInput">住所</label>
                            <input id="userAddressInput" type="text" class="input-field" name="address" placeholder="">
                        </div>
                        <div class="input-row">
                            <label for="userMobileNumberInput">携帯番号</label>
                            <input id="userMobileNumberInput" type="text" class="input-field" name="mobile_number" placeholder="">
                        </div>
                        <div class="input-row">
                            <label for="userRemarksInput">備考</label>
                            <textarea name="remarks" id="userRemarksInput" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
