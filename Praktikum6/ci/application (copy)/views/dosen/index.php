<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>

<body>
    <div class="col-md-12">
        <h3>
            Daftar Dosen
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($list_dsn as $dsn) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <TD><?= $dsn->id ?></TD>
                        <td><?= $dsn->nidn ?></td>
                        <td><?= $dsn->nama ?></td>
                        <td><?= $dsn->gender ?></td>
                        <td><?= $dsn->matkul ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>