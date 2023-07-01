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
                    <label class="form-label" for="text-input">Text Input: <span class="required-dot">*</span></label>
                    <input type="text" id="text-input" class="input-field" required>
                    <div id="text-input-validation-msg" class="validation-msg">This field is required</div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email-input">Email Input: <span class="required-dot">*</span></label>
                    <input type="email" id="email-input" class="input-field" required>
                    <div id="email-input-validation-msg" class="validation-msg">Please enter a valid email</div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password-input">Password Input: <span class="required-dot">*</span></label>
                    <input type="password" id="password-input" class="input-field" required>
                    <div id="password-input-validation-msg" class="validation-msg">Password must be at least 8 characters
                    </div>
                </div>

                <!-- Date Input -->
                <div class="form-group">
                    <label class="form-label" for="date-input">Date Input: <span class="required-dot">*</span></label>
                    <input type="date" id="date-input" class="input-field" required>
                    <div id="date-input-validation-msg" class="validation-msg">Please select a date</div>
                </div>

                <!-- Time Input -->
                <div class="form-group">
                    <label class="form-label" for="time-input">Time Input: <span class="required-dot">*</span></label>
                    <input type="time" id="time-input" class="input-field" required>
                    <div id="time-input-validation-msg" class="validation-msg">Please select a time</div>
                </div>

                <!-- Checkbox Input -->
                <div class="form-group">
                    <label><input type="checkbox" id="checkbox-input" class="input-field"> Check this box</label>
                </div>

                <!-- Radio Button Input -->
                <div class="form-group">
                    <label>
                        <input type="radio" name="radio-input" class="input-field" required> Option 1
                    </label>
                    <label>
                        <input type="radio" name="radio-input" class="input-field" required> Option 2
                    </label>
                    <div id="radio-input-validation-msg" class="validation-msg">Please select an option</div>
                </div>

                <!-- Select Box -->
                <div class="form-group">
                    <label class="form-label" for="select-input">Select Input: <span class="required-dot">*</span></label>
                    <select id="select-input" class="input-field" required>
                        <option value="">Please select an option</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                    <div id="select-input-validation-msg" class="validation-msg">Please select an option</div>
                </div>

                <div class="form-group">
                    <button type="submit" class="form-btn">Submit</button>
                </div>
            </form>

        </div>
    </main>
@endsection
