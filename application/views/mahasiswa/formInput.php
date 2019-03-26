
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
        <h1 class="text-center">Input Data Mahasiswa</h1>
        <hr>
        <form action="<?=base_url();?>mahasiswa/tampilMahasiswa" method="post">
        <table>
            <tr>
                <td width="150px"><label>NIM</label></td>
                <td><div class="form-group"><input name="nim" type="text" class="form-control" placeholder="Masukan NIM" style="width:125px;" maxlength="10"> </div></td>
            </tr>
            <tr>
                <td><label >Nama</label></td>
                <td><div class="form-group">
                <input name="nama" type="text" class="form-control" placeholder="Masukan Nama" style="width:280px;" maxlength="30"></div>
                </td> 
            </tr>
            <tr>
                <td> <label>Tanggal Lahir</label></td>
                <td> <div class="form-group"><input name="tgl_lahir" type="date" class="form-control" placeholder="dd/mm/yyyy" style="width:145px;" maxlength="10"> </div></td>
            </tr>
            <tr>
                <td><label >Alamat</label></td>
                <td><div class="form-group"><textarea name="alamat" class="form-control" rows="2" style="width:280px;"></textarea></div></td>
            </tr>
            <tr>
                <td><label >Jenis Kelamin</label></td>
                <td>
                    <div class="form-group">
                    <select name="jenis_kelamin" class="form-control" style="width:125px;">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                    <option value="another">another</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="btn btn-primary" value="kirim" style="width:430px;"></td>
            </tr>
        </table>
        </form>
        </div>
    </div>
   
</div>
