<div class="row justify-content-center">
    <div class="col-md-10">
    <h1 class="text-center" >Data Matakuliah</h1>
    <hr>
    <?php if($this->session->flashdata('pesan_berhasil')){ ?>
        <div class="alert alert-success" role="alert">
           <?= $this->session->flashdata('pesan_berhasil') ?>
        </div>
    <?php }if($this->session->flashdata('pesan_gagal')) {?>
        <div class="alert alert-danger" role="alert">
        <?= $this->session->flashdata('pesan_gagal') ?>
        </div>
    <?php } ?>
    <a href="<?= base_url();?>/mataKuliah"class="btn btn-primary mb-2"> Tambah Data Matakuliah</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Matakuliah</th>
            <th scope="col">Nama</th>
            <th scope="col">Jumlah SKS</th>
            <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; 
        foreach($matkul->result() as $b){
        ?>
            <tr>
            <th scope="row"><?= $no;?></th>
            <td><?= $b->kode_matakuliah; ?></td>
            <td><?= $b->nama; ?></td>
            <td><?= $b->sks; ?></td>
            <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?= $b->kode_matakuliah; ?>">Edit</button> ||
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalHapus<?= $b->kode_matakuliah; ?>">Hapus</button>
            </td>
            </tr>
        <?php 
        $no++;
        }; 
        ?>
        </tbody>
    </table>
    </div>
</div>

<!-- Modal Edit Dosen -->
<?php foreach($matkul->result() as $modal){?>
    <div class="modal fade" id="exampleModal<?= $modal->kode_matakuliah; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data MahasiswaDosen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="<?=base_url();?>mataKuliah/editmatkul" method="post">
        <table>
            <tr>
                <td width="150px">
                    <label>Kode Matakuliah</label>
                </td>
                <td>
                    <div class="form-group">
                        <input name="kode_matakuliah" type="text" class="form-control" placeholder="Masukan Kode Matakuliah" style="width:125px;" maxlength="10" value="<?= $modal->kode_matakuliah; ?>"> 
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label >Nama</label>
                </td>
                <td>
                    <div class="form-group">
                        <input name="nama" type="text" class="form-control" placeholder="Masukan Nama" style="width:280px;" maxlength="30" value="<?= $modal->nama; ?>">
                    </div>
                </td> 
            </tr>
            <tr>
                <td> 
                    <label>Jumlah SKS</label>
                </td>
                <td> 
                    <div class="form-group">
                    <select name="jumlah_sks" class="form-control" style="width:125px;">
                    <option value="1" <?php if($modal->sks == 1){echo "selected";} ?>>1</option>
                    <option value="2" <?php if($modal->sks == 2){echo "selected";} ?>>2</option>
                    <option value="3" <?php if($modal->sks == 3){echo "selected";} ?>>3</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label >Semester</label>
                </td>
                <td>
                    <div class="form-group">
                    <div class="form-group">
                    <select name="semester" class="form-control" style="width:125px;">
                    <option value="1" <?php if($modal->semester == 1){echo "selected";} ?>>1</option>
                    <option value="2" <?php if($modal->semester == 2){echo "selected";} ?>>2</option>
                    <option value="3" <?php if($modal->semester == 3){echo "selected";} ?>>3</option>
                    <option value="4" <?php if($modal->semester == 4){echo "selected";} ?>>4</option>
                    <option value="5" <?php if($modal->semester == 5){echo "selected";} ?>>5</option>
                    <option value="6" <?php if($modal->semester == 6){echo "selected";} ?>>6</option>
                    <option value="7" <?php if($modal->semester == 7){echo "selected";} ?>>7</option>
                    <option value="8" <?php if($modal->semester == 8){echo "selected";} ?>>8</option>
                    <option value="9" <?php if($modal->semester == 9){echo "selected";} ?>>9</option>
                    <option value="10" <?php if($modal->semester == 10){echo "selected";} ?>>10</option>
                    </select>
                    </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label >Fakultas</label></td>
                <td>
                <div class="form-group">
                        <input name="fakultas" type="text" class="form-control" placeholder="No Telepon" style="width:145px;" maxlength="30" value="<?= $modal->fakultas; ?>"> 
                </div>
                </td>
            </tr>
        </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
        </div>
    </div>
    </div>
<?php } ?>


<!-- Modal -->
<?php foreach($matkul->result() as $hapus){?>
<div class="modal fade" id="exampleModalHapus<?= $hapus->kode_matakuliah;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apa Anda Yakin Ingin Menghapus kode_matakuliah <u><?= $hapus->kode_matakuliah.'</u> ('.$hapus->nama.') ?';?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="<?= base_url();?>MataKuliah/hapusmatkul/<?=$hapus->kode_matakuliah?>" class="btn btn-primary"> Iya</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>