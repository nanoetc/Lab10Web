<?php
class mobil
{
  private $warna;
  private $merk;
  private $harga;
  public function __construct()
  {
    $this->warna = "biru";
    $this->merk = "Mercedes";
    $this->harga = "1000000000";
  }
  public function gantiWarna ($warnaBaru)
  {
      $this->warna = $warnaBaru;
  }
  public function tampilWarna ()
  {
    echo "Warna mobilnya :" . $this->warna;
  }
}

$a = new Mobil();
$b = new Mobil();

echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();

echo "<br><b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();

?>
