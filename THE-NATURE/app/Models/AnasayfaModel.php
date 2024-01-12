<?php

namespace App\Models;

use CodeIgniter\Model;

class AnasayfaModel extends Model
{
    protected $table = 'kullanicilar';
    protected $allowedFields = ['kulad', 'sifre'];

    public function kayitlar()
    {

        $this->table = 'sehirler';

        return $this->findAll();
    }

    public function kayit_detay($url)
    {

        $this->table = 'sehirler';

        return $this->where('url', $url)->find();
    }
}
