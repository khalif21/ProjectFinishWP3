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
            <h2>Slip Gaji Pegawai</h2>
            <hr style="width: 50%; border-width: 5px; color: black">
        </center>


<?php foreach ($potongan as $p) {
          $potongan=$p->jml_potongan;
        }?>



<?php foreach($print_slip as $ps) : ?>

    <?php $potongan_gaji=$ps->alpha * $potongan; ?>

        <table style="width:100%">
        <tr>
                <td width="15%"><b>Nama Pegawai</b></td>
                <td width="2%"><b>:</b></td>
                <td><b><?php echo $ps->nama_pegawai ?></b></td>
            </tr>
            <tr>
                <td><b>NIK</b></td>
                <td><b>:</b></td>
                <td><b><?php echo $ps->nik ?></b></td>
            </tr>
            <tr>
                <td><b>Jabatan</b></td>
                <td><b>:</b></td>
                <td><b><?php echo $ps->nama_jabatan ?></b></td>
            </tr>
            <tr>
                
                <td><b>Bulan</b></td>
                <td><b>:</b></td>
                <td><b><?php echo substr($ps->bulan, 0,2)  ?></b></td>
            </tr>
            <tr>
                <td><b>Tahun</b></td>
                <td><b>:</b></td>
                <td><b><?php echo substr($ps->bulan, 2,4)  ?></b></td>
            </tr>
        </table>
        <?php endforeach; ?>

        <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center" width="5%">No</th>
            <th class="text-center">Keterangan</th>
            <th class="text-center">Jumlah</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Gaji Pokok</td>
            <td>Rp. <?php echo number_format($ps->gaji_pokok,0,',','.') ?></td>
            <tr>
            <td>2</td>
            <td>Tunjangan Transportasi</td>
            <td>Rp. <?php echo number_format($ps->tj_transport,0,',','.') ?></td>
            </tr>
            <tr>
            <td>3</td>
            <td>Uang Makan</td>
            <td>Rp. <?php echo number_format($ps->uang_makan,0,',','.') ?></td>
            </tr>
            <tr>
            <td>4</td>
            <td>Potongan</td>
            <td>Rp. <?php echo number_format($potongan_gaji,0,',','.') ?></td>
            </tr>
            <tr>
            <th colspan="2" style="text-align: right;">Total Gaji</th>
            <th>Rp.<?php echo number_format($ps->gaji_pokok + $ps->tj_transport + $ps->uang_makan - $potongan_gaji,0,',','.')?></th>
            </tr>
        </tr>
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