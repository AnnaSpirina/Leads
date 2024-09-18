<div class="form-container">
    <form id="contact-form"  action="{{route('lids.add')}}" method="post">
        @if(session('success'))
            <small class="ok">{{session('success')}}</small>
        @endif
        <label>Имя:</label>
        <input type="text" id="first-name" name="first-name" required value="{{old('first-name')}}" maxlength=20>
        @error('first-name')
            <small class="error">{{$message}}</small>
        @enderror

        <label>Фамилия:</label>
        <input type="text" id="last-name" name="last-name" required value="{{old('last-name')}}" maxlength=20>
        @error('last-name')
            <small class="error">{{$message}}</small>
        @enderror

        <label>Номер телефона:</label>
        <input type="tel" id="phone" name="phone" required placeholder="+7(___)___-__-__" value="{{old('phone')}}" maxlength=12>
        @error('phone')
            <small class="error">{{$message}}</small>
        @enderror

        <label>Email:</label>
        <input type="email" id="email_form" name="email" pattern="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/" value="{{old('email')}}" maxlength="40" required>
        @error('email')
            <small class="error">{{$message}}</small>
        @enderror

        <label>Текст обращения:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        @error('message')
            <small class="error">{{$message}}</small>
        @enderror

        <br><br>

        @csrf
        <button type="submit">Отправить</button>
    </form>
</div>