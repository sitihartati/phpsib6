<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $mata_kuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $kuliah, $mata_kuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
        $this->hitungGrade();
        $this->hitungPredikat();
        $this->hitungStatus();
    }

    public function hitungGrade() {
        if ($this->nilai >= 80) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } elseif ($this->nilai >= 50) {
            $this->grade = 'D';
        } else {
            $this->grade = 'E';
        }
    }

    public function hitungPredikat() {
        switch ($this->grade) {
            case 'A':
                $this->predikat = 'Sangat Baik';
                break;
            case 'B':
                $this->predikat = 'Baik';
                break;
            case 'C':
                $this->predikat = 'Cukup';
                break;
            case 'D':
                $this->predikat = 'Kurang';
                break;
            default:
                $this->predikat = 'Sangat Kurang';
        }
    }

    public function hitungStatus() {
        $this->status = ($this->grade == 'E') ? 'Tidak Lulus' : 'Lulus';
    }
}

?>
