<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

    $i = 1;

    $siswa = [
        [
            "nama" => "Kaguya",
            "kelas" => "XII Busana 2",
            "alamat" => "Buaran"
        ],
        [
            "nama" => "Chika",
            "kelas" => "XII TKJ 1",
            "alamat" => "Pekalongan"
        ],
        [
            "nama" => "Lanzzz",
            "kelas" => "XI ATPH 3", 
            "alamat" => "Warung Asem"
        ]
    ];

    ?> 

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php foreach($siswa as $s) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $s["nama"] ?></td>
            <td><?= $s["kelas"] ?></td>
            <td><?= $s["alamat"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>