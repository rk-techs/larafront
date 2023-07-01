@extends('layouts.app')

@section('title')
    form | {{ config('app.name') }}
@endsection

@section('content')
    <main class="page-main">
        <div class="main-container">

            <div class="title page-title">
                Menu
            </div>

            <form>
                <div class="form-group">
                    <label class="form-label" for="text-input">
                        <span class="label-txt">Label Name</span>
                        <span class="required-dot">*</span>
                    </label>
                    <input type="text" id="text-input" class="input-field invalid-input" required>
                    <div class="invalid-feedback">
                        <span class="material-symbols-outlined">
                            error
                        </span>
                        <span class="error-msg">
                            Error message here.
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email-input">
                        <span class="label-txt">Label Name</span>
                        <span class="required-dot">*</span>
                    </label>
                    <input type="email" id="email-input" class="input-field" required>
                    <div class="invalid-feedback">
                        <span class="material-symbols-outlined">
                            error
                        </span>
                        <span class="error-msg">
                            Error message here.
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password-input">
                        <span class="label-txt">Label Name</span>
                        <span class="required-dot">*</span>
                    </label>
                    <input type="password" id="password-input" class="input-field" required>
                    <div class="invalid-feedback">
                        <span class="material-symbols-outlined">
                            error
                        </span>
                        <span class="error-msg">
                            Error message here.
                        </span>
                    </div>
                </div>

                <!-- Date Input -->
                <div class="form-group">
                    <label class="form-label" for="date-input">
                        <span class="label-txt">Label Name</span>
                        <span class="required-dot">*</span>
                    </label>
                    <input type="date" id="date-input" class="input-field" required>
                    <div class="invalid-feedback">
                        <span class="material-symbols-outlined">
                            error
                        </span>
                        <span class="error-msg">
                            Error message here.
                        </span>
                    </div>
                </div>

                <!-- Time Input -->
                <div class="form-group">
                    <label class="form-label" for="time-input">
                        <span class="label-txt">Label Name</span>
                        <span class="required-dot">*</span>
                    </label>
                    <input type="time" id="time-input" class="input-field" required>
                    <div class="invalid-feedback">
                        <span class="material-symbols-outlined">
                            error
                        </span>
                        <span class="error-msg">
                            Error message here.
                        </span>
                    </div>
                </div>

                <!-- Checkbox Input -->
                <div class="form-group">
                    <label><input type="checkbox" id="checkbox-input" class="input-field">Check this box</label>
                </div>

                <!-- Radio Button Input -->
                <div class="form-group">
                    <label>
                        <input type="radio" name="radio-input" class="input-field" required>Option 1
                    </label>
                    <label>
                        <input type="radio" name="radio-input" class="input-field" required>Option 2
                    </label>
                    <div class="invalid-feedback">
                        <span class="material-symbols-outlined">
                            error
                        </span>
                        <span class="error-msg">
                            Error message here.
                        </span>
                    </div>
                </div>

                <!-- Select Box -->
                <div class="form-group">
                    <label class="form-label" for="select-input">
                        <span class="label-txt">Label Name</span>
                        <span class="required-dot">*</span>
                    </label>
                    <select id="select-input" class="input-field" required>
                        <option value="">Please select an option</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                    <div class="invalid-feedback">
                        <span class="material-symbols-outlined">
                            error
                        </span>
                        <span class="error-msg">
                            Error message here.
                        </span>
                    </div>
                </div>

            </form>

        </div>
    </main>
@endsection
