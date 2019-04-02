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
                <a href="" class="btn btn-warning">Edit</a> ||
                <a href="<?=base_url();?>/mahasiswa/hapusMhs/<?= $b->nim;?>" class="btn btn-danger">Hapus</a>
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