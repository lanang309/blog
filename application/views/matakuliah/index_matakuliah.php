<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <script>
        function hapusMatakuliah(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php 
$username = $this->session->userdata('username');
if($username){
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
<h3 class="col md-12"><center>Matakuliah</center></h3>
<div class="col-md-12">
    <table style="text-align: center;" border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $matkul) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $matkul -> nama ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/matakuliah/detail_matakuliah/$matkul->id")?>" 
                    class="btn btn-outline-success">Detail</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/edit_matakuliah/$matkul->id") ?> 
                    class="btn btn-outline-warning" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/delete_matakuliah/$matkul->id") ?> 
                    class="btn btn-outline-danger"
                    onclick="return hapusMatakuliah('Anda yakin ingin menghapus Nama Mata Kuliah <?php echo $matkul->nama ?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>            
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/matakuliah/form_matakuliah") ?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>