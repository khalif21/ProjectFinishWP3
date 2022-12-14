    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
            
</div>

<?php echo $this->session->flashdata('pesan') ?>

<a class="btn btn-sm btn-success mb-2 mt-2" href="<?php echo base_url('admin/potonganGaji/tambahdata') ?>"><i class="fas fa plus"></i>Tambah Data</a>

<table class="table table-bordered table-striped">
<tr>
    <th class="text-center">No</th>
    <th class="text-center">Jenis Potongan</th>
    <th class="text-center">Jumlah Potongan</th>
    <th class="text-center">Action</th>
</tr>

<?php $no=1; foreach($pot_gaji as $p) : ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $p->potongan ?></td>
    <td>Rp. <?php echo number_format($p->jml_potongan,0,',','.') ?></td>
    <td>
        <center>
        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/potonganGaji/updateData/'.$p->id) ?>">
        <i class="fas fa-edit"></i></a>
        <a onclick="retrun confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/potonganGaji/deleteData/'.$p->id) ?>">
        <i class="fas fa-trash"></i></a>
        </center>
    </td>



</tr>


<?php endforeach; ?>


</table>












    

</div>


