<?php
    $NamaLengkap = "";
    $Kelas = '';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $NamaLengkap = dataType($_POST['NamaLengkap']);
        $Kelas = dataType($_POST['Kelas']);
    }
    function dataType($dataKelas)
    {
        $inputData = trim($dataKelas);
        $inputData = stripslashes($dataKelas);
        $inputData = htmlspecialchars($dataKelas);
        return $inputData;
    }
    ?>

   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
           <label for="username">Username</label>
           <input type="text" id="Username" name="NamaLengkap" placeholder="Masukkan Nama" />
        </div>
        <div style="margin-bottom: 3px;">
           <label for="username">Kelas</label>
           <input type="number" id="Kelas" name="Kelas" placeholder="Masukkan Kelas " />
        </div>
        <input type="submit" value="Simpan">
   </form>