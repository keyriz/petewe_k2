<table>
    <thead>
        <tr>
            <th>Nomor</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $index => $value)
        <tr>
            <td>
                {{ $value->nis }}
            </td>
            <td>
                {{ $value->nama }}
            </td>
            <td>
                {{ $value->kelas }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
