<!DOCTYPE html>
<html>

<head>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href=" css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title> Form </title>

<body>
    <div class="container">
        <h3>Form</h3>
        
        <form method="POST" action="TM_7hasil.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" class="form-control" id="Nama">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat :</label>
                <input type="text" name="Alamat" class="form-control" id="Alamat">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin :</label> &nbsp;
                <input type="radio" name="jk" id="jk" value="Laki-laki">Laki-laki &nbsp;
                <input type="radio" name="jk" id="jk" value="Perempuan">Perempuan &nbsp;
            </div>
            <div class="form-group">
                <label for="Goldar">Gol.Darah :</label>
                <select class="form-control" name="Goldar" id="Goldar">
                    <option disabled hidden selected>Pilih Golongan Darah</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>
            <label class="form-check-label">Hobby :</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="Main HP" name="Hobby[]">Main HP
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="Jalan-jalan" name="Hobby[]">Jalan-jalan
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="Belanja" name="Hobby[]">Belanja
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="Ngoding" name="Hobby[]">Ngoding
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="Nonton Film" name="Hobby[]">Nonton Film
                </label>
            </div>
            <div class="form-group">
                <label for="Ket">Keterangan :</label>
                <textarea type="text" name="Ket" cols="40" rows="7" class="form-control" id="Ket"></textarea>
                <!-- <textarea name="comment" cols="40" rows="7" align="center"></textarea> -->
            </div>
            <button type="Submit" class="btn btn-primary" name="Submit">Simpan</button>
        </form>
    </div>
</body>
</html>