@extends('layouts.guest')

@section('title')
    ログイン
@endsection

@section('content')
<main class="layout-login">
    <div class="login-container">
        <form action="" method="POST">
            @csrf

            <div class="login-title-block">
                <h1 class="title title-h1">larafront login</h1>
            </div>

            <div class="login-form-block">
                <div class="login-input-row">
                    <label for="userEmailInput" class="form-label">
                        <span class="label-txt">E-mail</span>
                    </label>
                    <input id="userEmailInput" type="email" class="input-field" name="email" placeholder="">
                    <div class="invalid-feedback">
                        <span class="material-symbols-outlined">
                            error
                        </span>
                        <span class="error-msg">
                            Error message here.
                        </span>
                    </div>
                </div>
                <div class="login-input-row">
                    <label for="userPasswordInput" class="form-label">
                        <span class="label-txt">Password</span>
                    </label>
                    <input id="userPasswordInput" type="password" class="input-field" name="password" placeholder="">
                </div>
                <div class="login-input-row">
                    <button class="btn block-btn btn-login">ログイン</button>
                </div>
            </div>

        </form>
    </div>
</main>
@endsection