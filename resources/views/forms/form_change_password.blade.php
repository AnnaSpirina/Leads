<div class="form-container">
    <form id="form_change_password" action="{{route('password.change')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{$request->token}}">

        <label>Email:</label>
        <input type="email" id="email_change_password" name="email" value="{{old('email', $request->email)}}" maxlength="40" required readonly>
        @error('email')
            <small class="error">{{$message}}</small>
        @enderror

        <label>Пароль:</label>
        <input type="password" id="password_change_password" name="password" minlength="6"  maxlength="6" placeholder="Введите пароль из 6 символов" required>
        @error('password')
            <small class="error">{{$message}}</small>
        @enderror
        
        <label>Подтвердите пароль:</label>
        <input type="password" id="confirmPassword_change_password" name="password_confirmation" minlength="6" maxlength="6" placeholder="Повторите пароль из 6 символов" required>

        <span class="error" id="error-message_change_password" style="display: none">Пароли не совпадают!</span><br><br>

        @csrf
        <button type="submit">Сменить пароль</button>
    </form>
</div>