<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
            <style type="text/css">
                body{
                    font-family: Arial, Helvetica, sans-serif;
                    color: black;
                }
            </style>
    </head>
    <body>
        <center>
            <h1>PT. INDONESIA MAJU</h1>
            <h2>Laporan Kehadiran Pegawai</h2>
        </center>

        <?php 
        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        ?>

        <table>
            <tr>
                <td><b>Bulan</b></td>
                <td><b>:</b></td>
                <td><b><?php echo $bulan ?></b></td>
            </tr>
            <tr>
                <td><b>Tahun</b></td>
                <td><b>:</b></td>
                <td><b><?php echo $tahun ?></b></td>
            </tr>
        </table>

        <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Hadir</th>
            <th class="text-center">Sakit</th>
            <th class="text-center">Alpha</th>
        </tr>

        <?php $no=1; foreach($lap_kehadiran as $l) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $l->nik ?></td>
            <td><?php echo $l->nama_pegawai ?></td>
            <td><?php echo $l->jenis_kelamin ?></td>
            <td><center><?php echo $l->nama_jabatan ?></center></td>
            <td><?php echo ($l->hadir)?></td>
            <td><?php echo ($l->sakit)?></td>
            <td><?php echo ($l->alpha)?></td>
                    
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p><b>Bekasi, <?php echo date("d M Y")?><br> Finance </p>
                <br>
                <br>
                <p>______________________________</p>
                <p>Tanda Tangan</p>
            </td>
        </tr>
    </table>

    </body>
</html>

<script type="text/javascript">
    window.print();
</script>