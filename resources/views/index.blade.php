@extends('master')
@section('content')
@guest
    @section('title', 'Форма обращения')
    <div class="form_appeals">
        <h2>Заполните форму подачи заявки</h2>
        @include('forms.form')
    </div>
@endguest
@auth
    @section('title', 'Лиды')
    <div class="container">
        <h2>Управление лидами</h2><br>
        <div>
            <p>Общее количество лидов: {{ $lids->count() }}</p>
            <p>Количество лидов в статусе "Новый": {{ $lids->where('status_id', 1)->count() }} </p>
            <p>Количество лидов в статусе "В работе": {{ $lids->where('status_id', 2)->count() }}</p>
            <p>Количество лидов в статусе "Завершен": {{ $lids->where('status_id', 3)->count() }}</p>
        </div><br>
        @if ($lids->count() !== 0)
            @include('tables.table_lids')
        @endif
    </div>
@endauth
@endsection