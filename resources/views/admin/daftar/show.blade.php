

            <table class="table table-hover">
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Layanan</th>
                    <th>TTL</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Keterangan</th>

                </tr>
                    <td>{{ $model->id }}</td>
                    <td>{{ $model->nama }}</td>
                    <td>{{ $model->nik }}</td>
                    <td>{{ $model->alamat }}, {{ $model->kelurahan }}</td>
                    <td>{{ $model->kontak }}</td>
                    <td>{{ $model->layanan_id }}</td>
                    <td>{{ $model->tempat }},{{ $model->tgllhr }}</td>
                    <td>{{ $model->jk }}</td>
                    <td>{{ $model->pekerjaan }}</td>
                    <td>{{ $model->keterangan }}</td>


                <tr>

                </tr>
            </table>
