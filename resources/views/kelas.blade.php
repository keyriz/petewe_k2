<table>
    <thead>
        <tr>
            <th>Nomor</th>
            <th>ID</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelas as $index => $value)
        <tr>
            <td>
                {{ $value->id_kelas }}
            </td>
            <td>
                {{ $value->kelas }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
