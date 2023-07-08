@extends('layouts.app')

@section('title')
    社員 登録 | {{ config('app.name') }}
@endsection

@section('content')
    <main class="layout-main">
        <div class="main-container">

            <div class="content-header-block">
                <div class="title title-h2">
                    社員 登録
                </div>
            </div>

            <form id="inputForm" action="{{ route('user.store') }}" method="POST">
                @csrf
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
                                <label for="userPasswordConfirmationInput" class="form-label">
                                    <span class="label-txt">Password 再確認</span>
                                    <span class="required-label">必須</span>
                                </label>
                                <input id="userPasswordConfirmationInput" type="password" class="input-field" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="employeeMobileNumberInput" class="form-label">
                                    <span class="label-txt">携帯番号</span>
                                </label>
                                <input id="employeeMobileNumberInput" type="text" class="input-field" name="mobile_number" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="employeeRemarkInput" class="form-label">
                                    <span class="label-txt">備考</span>
                                </label>
                                <textarea id="employeeRemarkInput" rows="5" class="input-field" name="remark"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </main>

    <div class="layout-operation">
        <div class="operation-container">
            <button id="inputFormTrigger" class="btn btn-store u-mr-3">保存</button>
            <button class="btn btn-info">キャンセル</button>
        </div>
    </div>

    @push('script')
    <script src="{{ asset('js/input-form.js') }}"></script>
    @endpush

@endsection
