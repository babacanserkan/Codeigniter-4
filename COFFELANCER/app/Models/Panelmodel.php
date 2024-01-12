<?php

namespace App\Models;

class PanelModel
{
    // Veritabanı bağlantısını tutmak için bir özellik
    protected $db;

    // Kurucu method: Veritabanı bağlantısını oluştur
    public function __construct()
    {
        $this->db = db_connect();
    }

    // Yeni bir veri eklemek için kullanılan method
    public function veri_ekle($baslik, $url, $icerik, $resim)
    {
        $builder = $this->db->table('kahveler');
        $data = [
            'baslik' => $baslik,
            'url' => $url,
            'resim' => $resim,
            'icerik' => $icerik,
        ];
        // Veriyi ekleyip başarılı olup olmadığını döndür
        return $builder->insert($data);
    }

    // Belirli bir kaydın detaylarını getirmek için kullanılan method
    public function kayit_al($id)
    {
        $builder = $this->db->table('kahveler');
        $builder->where('id', $id);
        // Belirli bir kaydın verilerini al ve döndür
        $veri = $builder->get()->getResultArray();
        return $veri[0];
    }

    // Belirli bir kaydı silmek için kullanılan method
    public function kayit_sil($id)
    {
        $builder = $this->db->table('kahveler');
        $builder->where('id', $id);
        // Belirli bir kaydı sil
        $builder->delete();
    }

    // Belirli bir kaydı güncellemek için kullanılan method
    public function veri_duzenle($baslik, $url, $icerik, $id)
    {
        $builder = $this->db->table('kahveler');
        $builder->where('id', $id);

        $data = [
            'baslik' => $baslik,
            'url' => $url,
            'icerik' => $icerik
        ];

        // Belirli bir kaydı güncelle ve başarılı olup olmadığını döndür
        return $builder->update($data);
    }
}
