<form id="inputForm" action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="input-form-block">
        <div class="input-form-body">

            <div class="row">
                <div class="col">
                    <label for="userNameInput" class="form-label">
                        <span class="label-txt">名前</span>
                        <span class="required-label">必須</span>
                    </label>
                    <input id="userNameInput" type="text"
                        class="input-field @error('name'){{ 'is-invalid' }}@enderror" name="name"
                        value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="userEmailInput" class="form-label">
                        <span class="label-txt">E-mail</span>
                        <span class="required-label">必須</span>
                    </label>
                    <input id="userEmailInput" type="email"
                        class="input-field @error('email'){{ 'is-invalid' }}@enderror" name="email"
                        value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="userPermissionIdInput" class="form-label">
                        <span class="label-txt">権限</span>
                        <span class="required-label">必須</span>
                    </label>
                    <select id="userPermissionIdInput"
                        class="form-select @error('permission_id'){{ 'is-invalid' }}@enderror" name="permission_id">
                        <option value=""></option>
                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->id }}" @selected(old('permission_id', $user->permission->id) == $permission->id)>
                                {{ $permission->display_name }}</option>
                        @endforeach
                    </select>
                    @error('permission_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="employeeMobileNumberInput" class="form-label">
                        <span class="label-txt">携帯番号</span>
                    </label>
                    <input id="employeeMobileNumberInput" type="text"
                        class="input-field @error('mobile_number'){{ 'is-invalid' }}@enderror" name="mobile_number"
                        value="{{ old('mobile_number', $user->employee->mobile_number) }}">
                    @error('mobile_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="employeeRemarkInput" class="form-label">
                        <span class="label-txt">備考</span>
                    </label>
                    <textarea id="employeeRemarkInput" rows="5" class="input-field @error('remark'){{ 'is-invalid' }}@enderror"
                        name="remark">{{ old('remark', $user->employee->remark) }}</textarea>
                </div>
            </div>

        </div>
    </div>
</form>
