<HTML>
    <HEAD>
        <title>Tambah Data Mahasiswa</title>
    </HEAD>
    <BODY>
        <h1>Tambah Data Mahasiswa</h1>
        <?php
            $NRP = $_POST['NRP'];
            $Nama = $_POST['Nama'];
            $Alamat = $_POST['file_foto'];
            $ID_Jur = $_POST['ID_Jur'];
            
			$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
            mysqli_select_db($conn,"praktikum");
			
			mysqli_select_db($conn,"praktikum");
            $hasil=mysqli_query($conn,"select Nama from jurusan where ID='$ID_Jur'");
            $row=mysqli_fetch_array($hasil);
            $jurusan=$row[0];
            echo "NRP       : $NRP <br>";
            echo "Nama      : $Nama <br>";
            echo "Alamat    : $Alamat <br>";
            echo "Jurusan   : $ID_Jur <br>";
			
            $sqlstr="insert into mahasiswa (NRP,Nama,Alamat,ID_Jur) values ('$NRP','$Nama','$Alamat','$ID_Jur')";
            $hasil = mysqli_query($conn,$sqlstr);
            echo "Simpan data mahasiswa berhasil dilakukan<br>";
        ?>
    </BODY>
</HTML>