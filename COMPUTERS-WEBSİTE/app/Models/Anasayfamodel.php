<?php

namespace App\Models;

use CodeIgniter\Model;

class AnasayfaModel extends Model
{
    protected $table = 'kullanicilar';
    protected $allowedFields = ['kulad', 'sifre'];

    public function kayit_detay($url)
    {

        $this->table = 'computers';

        return $this->where('url', $url)->find();
    }

    public function kayitlar()
    {

        $this->table = 'computers';

        return $this->findAll();
    }
}
