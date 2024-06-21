<?php
class Data {
    public $member;
    public $jenis;
    public $waktu;
    public $diskon;
    protected $pajak;
    private $Scoopy, $Beat, $Vario, $Aerox;
    private $listmember = ['TEGAR', 'KENJO', 'HUSNI'];

    function __construct(){
        $this->pajak = 10000;
    }

    public function getMember(){
        if (in_array($this->member, $this->listmember)){
            return "member";
        } else {
            return "non-member";
        }
    }

    public function setHarga($jenis1, $jenis2, $jenis3, $jenis4){
        $this->Scoopy = $jenis1;
        $this->Beat = $jenis2;
        $this->Vario = $jenis3;
        $this->Aerox = $jenis4;
    }

    public function getHarga() {
        $data["Scoopy"] = $this->Scoopy;
        $data["Beat"] = $this->Beat;
        $data["Vario"] = $this->Vario;
        $data["Aerox"] = $this->Aerox;
        return $data;
    }
}

class Rent extends Data {
    public function hargaRental() {
        $dataHarga = $this->getHarga()[$this->jenis];
        $diskon = $this->getMember() == "member" ? 5 : 0;
        if ($this->waktu === 1) {
            $bayar = ($dataHarga - ($dataHarga * $diskon / 100)) + $this->pajak;
        } else {
            $bayar = (($dataHarga * $this->waktu) - ($dataHarga * $diskon / 100)) + $this->pajak;
        }
        return [$bayar, $diskon];
    }

    public function pembayaran(){
        $memberStatus = $this->getMember();
        $harga = $this->getHarga()[$this->jenis];
        $diskon = $this->hargaRental()[1];
        $totalBayar = $this->hargaRental()[0];

        echo "<div class='table-container'>";
        echo "<table>";
        echo "<tr><th colspan='2' style='text-align: center;'>Detail Pembayaran</th></tr>";
        echo "<tr><td>Nama</td><td>" . htmlspecialchars($this->member) . "</td></tr>";
        echo "<tr><td>Status</td><td>" . htmlspecialchars($memberStatus) . "</td></tr>";
        echo "<tr><td>Diskon</td><td>" . htmlspecialchars($diskon) . "%</td></tr>";
        echo "<tr><td>Jenis Motor</td><td>" . htmlspecialchars($this->jenis) . "</td></tr>";
        echo "<tr><td>Lama Rental</td><td>" . htmlspecialchars($this->waktu) . " hari</td></tr>";
        echo "<tr><td>Harga Per Hari</td><td>Rp. " . number_format($harga) . "</td></tr>";
        echo "<tr><td>Total Bayar</td><td>Rp. " . number_format($totalBayar) . " (Termasuk Pajak)</td></tr>";
        echo "</table>";
        echo "</div>";
    }
}

// Memasukkan harga awal motor
$logic = new Rent();
$logic->setHarga(100000, 150000, 180000, 200000);

// Memproses form saat dikirim
if (isset($_POST['SEWA'])) {
    $logic->jenis = $_POST['jenis'];
    $logic->waktu = $_POST['waktu'];
    $logic->member = $_POST['nama'];

    // Memproses harga rental
    $logic->hargaRental();
    // Mencetak hasil pembayaran dalam bentuk tabel
    $logic->pembayaran();
}
?>
    