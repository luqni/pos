<?php

namespace App\Imports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProdukImport implements ToModel, WithHeadingRow
{
    protected $id_kategori;

    public function __construct($id_kategori)
    {
        $this->id_kategori = $id_kategori;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produk([
            'id_kategori'   => $this->id_kategori,
            'kode_produk'   => $row['kode_produk'], // pastikan kolom excel sesuai
            'nama_produk'   => $row['nama_produk'],
            'merk'          => $row['merk'],
            'harga_beli'    => $row['harga_beli'],
            'diskon'        => !empty($row['diskon']) ? $row['diskon'] : 0,
            'harga_jual'    => $row['harga_jual'],
            'stok'          => $row['stok']
        ]);
    }
}
