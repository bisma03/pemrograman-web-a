<?php
$nama = "Bisma Abdul Gani";
$nim = "2321021";
$prodi = "Teknik Elektro Sistem Komputer";
$TTL = "Bandung,1 maret 2003";
$Status = "Mahasiswa";
$email = "bismaabdulgani030301@gmail.com";


?>

<!DOCTYPE html>
<html>

<head>
    <title>Kartu Nama</title>

    <style>

        * {
            box-sizing: border-box;
        }

        .foto {
    width: 120px;
    height: 120px;
    object-fit: cover;

    border-radius: 50%;

    display: block;
    margin: 0 auto 20px;

    border: 4px solid #93c5fd;

    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
}

        body {
            margin: 0;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial, sans-serif;

            background:
                radial-gradient(circle at top left, #243b55, transparent 45%),
                linear-gradient(135deg, #0f172a, #1e293b);

            color: white;
        }

        .kartu {
            width: 450px;
            padding: 35px;

            background: rgba(255, 255, 255, 0.08);

            border: 1px solid rgba(255, 255, 255, 0.2);

            border-radius: 25px;

            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.4);

            backdrop-filter: blur(10px);
        }

        .header {
            text-align: center;
            padding-bottom: 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .judul {
            font-size: 14px;
            letter-spacing: 4px;
            color: #93c5fd;
            margin-bottom: 15px;
        }


        .data {
            margin-top: 25px;
        }

        .baris {
            display: flex;
            align-items: center;

            padding: 12px 0;

            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .label {
            width: 100px;
            color: #93c5fd;
            font-size: 14px;
            font-weight: bold;
        }

        .isi {
            color: #f8fafc;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            margin-top: 25px;

            font-size: 12px;
            color: #94a3b8;
        }

    </style>

</head>

<body>

    <div class="kartu">

        <div class="header">
            <img src="foto.jpg" alt="Foto Profil" class="foto">
            <div class="judul">
                PERSONAL CARD
            </div>

        <div class="data">

        <div class="baris">
    <div class="label">Nama</div>
    <div class="isi">
        <?php echo $nama; ?>
    </div>
</div>

 <div class="baris">
                <div class="label">NIM</div>
                <div class="isi">
                    <?php echo $nim; ?>
                </div>
            </div>


    <div class="baris">
        <div class="label">Prodi</div>
        <div class="isi">
            <?php echo $prodi; ?>
        </div>
    </div>

<div class="baris">
        <div class="label">TTL</div>
        <div class="isi">
            <?php echo $TTL; ?>
        </div>
    </div>

    <div class="baris">
        <div class="label">Status</div>
        <div class="isi">
            <?php echo $Status; ?>
        </div>
    </div>

            <div class="baris">
                <div class="label">Email</div>
                <div class="isi">
                    <?php echo $email; ?>
                </div>
            </div>


        <div class="footer">
            STT MANDALA BANDUNG
        </div>

    </div>

</body>

</html>

