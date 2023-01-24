<table>
    <thead>
        <tr>
            <th>Kode Tender</th>
            <th>Kode RUP</th>
            <th>Nama Paket</th>
            <th>PAGU</th>
            <th>HPS</th>
            <th>Satuan Kerja</th>
            <th>Tahap</th>
            <th>Peserta</th>
        </tr>
    </thead>
    <tbody>
    @foreach($informasitender as $it)
        <tr>
            <td>{{ $it->kode_tender }}</td>
            <td>{{ $it->kode_rup }}</td>
            <td>{{ $it->nama_paket }}</td>
            <td>{{ $it->pagu }}</td>
            <td>{{ $it->hps }}</td>
            <td>{{ $it->satuan_kerja }}</td>
            <td>{{ $it->tahap }}</td>
            <td>{{ $it->peserta }}</td>
        </tr>
    @endforeach
    </tbody>
</table>