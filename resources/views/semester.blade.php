<table>
    <thead>
        <tr>
            <th>Nomor</th>
            <th>ID</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($semester as $index => $value)
        <tr>
            <td>
                {{ $value->id_semester }}
            </td>
            <td>
                {{ $value->status }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
