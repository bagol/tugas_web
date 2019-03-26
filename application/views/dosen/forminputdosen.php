
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
        <h1 class="text-center">Input Data Dosen</h1>
        <hr>
        <form action="<?=base_url();?>dosen/tampilDosen" method="post">
        <table>
            <tr>
                <td width="150px"><label>NID</label></td>
                <td><div class="form-group"><input name="nid" type="text" class="form-control" placeholder="Masukan NID" style="width:125px;" maxlength="10"> </div></td>
            </tr>
            <tr>
                <td><label >Nama</label></td>
                <td><div class="form-group">
                <input name="nama" type="text" class="form-control" placeholder="Masukan Nama" style="width:280px;" maxlength="30"></div>
                </td> 
            </tr>
            <tr>
                <td><label >Kode Mata Kuliah</label></td>
                <td><div class="form-group">
                <input name="kode_matkul" type="text" class="form-control" placeholder="Masukan Kode Mata Kuliah" style="width:280px;" maxlength="10"></div>
                </td> 
            </tr>
            <tr>
                <td><label >No. Tlpn</label></td>
                <td><div class="form-group">
                <input name="no_tlpn" type="text" class="form-control" placeholder="Masukan No. Telepon" style="width:280px;" maxlength="12"></div>
                </td> 
            </tr>
            <tr>
                <td><label >Alamat</label></td>
                <td><div class="form-group"><textarea name="alamat" class="form-control" rows="2" style="width:280px;"></textarea></div></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="btn btn-primary" value="kirim" style="width:430px;"></td>
            </tr>
        </table>
        </form>
        </div>
    </div>
   
</div>
