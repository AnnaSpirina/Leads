<div class="form-container">
    <form id="form_authorization" action="{{route('authorization')}}" method="post">
        @if(session('status'))
            <small class="ok">Пароль успешно обновлён</small>
        @endif
        <br>
        <label>Email:</label>
        <input type="email" id="email_authorization" name="email" pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/" value="{{old('email')}}" maxlength="40" required>
        @error('email')
            <small class="error">{{$message}}</small>
        @enderror

        <label>Пароль:</label>
        <input type="password" id="password_authorization" name="password" minlength="6"  maxlength="6" placeholder="Введите пароль из 6 символов" required>
        @error('password')
            <small class="error">{{$message}}</small>
        @enderror
        <br><br>

        <small>Ещё не зарегистрированы? <a href="{{route('registration')}}">Зарегистрироваться</a></small><br><br>
        <small><a href="{{route('password.request')}}">Забыли пароль?</a></small><br><br>

        @csrf
        <button type="submit">Войти</button>
    </form>
</div>