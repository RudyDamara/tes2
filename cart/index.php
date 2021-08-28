<?php

class Cart {

    public $data_arr = array();

    
    public function tambahProduk($kodeProduk, $kuantitas){
        $data =(object)array();
        $data->kodeProduk = $kodeProduk;
        $data->kuantitas = $kuantitas;
        return array_push($this->data_arr,$data);
    }

    public function hapusProduk($kodeProduk){
        $data_arr = array();

        if (count($this->data_arr) > 0) {
            foreach ($this->data_arr as $key) {
                if ($key->kodeProduk == $kodeProduk) {
                    unset($this->data_arr[$key->index]);
                } else{
                    array_push($data_arr,$key);
                }
            }
        }
        $this->data_arr = $data_arr;
    }

    public function tampilkanCart(){
        $res = array();
        foreach($this->data_arr as $key => $item){
            $res[$item->kodeProduk]['kuantitas'] += $item->kuantitas;
            
        }

        foreach ($res as $key => $item) {
            echo $key. "(".$item['kuantitas'].")"."<br>";
        }
    }

}


$keranjang = new Cart();
$keranjang->tambahProduk("Pisang Hijau", 2);
$keranjang->tambahProduk("Semangka Kuning", 3);
$keranjang->tambahProduk("Apel Merah", 1);
$keranjang->tambahProduk("Apel Merah", 4);
$keranjang->tambahProduk("Apel Merah", 2);
$keranjang->hapusProduk("Semangka Kuning");
$keranjang->hapusProduk("Semangka Merah");
$keranjang->tampilkanCart();
?>