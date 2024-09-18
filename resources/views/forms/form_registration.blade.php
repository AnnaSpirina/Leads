<div class="form-container">
    <form id="form_registration" action="{{route('registration')}}" method="post">
        <label>Email:</label>
        <input type="email" id="email_registration" name="email" pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/" value="{{old('email')}}" required maxlength="40">
        @error('email')
            <small class="error">{{$message}}</small>
        @enderror

        <label>Пароль:</label>
        <input type="password" id="password_registration" name="password" minlength="6"  maxlength="6" placeholder="Введите пароль из 6 символов" required>
        @error('password')
            <small class="error">{{$message}}</small>
        @enderror
        
        <label>Подтвердите пароль:</label>
        <input type="password" id="confirmPassword_registration" name="password_confirmation" minlength="6" maxlength="6" placeholder="Повторите пароль из 6 символов" required>

        <span class="error" id="error-message_registration" style="display: none">Пароли не совпадают!</span><br><br>

        <small>Уже зарегистрированы? <a href="{{route('authorization')}}">Войти</a></small><br><br>

        @csrf
        <button type="submit">Зарегистрироваться</button>
    </form>
</div>