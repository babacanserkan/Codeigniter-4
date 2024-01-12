<?php

namespace App\Controllers;

use App\Models\AnasayfaModel;

class Anasayfa extends BaseController
{
    // Kullanılacak yardımcı sınıflar burada tanımlanır
    protected $helpers = ['form', 'text'];

    // Ana sayfa
    public function index()
    {
        $data = [];

        // AnasayfaModel sınıfından bir örnek al
        $model = model('AnasayfaModel');

        // Kayıtları almak için model fonksiyonunu çağır
        $kayitlar = $model->kayitlar();

        // Eğer kayıt varsa, veriyi diziye ekle
        if (count($kayitlar) > 0) {
            $data['kayitlar'] = $kayitlar;
        }

        // Session sınıfını kullan
        $session = session();

        // Oturumda 'durum' anahtarı varsa ve değeri true ise
        if ($session->has('durum') && $session->get('durum')) {

            // 'isim' ve 'durum' değerlerini al
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');

            // Gerekli sayfaları birleştirip döndür
            return view('tema/header', $data)
                . view('sayfalar/anasayfa')
                . view('tema/footer');
        } else {
            // Gerekli sayfaları birleştirip döndür
            return view('tema/header', $data)
                . view('sayfalar/anasayfa')
                . view('tema/footer');
        }
    }

    // Giriş işlemi
    public function login()
    {
        $session = session();

        // Eğer kullanıcı zaten giriş yapmışsa, panel sayfasına yönlendir
        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('panel'));
        } else {
            // Eğer POST isteği değilse, giriş sayfasını göster
            if (!$this->request->is('post')) {
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            // Form doğrulama kuralları
            $rules = [
                'kulad' => 'required|min_length[4]|max_length[20]|alpha_numeric',
                'sifre' => 'required'
            ];

            // Formu doğrula
            if (!$this->validate($rules)) {
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            // Onaylanmış verileri al
            $veri = $this->validator->getValidated();

            // AnasayfaModel sınıfından bir örnek al
            $model = model('AnasayfaModel');

            // Kullanıcı adı ve şifre ile eşleşen kayıt var mı kontrol et
            $sor = $model->where(['kulad' => $veri['kulad'], 'sifre' => $veri['sifre']])->find();

            // Eğer eşleşen bir kayıt varsa
            if (count($sor) > 0) {

                // Kullanıcı bilgilerini oturuma ekle
                $kul_bilgi = [
                    'isim' => $veri['kulad'],
                    'durum' => true
                ];

                $session->set($kul_bilgi);
                // Panel sayfasına yönlendir
                return redirect()->to(base_url('panel'));
            } else {
                // Yanlış kullanıcı uyarısıyla giriş sayfasını göster
                return view('tema/header', ['uyari' => 'Yanlış Kullanıcı!']) . view('sayfalar/login') . view('tema/footer');
            }
        }
    }

    // Çıkış işlemi
    public function logout()
    {
        // Session sınıfını kullan
        $session = session();

        // Session verilerini temizle (destroy)
        $session->destroy();

        // Giriş sayfasına yönlendir
        return redirect()->to(base_url('login'));
    }

    // Detayları incele
    public function incele($url)
    {
        $data = [];

        // AnasayfaModel sınıfından bir örnek al
        $model = model('AnasayfaModel');

        // Detayları almak için model fonksiyonunu çağır
        $veri = $model->kayit_detay($url);
        $data['veri'] = $veri[0];

        // Session sınıfını kullan
        $session = session();

        // Oturumda 'durum' anahtarı varsa ve değeri true ise
        if ($session->has('durum') && $session->get('durum')) {

            // 'isim' ve 'durum' değerlerini al
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');
        }

        // Gerekli sayfaları birleştirip döndür
        return view('tema/header', $data)
            . view('sayfalar/incele')
            . view('tema/footer');
    }
}
