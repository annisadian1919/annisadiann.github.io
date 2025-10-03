<?php

  $nama = "Annisa Dian Pratiwi";
  $nim = "102022430035";
  $fakultas = "Fakultas Informatika";
  $prodi = "Sistem Informasi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Annisa Dian Pratiwi</title>
  <link rel="icon" href="favicon.ico">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f7fa;
      text-align: center;
      color: #333;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #4a90e2;
      color: white;
      padding: 20px;
    }
    img {
      width: 150px;
      border-radius: 50%;
      margin-top: 20px;
    }
    section {
      padding: 20px;
    }
    table {
      width: 50%;
      margin: 20px auto;
      border-collapse: collapse;
      border: 1px solid #4a90e2;
    }
    th, td {
      border: 1px solid #4a90e2;
      padding: 10px;
      text-align: center;
    }
    footer {
      background: #222;
      color: white;
      padding: 15px;
      margin-top: 30px;
    }
    a {
      color: #4a90e2;
      text-decoration: none;
      margin: 0 10px;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>
    <h1><?php echo $nama; ?></h1>
    <h2><?php echo $nim; ?></h2>
    <h3><?php echo "$fakultas - $prodi"; ?></h3>
  </header>

  <section>
    <img src="images/foto.jpg" alt="Foto Profil">
    <p>Halo. Saya <?php echo $nama; ?>, mahasiswa <?php echo $prodi; ?> yang tertarik pada <strong>Pengembangan Web</strong> dan <strong>UI/UX Designer</strong>.</p>


    <h4> Riwayat Pendidikan</h4>
    <table>
      <tr>
        <th>Tahun</th>
        <th>Institusi</th>
      </tr>
      <tr>
        <td>2021 - Sekarang</td>
        <td>Telkom University</td>
      </tr>
      <tr>
        <td>2018 - 2021</td>
        <td>SMA Negeri 1 Tenggarong</td>
      </tr>
    </table>
  </section>

  <footer>
    <h5>🔗 Media Sosial</h5>
    <a href="https://github.com/annisadian1919" target="_blank">GitHub</a> |
    <a href="https://instagram.com/aannisadiann" target="_blank">Instagram</a>
  </footer>

</body>
</html>
