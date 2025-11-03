<?php 

class Produk {
  public $judul;
  public $penulis;
  public $penerbit;
  protected $harga;

  public function __construct($judul, $penulis, $penerbit, $harga) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}
?>