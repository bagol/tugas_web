<div class="row justify-content-center">
    <div class="col-md-8">
    <h1 class="text-center" >Data Dosen</h1>
    <hr>
    <table>
        <tr>
            <td width="180px">NIM</td>
            <td>:</td>
            <td><?= $mahasiswa['nim'];?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $mahasiswa['nama'];?></td>
        </tr><tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?= $mahasiswa['tgl_lahir'];?></td>
        </tr><tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $mahasiswa['alamat'];?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $mahasiswa['jenis_kelamin'];?></td>
        </tr>
    </table>
    </div>
</div>