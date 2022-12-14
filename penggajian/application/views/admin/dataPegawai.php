    <!-- Begin Page Content -->
    <div class="container-fluid" style="margin-bottom: 100px">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>

</div>
        <?php echo $this->session->flashdata('pesan') ?>
        
        <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataPegawai/tambahData') ?>">
                <i class="fas fa-plus"></i>Tambah Pegawai</a>

        <table class="table table-striped table-border">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">NIK</th>
                <th class="text-center">Nama Pegawai</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Tanggal Masuk</th>
                <th class="text-center">Status</th>
                <th class="text-center">Photo</th>
                <th class="text-center">Hak Akses</th>
                <th class="text-center">Action</th>
            </tr>

            <?php $no=1; foreach($pegawai as $p) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->nik ?></td>
                <td><?php echo $p->nama_pegawai ?></td>
                <td><?php echo $p->jenis_kelamin ?></td>
                <td><?php echo $p->jabatan ?></td>
                <td><?php echo $p->tanggal_masuk ?></td>
                <td><?php echo $p->status ?></td>
                <td><img src="<?php echo base_url().'assets/photo/' .$p->photo ?>" width="70px" ></td>
                
                    <?php if($p->hak_akses=='1'){ ?>
                        <td>Admin</td>
                        <?php }else{ ?>
                            <td>Pegawai</td>
                        <?php } ?>
                
            <td>
                <center>
                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPegawai/updateData/'.$p->id_pegawai) ?>">
                <i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Yakin menghapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPegawai/deleteData/'.$p->id_pegawai) ?>">
                <i class="fas fa-trash"></i></a>
                </center>
            </td>
            </tr>
            
                <?php endforeach; ?>
        </table>
    
        
    </div>
    

</div>


