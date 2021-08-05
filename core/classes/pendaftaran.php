<?php

class pendaftaran extends users
{
    // pendaftaran count (home.php)
   

     // Show data pengajuan skripsi
     public function Show_Datapengajuan(){

        $query = "SELECT * FROM pendaftaran where status_pendaftaran = 1 AND nim = '160123456789'";
        // $stmt = $this->db->query($query);
        // return $stmt;
        // $query = "SELECT COUNT(kd_sidang) FROM jadwal_sidang";
        $stmt = $this->db->prepare($query);       
       return $stmt;
    }


    public function ajukanSidang($nim_ajukan,$namaLengkap_ajukan,$judulSkripsi_ajukan,$imgKwitansi,$lokasi_imgKwitansi)
    {
        $query = 'INSERT INTO pendaftaran (nim,nama_lengkap,judul_skripsi,bukti_kwitansi) VALUES (?,?,?,?)';
        $stmt = $this->db->prepare($query);
        $result = $stmt->execute([$nim_ajukan, $namaLengkap_ajukan, $judulSkripsi_ajukan, $imgKwitansi]);        
        $locationfolder = "../assets/imgKwitansi/$imgKwitansi";
        $upload = move_uploaded_file($lokasi_imgKwitansi, $locationfolder);
      
    }

    
}
