<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
        <link rel="stylesheet" type="text/css" href="css/belajar.css">
    </head>

    <style>
        body{
            font-family: century-gothic;
        }
    </style>
    
    <body>
        <?php
        session_start();

        include 'config.php';
        ?>

        <div class = "navbar">
            <a href="belajar.php" style = "float:left"><b>BELAJAR</b></a>
            <a href="timeline.php" style = "float:left"><b>LINIMASA</b></a>
            <a href="chat.php" style = "float:left"><b>PESAN</b></a>
            <?php
            if(!isset($_SESSION['username'])){
                ?>
                <a href="login.php" style = "float:right">Log in</a>
                <?php
            }else{
                ?>
                <div class = "dropdown" style ="float:right">
                    <a style = "float:right"><?php echo $_SESSION['username']?></a>

                    <div class = "dropdown-content">
                        <a href="logout.php">Log Out</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <h1><br></h1>

        <div class = "left">
            <h2 style="text-align:center">Menu Belajar</h2>
            <li style="padding: 25px 1px"><a href=belajar.php>Latihan</a></li>
            <li><a href=materi.php>Materi</a></li>
        </div>

        <div class ="right">
            <h1>Noun</h1>
                Noun adalah kata yang digunakan untuk menamai suatu objek seperti orang, benda, tempat, serta konsep/ide. Noun bisa berbentuk singural (tunggal) atau plural ( jamak).<br>
                Noun memiliki fungsi sebagai berikut. <br>
                --> Sebagai subjek di suatu kalimat <br>
                Contoh : Alle has study English for 2 hours. <br>
                --> Sebagai objek pelengkap di suatu kalimat <br>
                Contoh : Rio is a police. <br>
                --> Sebagai objek langsung (direct object) <br>
                Contoh : He bought a bag last year. <br>
                --> Sebagai objek tak langsung (indirect object) <br>
                Contoh : My mother give my sister a candy. <br>
                --> Sebagai kata keterangan (preposition) <br>
                Contoh : I go to airport. <br>
                Jenis-jenis Noun adalah sebagai berikut. <br>
                1. Countable dan Uncountable Noun <br>
                Countable Noun merupakan jenis kata benda yang dapat di hitung dan memiliki jumlah. <br>
                Contoh : <br> 1. Mango —> Mangoes (Mangga —> beberapa mangga) <br>
                2. Man —–>Men (Laki-laki —> beberapa laki-laki) <br>
                3. Table —> Tables (Meja —> beberapa meja) <br>
                Uncountable Noun merupakan jenis kata benda yang tidak dapat di hitung jumlahnya kecuali menggunakan media. <br>
                Contoh : <br> 1. Sugar (gula) <br> 2. Oil (minyak) <br> 3. Water (air) <br> 4. Sand (pasir) <br>
                Jika menggunakan media,maka uncountable noun tersebut dapat di hitung. <br>
                Contoh : <br> 1. A spoon of sugar (sesendok gula). <br>
                2. A bottle of oil (sebotol minyak). <br>
                3. A glass of water (satu gelas air). <br>
                4. A sack of sand (satu sak pasir). <br>

                Perbedaan Countable dan Uncountable Noun adalah sebagai berikut. <br>
                1. Countable noun adalah kumpulan benda-benda yang dapat di hitung sedangkan uncountable noun adalah kumpulan benda yang tidak dapat di hitung. <br>
                2. Countable noun tak perlu menggunakan media untuk bisa di hitung sedangkan uncountable noun harus menggunakan media. <br>
                3. Setiap noun yang berbentuk countable noun bisa berjumlah tunggal (singular) atau jamak (plural) sedangkan uncountable noun tidak. <br>
                4. Jika tunggal (singular) dalam countable noun tidak di tambah akhiran ‘s’ atau ‘es’ jika jamak (plural) maka di tambah akhiran ‘s’ atau ‘es’ sedangkan dalam uncountable noun tidak ada penambahan. <br><br>

                2.Proper Noun dan Common Noun <br>
                Proper noun merupakan jenis kata benda yang dalam penggolongan nya sagat spesifik (biasanya menggunakan huruf kapital pada huruf awalnya). <br>
                Contoh : <br> 1. Gramedia <br> 2. Jakarta <br> 3. Yogyakarta <br> 4. Indonesia <br>
                Common noun merupakan jenis kata benda yang penggolongaya sangat umum atau secara umum. <br>
                Contoh : <br> 1. City (kota) <br> 2. Shop (toko) <br> 3. Market (pasar) <br> 4. Town (kota) <br>
                Perbedaan Proper Noun dan Common Noun adalah sebagai berikut. <br>
                1. Proper noun merupakan penggolongan kata benda secara spesifik atau khusus sedangkan Common noun adalah penggolongan kata benda secara umum. <br>
                2. Proper noun di awali dengan huruf kapital di setiap kalimat sedangkan common noun tidak menggunakan huruf kapital. <br><br>

                3.Abstract Noun dan Concrete Noun <br>
                Abstract noun merupakan kata benda yang tidak dapat di amati dengan panca indra. <br>
                Contoh: <br> 1. Love : cinta <br> 2. Hate : benci <br> 3. Romance : romansa romantis <br> 4. Feel : perasaan <br> 5. Idea : ide <br>
                Concrete Noun merupakan kata benda yang dapat di amati dengan panca indra. <br>
                Contoh: <br> 1. Book : buku <br> 2. School : sekolah <br> 3. House : rumah <br> 4. Bread : roti <br> 5. People : orang-orang <br>

                Perbedaan Abstract Noun dan Concrete Noun adalah sebagai berikut. <br>
                1. Abstract noun merupakan kata benda yang tidak dapat di amati dengan panca indra sedangkan concrete noun adalah kata benda yang dapat di amati dengan panca indra. <br>
                2. Abstract noun biasanya hanya bisa dirasakan atau di pikirkan tidak dapat di sentuh, sedangkan concrete noun dapat di sentuh maupun di lihat. <br><br>

                4.Collective Noun <br>
                Collective noun merupakan kata benda yang terdiri dari nama kelompok. <br>
                Contoh : <br> 1. Class : kelas <br> 2. Team : tim <br> 3. Bucket : buket <br> 4. Pair : sepasang
        </div>        
    </body>
</html>