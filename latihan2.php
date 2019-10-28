<!DOCTYPE html>
<html>
<head>
    <title>Harga Bet</title>
</head>

<body>
    <form name="form" method="GET" action>
        <label for="nama">Nama  : </label>
        <input type="text" name="nama"> <br>
        <label for="color">Color    : </label>
        <select name="color" id="">
            <option value="red">None</option>
            <option value="green">Green</option>
            <option value="black">Black</option>
            <option value="blue">Blue</option>
            <option value="white">White</option>
            
        </select>
    <br>
        <input type="submit"name="submit" value="Submit">
    </form>
    
    <?php
        if (isset($_GET['submit'])){
            $nm=$_GET['nama'];
            $cl=$_GET['color'];
            function harga($nama){
                if(strlen($nama>20)){
                    return ((strlen($nama)) * 700);
                } elseif(strlen($nama>11)){
                    return((strlen($nama)) * 500);
                } else{
                    return ((strlen($nama)) * 300);
                }
            }
            echo "<br>";
            echo "<font color='$cl'>Nama = $nm <br>";
            echo "Harga bet nama = $nm adalah " .harga($nm);
            
        }
    ?>
</body>
</html>