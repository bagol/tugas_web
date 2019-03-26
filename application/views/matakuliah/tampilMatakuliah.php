<div class="row justify-content-center">
    <div class="col-md-8">
    <h1 class="text-center" >Data Dosen</h1>
    <hr>
    <table>
        <tr>
            <td width="180px">Kode Matakuliah</td>
            <td>:</td>
            <td><?= $matkul['kode'];?></td>
        </tr>
        <tr>
            <td>Nama Matakuliah</td>
            <td>:</td>
            <td><?= $matkul['nama'];?></td>
        </tr><tr>
            <td>Jumlah SKS</td>
            <td>:</td>
            <td><?= $matkul['sks'];?></td>
        </tr><tr>
            <td>Semester</td>
            <td>:</td>
            <td><?= $matkul['semester'];?></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><?= $matkul['fakultas'];?></td>
        </tr>
    </table>
    </div>
</div>