<?php
if(isset($_POST['spn'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nm'];
    $birthday = $_POST['birthday'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];


    $hasil_input = array($nim, $nm, $birthday, $jk, $prodi,);
    echo "Hasil Inputan :";
    print_r($hasil_input);
}
?>