<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Hitung IPK Mahasiswa</h2>

<form method="POST">
    <label>Mata Kuliah 1 (Nilai dan SKS):</label>
    <div class="row">
        <select name="nilai1">
            <option value="4">A</option>
            <option value="3">B</option>
            <option value="2">C</option>
            <option value="1">D</option>
            <option value="0">E</option>
        </select>
        <input type="number" name="sks1" placeholder="SKS" required>
    </div>
    <label>Mata Kuliah 2 (Nilai dan SKS):</label>
    <div class="row">
        <select name="nilai2">
            <option value="4">A</option>
            <option value="3">B</option>
            <option value="2">C</option>
            <option value="1">D</option>
            <option value="0">E</option>
        </select>
        <input type="number" name="sks2" placeholder="SKS" required>
    </div>
    <label>Mata Kuliah 3 (Nilai dan SKS):</label>
    <div class="row">
        <select name="nilai3">
            <option value="4">A</option>
            <option value="3">B</option>
            <option value="2">C</option>
            <option value="1">D</option>
            <option value="0">E</option>
        </select>
        <input type="number" name="sks3" placeholder="SKS" required>
    </div>

    <button type="submit" name="hitung">Hitung IPK</button>
</form>
<?php
if (isset($_POST['hitung'])) {
    $nilai1 = $_POST['nilai1'];
    $sks1   = $_POST['sks1'];
    $nilai2 = $_POST['nilai2'];
    $sks2   = $_POST['sks2'];
    $nilai3 = $_POST['nilai3'];
    $sks3   = $_POST['sks3'];

    $total_sks = $sks1 + $sks2 + $sks3;
    $total_nilai = ($nilai1 * $sks1) + ($nilai2 * $sks2) + ($nilai3 * $sks3);

    $ipk = $total_nilai / $total_sks;

    echo "<div class='result'>IPK Anda: <strong>" . number_format($ipk, 2) . "</strong></div>";
}
?>
</body>
</html>






