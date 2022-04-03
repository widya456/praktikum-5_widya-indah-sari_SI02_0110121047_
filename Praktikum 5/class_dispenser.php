<?php
class Dispenser{
    protected static $volume = 12000;
    protected static $hargaSegelas = 7000;
    private static $volumeGelas = 250;
    private static $penghasilan = 0;
    public $namaMinuman;
    public $nama;

    public function __construct($nama, $namaMinuman, $jumlahBeli){
        $this->namaMinuman = $namaMinuman;
        $this->nama = $nama;
        $this->jumlahBeli = $jumlahBeli;
    }
    public function get_volume(){
        return self::$volume;
    }
    public function get_hargaSegelas(){
        return self::$hargaSegelas;
    }
    public function get_volumeGelas(){
        return self::$volumeGelas;
    }
    public function berkurang(){
        if(self::$volume != 0){
            $total = $this->jumlahBeli*self::$volumeGelas;
            $galon = self::$volume-=$total;
            return $galon;
        }elseif(self::$volume == 0){
            self::$volume = 12000;
            $total = $this->jumlahBeli*self::$volumeGelas;
            $galon = self::$volume==$total;
            return $galon;
        }
    }
public function bayar (){
    return $this->jumlahBeli*self::$hargaSegelas;
    }
public function penghasilan(){
    $total = $this->jumlahBeli*self::$hargaSegelas;
    $simpanan = self::$penghasilan+= $total;
    return $simpanan;
    }
    function format_uang($uang){
        $hasil = "Rp.".number_format($uang, 0, ",",".");
        return $hasil;
    }
}
?>