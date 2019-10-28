<!DOCTYPE html>
<html>

<head>
    <title>Faktorial</title>
</head>

<body>
    <form name="form" method="post">
    <p>
                <label>Masukkan angka : </label>
                <input type="text" name="Angka" size="5" />
    </p>
    <p>
                    <input type="submit" name="hitung" value="hitung" />
    </p>
        <?php
error_reporting(0);
if($_POST['hitung']!=''){
            $angka=$_POST['Angka'];

            function faktorial($angka){
            if($angka<=1){
                        $hasil=1;
                        return $hasil; 
            }else if($angka>1){
                        for($i=1; $i<=$angka; $i++){
                             $hasil=$angka * faktorial($angka-1);
                        }
                        return $hasil;
            }
}
         echo "Angka : ".$angka."<br>";
   echo "Faktorial dari "." ".$angka." "."adalah :"." ".faktorial($angka);
}
?>
    </form>
</body>

</html>