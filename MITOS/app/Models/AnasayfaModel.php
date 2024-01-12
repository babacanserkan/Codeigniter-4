<?php

namespace App\Models;

use CodeIgniter\Model;

class AnasayfaModel extends Model
{
    protected $table = 'kullanicilar';
    protected $allowedFields = ['kulad', 'sifre'];

    public function kayitlar()
    {

        $this->table = 'dinler';

        return $this->findAll();
    }

    public function kayit_detay($url)
    {

        $this->table = 'dinler';

        return $this->where('url', $url)->find();
    }
}
