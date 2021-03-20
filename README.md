<!-- markdownlint-disable MD033 MD041 -->

<div align="center">

# Created PDF
<a href="https://github.com/hendrasob/created-pdf/search?l=php"><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="GitHub" /></a>

</div>

An simple repo that implements dompdf to create pdf format files.

## Using

To use the features of dompdf, you have to unzip the `dompdf.zip` file then you configure the connection to mysql by setting it in the `config.php` file.

```
<?php 
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "database";
$koneksi    = mysqli_connect($host, $user, $password, $database);
?>
```

Replace `$host`, `$user`, `$password`, and `$database` with the ones you use.

Then run the feature by opening <a href="http://localhost:8080/">http://localhost:8080/</a>

## License

This repo is under <a href="https://github.com/hendrasob/created-pdf/blob/master/LICENSE">MIT License</a>
