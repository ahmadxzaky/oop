<?php
class Sekolah {
    protected $nama, $kelas ,$pr, $ruangan;
    public function __construct($nama, $kelas, $pr, $ruangan){
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->pr = $pr;
        $this->ruangan = $ruangan;
    }
    public function namaJurusan() {
        return "nama Jurusan :".$this-> nama." <br>kelas ".$this->kelas.".<br> pr : ".$this->kelas."<br>Ruangan :".$this->ruangan;
    }
}
?>