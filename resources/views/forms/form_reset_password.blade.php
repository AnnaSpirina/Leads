<div class="form-container">
    <form id="form_reset_password" action="{{route('password.get')}}" method="post">
        <label>Email:</label>
        <input type="email" id="email_reset_password" name="email" pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/" value="{{old('email')}}" placeholder="Введите почту от вашей учётной записи" required maxlength="40">
        @error('email')
            <small class="error">{{$message}}</small>
        @enderror

        @if(session('status'))
            <small class="ok">Ссылка на сброс пароля направлена на вашу почту</small>
            <script>document.getElementById('email_reset_password').disabled = true;</script>
        @endif
        <br><br>

        @csrf
        <button type="submit">Сбросить пароль</button>
    </form>
</div>