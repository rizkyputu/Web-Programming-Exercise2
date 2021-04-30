<?php

// mengecek keberadaan nama user
// silakan cek kembali di script proses.php

if (!isset($_SESSION['nama'])){
    echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
    echo "<p><a href='form.html'>Login</a> dulu ya..</p>";

    // setelah memunculkan pesan di atas, selanjutnya dibreak dg exit()
	exit();
}

?>