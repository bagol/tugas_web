
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
        <h1 class="text-center">Input Data Mata Kuliah</h1>
        <hr>
        <form action="<?= base_url();?>mataKuliah/tampilMatakuliah" method="post">
        <table>
            <tr>
                <td width="150px"><label>Kode Mata Kuliah</label></td>
                <td><div class="form-group"><input name="kode_matkul" type="text" class="form-control" placeholder="Kode" style="width:122px;" maxlength="10"> </div></td>
            </tr>
            <tr>
                <td><label >Nama Mata Kuliah</label></td>
                <td><div class="form-group">
                <input name="nama_matkul" type="text" class="form-control" placeholder="Masukan Nama Mata Kuliah" style="width:280px;" maxlength="30"></div>
                </td> 
            </tr>
            <tr>
                <td><label >Jumlah SKS</label></td>
                <td>
                    <div class="form-group">
                    <select name="jumlah_sks" class="form-control" style="width:125px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label >Semester</label></td>
                <td>
                    <div class="form-group">
                    <select name="semester" class="form-control" style="width:125px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label >Fakultas</label></td>
                <td><div class="form-group">
                <input name="fakultas" type="text" class="form-control" placeholder="Masukan Fakultas" style="width:280px;" maxlength="12"></div>
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
