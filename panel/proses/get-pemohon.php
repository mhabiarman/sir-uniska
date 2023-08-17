<?php
    include("../../koneksi.php");
        if ($_GET['id_pemohon']==''){

        }else{
        $kueri = mysqli_query($conn, "SELECT * FROM tb_pemohon WHERE id_pemohon='$_GET[id_pemohon]'");
        $tampil = mysqli_fetch_array($kueri);
        $data = array(
                    'jabatan'      =>  $tampil['jabatan'],
                    'nama_perusahaan'      =>  $tampil['nama_perusahaan'],
                    );
         echo json_encode($data);
        }
?>