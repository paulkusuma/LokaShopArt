<?php

namespace App\Models;


class product
{
    private static $listproduct = [
        [
            "name" => "Vas Emas Model Ayam",
            "slug" => "vas-emas-model-ayam",
            "description" => "Vas emas model emas yang dibuat dengan bahan kaca",
            "price" => "Rp 150.000",
            "image" => "Gambar/1.png",
            "thumbnail" => "Gambar/1.png"
        ],
        [
            "name" => "Vas Kaca Merah",
            "slug" => "vas-kaca-merah",
            "description" => "Vas kaca merah dengan motif bunga-bunga",
            "price" => "Rp 125.000",
            "image" => "Gambar/2.png",
            "thumbnail" => "Gambar/2.png"
        ],
        [
            "name" => "Vas Kaca Merah Jambu",
            "slug" => "vas-kaca-merah-Jambu",
            "description" => "Vas kaca merah dengan motif bunga-bunga",
            "price" => "Rp 125.000",
            "image" => "Gambar/2.png",
            "thumbnail" => "Gambar/2.png"
        ],
        [
            "name" => "Vas Tanah Liat",
            "slug" => "vas-tanah-liat",
            "description" => "Vas dengan bahan tanah liat dibuat oleh tangan asli seniman Indonesia",
            "price" => "Rp 100.000",
            "image" => "Gambar/3.png",
            "thumbnail" => "Gambar/3.png"
        ],
        [
            "name" => "Gelas Bambu",
            "slug" => "gelas-bambu",
            "description" => "Salah satu gelas berbahan bambu tradisional",
            "price" => "Rp 50.000",
            "image" => "Gambar/4.png",
            "thumbnail" => "Gambar/4.png"
        ],
        [
            "name" => "Satu Set Teko Teh dan Gelas",
            "slug" => "satu-set-teko-teh-dan-gelas",
            "description" => "Satu set teko teh dengan berbahan dasar tanah liat",
            "price" => "Rp 120.000",
            "image" => "Gambar/5.png",
            "thumbnail" => "Gambar/5.png"
        ],
        [
            "name" => "Vas Keramik Dengan Motif Tumbuhan",
            "slug" => "vas-keramik-dengan-motif-tumbuhan",
            "description" => "Vas besar dengan motif tanaman",
            "price" => "Rp 150.000",
            "image" => "Gambar/6.png",
            "thumbnail" => "Gambar/6.png"
        ],
        [
            "name" => "Vas Kaca Putih Limited Edition Special Anniversary 10Th Paul Kusuma",
            "slug" => "vas-kaca-putih-limited-edition-special-anniverary-10th-paul-kusuma",
            "description" => "Vas dengan bahan kaca khusus yang dibuat langsung oleh tangan asli Paul Kusuma sebagai tanda kasih sayang",
            "price" => "Rp 1.000.000",
            "image" => "Gambar/shooping.png",
            "thumbnail" => "Gambar/shooping.png"
        ]

    ];

    public static function all()
    {
        return collect(self::$listproduct);
    }

    public static function find($slug)
    {
        $products = static::all();
        return $products->firstWhere('slug', $slug);
    }

}