<div class="row justify-content-center">
    <div class="col-md-10">
    <h1 class="text-center" >Data Dosen</h1>
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
    <a href="<?= base_url();?>/dosen"class="btn btn-primary mb-2"> Tambah Data Dosen</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">NIDN</th>
            <th scope="col">Nama</th>
            <th scope="col">Kode Matakuliah</th>
            <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; 
        foreach($dosen->result() as $b){
        ?>
            <tr>
            <th scope="row"><?= $no;?></th>
            <td><?= $b->nidn; ?></td>
            <td><?= $b->nama; ?></td>
            <td><?= $b->kode_matakuliah; ?></td>
            <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?= $b->nidn; ?>">Edit</button> ||
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalHapus<?= $b->nidn; ?>">Hapus</button>
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
<?php foreach($dosen->result() as $modal){?>
    <div class="modal fade" id="exampleModal<?= $modal->nidn; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data MahasiswaDosen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="<?=base_url();?>dosen/editdosen" method="post">
        <table>
            <tr>
                <td width="150px">
                    <label>NIDN</label>
                </td>
                <td>
                    <div class="form-group">
                        <input name="nidn" type="text" class="form-control" placeholder="Masukan NIM" style="width:125px;" maxlength="10" value="<?= $modal->nidn; ?>"> 
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
                    <label>Kode Matakuliah</label>
                </td>
                <td> 
                    <div class="form-group">
                        <input name="kode_matakuliah" type="text" class="form-control" placeholder="Nama Matakuliah" style="width:145px;" maxlength="10" value="<?= $modal->kode_matakuliah; ?>"> 
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label >Alamat</label>
                </td>
                <td>
                    <div class="form-group">
                        <textarea name="alamat" class="form-control" rows="2" style="width:280px;"><?= $modal->alamat; ?></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label >No Telepon</label></td>
                <td>
                <div class="form-group">
                        <input name="no_tlpn" type="text" class="form-control" placeholder="No Telepon" style="width:145px;" maxlength="10" value="<?= $modal->no_tlpn; ?>"> 
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
<?php foreach($dosen->result() as $hapus){?>
<div class="modal fade" id="exampleModalHapus<?= $hapus->nidn;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apa Anda Yakin Ingin Menghapus NIDN <u><?= $hapus->nidn.'</u> ('.$hapus->nama.') ?';?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="<?= base_url();?>dosen/hapusDosen/<?=$hapus->nidn?>" class="btn btn-primary"> Iya</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>