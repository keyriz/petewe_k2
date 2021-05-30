<table>
    <thead>
        <tr>
            <th>NIS</th>
            <th>Semester</th>
            <th>Tanggal</th>
            <th>Absen</th>
        </tr>
    </thead>
    <tbody>
        @foreach($absen as $index => $value)
        <tr>
            <td>
                {{ $value->nis }}
            </td>
            <td>
                {{ $value->status }}
            </td>
            <td>
                {{ $value->tanggal }}
            </td>
            <td>
                {{ $value->absen }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
