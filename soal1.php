<?php
class Mahasiswa {
    public $nama;

    public function tampilkanNama() {
        return "Nama Mahasiswa: " . $this->nama;
    }
}

$mhs1 = new Mahasiswa();

$mhs1->nama = "Budi Santoso";

echo $mhs1->tampilkanNama();
?>