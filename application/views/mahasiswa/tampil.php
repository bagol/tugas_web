<div class="row justify-content-center">
    <div class="col-md-10">
    <h1 class="text-center" >Data Mahasiswa</h1>
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
    <a href="<?= base_url();?>/mahasiswa"class="btn btn-primary mb-2"> Tambah Data Mahasiswa</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; 
        foreach($mhs->result() as $b){
        ?>
            <tr>
            <th scope="row"><?= $no;?></th>
            <td><?= $b->nim; ?></td>
            <td><?= $b->nama; ?></td>
            <td><?= $b->alamat; ?></td>
            <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?= $b->nim; ?>">Edit</button> ||
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalHapus<?= $b->nim; ?>">Hapus</button>
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

<!-- Modal Edit Mhs -->
<?php foreach($mhs->result() as $modal){?>
    <div class="modal fade" id="exampleModal<?= $modal->nim; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="<?=base_url();?>mahasiswa/editMhs" method="post">
        <table>
            <tr>
                <td width="150px">
                    <label>NIM</label>
                </td>
                <td>
                    <div class="form-group">
                        <input name="nim" type="text" class="form-control" placeholder="Masukan NIM" style="width:125px;" maxlength="10" value="<?= $modal->nim; ?>"> 
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
                    <label>Tanggal Lahir</label>
                </td>
                <td> 
                    <div class="form-group">
                        <input name="tgl_lahir" type="date" class="form-control" placeholder="dd/mm/yyyy" style="width:145px;" maxlength="10" value="<?= $modal->tanggal_lahir; ?>"> 
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
                <td><label >Jenis Kelamin</label></td>
                <td>
                    <div class="form-group">
                    <select name="jenis_kelamin" class="form-control" style="width:125px;">
                    <option value="Pria" <?php if($modal->jenis_kelamin === "Pria"){echo 'selected';} ?>>Pria</option>
                    <option value="Wanita" <?php if($modal->jenis_kelamin === "Wanita"){echo 'selected';} ?>>Wanita</option>
                    <option value="another">another</option>
                    </select>
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
<?php foreach($mhs->result() as $hapus){?>
<div class="modal fade" id="exampleModalHapus<?= $hapus->nim;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apa Anda Yakin Ingin Menghapus NIM <u><?= $hapus->nim.'</u> ('.$hapus->nama.') ?';?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="<?= base_url();?>mahasiswa/hapusMhs/<?=$hapus->nim?>" class="btn btn-primary"> Iya</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>