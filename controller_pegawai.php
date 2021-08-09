<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari table jenis kelamin L
     function GetData_All_L(){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where jns_kel='L'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data dari table status menikah
    function GetData_All_SM(){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where status='M'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari table status belum menikah
     function GetData_All_BM(){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where status='B'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data dari usia 20 sampai 30 tahun
    function GetData_All_U20_30(){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS usia FROM pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            if (($this->data['usia']>=20)&&($this->data['usia']<=30)) {
                $this->result[]=$this->data;
            }
        }
        return $this->result;
    }

      // Method untuk mengambil semua data dari usia 31 sampai 45 tahun
      function GetData_All_U31_45(){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS usia FROM pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            if (($this->data['usia']>=31)&&($this->data['usia']<=45)) {
                $this->result[]=$this->data;
            }
        }
        return $this->result;
    }

     // Method untuk mengambil semua data dari masa kerjanya 1 sampai 5 tahun
     function GetData_All_K1_5(){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS masa_kerja FROM pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            if (($this->data['masa_kerja']>=1)&&($this->data['masa_kerja']<=5)) {
                $this->result[]=$this->data;
            }
        }
        return $this->result;
    }

    // Method untuk mengambil semua data dari masa kerjanya 6 sampai 10 tahun
    function GetData_All_K6_10(){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS masa_kerja FROM pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            if (($this->data['masa_kerja']>=6)&&($this->data['masa_kerja']<=10)) {
                $this->result[]=$this->data;
            }
        }
        return $this->result;
    }

    // Method untuk mengambil semua data dari masa kerjanya 11 sampai 25 tahun
    function GetData_All_K11_25(){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS masa_kerja FROM pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            if (($this->data['masa_kerja']>=11)&&($this->data['masa_kerja']<=25)) {
                $this->result[]=$this->data;
            }
        }
        return $this->result;
    }


}


?>