
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>e-mail</th>
                <th>Номер телефона</th>
                <th>Дата создания</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lids as $lid)
                <tr>
                    <td>{{ $lid->id }}</td>
                    <td>{{ $lid->name }}</td>
                    <td>{{ $lid->surname }}</td>
                    <td>{{ $lid->email }}</td>
                    <td>{{ $lid->phone }}</td>
                    <td>{{ $lid->created_at }}</td>
                    <td>
                        <select class="status-select" data-id="{{ $lid->id }}">
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}" {{ $lid->status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <form action="{{ route('lids.delete', $lid->id) }}" method="POST">
                            @csrf
                            <button type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>