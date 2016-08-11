<!DOCTYPE html>
<?php include 'connection.php'; ?>
    <html lang="en">

    <head>

        <title>Our Family</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="stylesheet.css">

    </head>

    <body>


        <div id="menu" class="container">
            <div class="row">
                <div id="menu" class="col-sm-12">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="header" class="container">
            <div class="row">
                <div id="banner" class="col-sm-12">
                    <img src="image/header.png">
                </div>
            </div>
        </div>

        <div id="content" class="container">
            <div class="row">
                <!--ini content utk menu tengah-->
                <div id="content-utama" class="col-sm-8">
                    <h1>Perkenalan</h1>
                    <img src="image/uci.jpg" width="150px">
                    <br>
                    <br>
                    <p>
                        Menjadi single mom dengan 5 orang anak itu susah-susah gampang tapi menyenangkan,kl di bayangin pasti ribet,rusuh,capek,,ga usah di bayangin deh kl gt hehe,,atau mau rasain skalian? eh jangan ...punya 5 anak dengan beda usia yg deket itu ga gampang lho,d jamin rumah pasti berisik dan berantakan,tp beneran seru,,ya kl d seru2in sih,,hehe,,mau kenal ama anak2 ku??
                    </p>
                    <p>
                        Anak yg pertama namanya Alfredo,panggilannya sih kk Al,badannya tinggi besar dgn tinggi 195cm,berat badan nyampe 100kg,dia skrng kls 2 SMK jurusan tekhnik mesin.
                    </p>
                    <p>
                        Anak yg k 2 namanya Siera May,panggilannya kk Sie,tinggi badannya 170cm,berat badan 55kg,kk Sie skrng kls 2 SMP,kk Sie ini hoby nya dance,denger musik,paling seneng ikut berbagai macam lomba d skolah nya,,kk Sie paling item sendiri lho d rmh,hehe
                    </p>
                    <p>
                        Anak k 3 namanya Naysilla,panggilannya kk Esil,kk Esil kls 1 SMP,rambutnya kriting sndiri d rmh,tinggi 173cm,berat 75kg tp suka ngaku 60kg,malu katanya kegedean,,kk esil ini yg paling sabar d rmh,seneng bgt ngurusin adek nya soalnya.
                    </p>
                    <p>
                        Anak k 4 namanya Gavin Brava,panggilan gavin,gavin skrng kls 2 SD,kl gavin ini anak paling aktiv rmh,paling seneng ama binatang tp kl d suruh miara ga pernah bnr,mati smua.
                    </p>
                    <p>
                        Anak k 5 namanya flavia Azalea,panggilannya Cia,cia paling mungil d rmh,paling centil,paling cerewet dan paling sgalanya,cia kls 1 SD,hobi nya ngaca,hehe..
                    </p>
                    <br>
                    <br>
                    <br>
                    <img src="image/fam1.png" width="600px">


                </div>
                <!--menu tengah selesai-->

                <div id="content-link" class=col-sm-4>
                    <!--ini content utk link-->
                    <div id="isi-content-link">
                        <h3> Artikel Saya </h3>
                        <ul>
                            <li><a href="artikel1.html">Tips Merawat Anak</a>
                                <br>
                                <br>
                                <img src="image/fam12.jpg"></li>
                            <br>
                            <br>
                            <li><a href="">Tips Memasak Sarapan Praktis</a>
                                <br>
                                <br>
                                <img src="image/fam13.jpg"></li>
                        </ul>

                    </div>
                </div>
                <!--content link selesai-->
            </div>



        </div>
        <div id="footer" class="container">
            <div class="row">
                <div id="footer" class="col-sm-12">
                    &copy; Uchie
                </div>
            </div>
        </div>
        <?php

$sql = "SELECT id, name,job,address FROM biodata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"].  "<br>";
        echo "name: " . $row["name"].  "<br>";
        echo "job: " . $row["job"]. "<br>";
        echo "address: " . $row["address"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
            ?>
    </body>

    </html>