<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\CaraOrder;
use App\Models\Faq;
use App\Models\Harga;
use App\Models\Info;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\Layanan;
use App\Models\Manfaat;
use App\Models\MediaPartner;
use App\Models\SyaratKetentuan;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class AllController extends Controller
{

    public function list()
    {
        try {
            $beranda = Beranda::first() ?? null;
            $info = Info::first() ?? null;
            $manfaat = Manfaat::get()->isEmpty() ? null : Manfaat::get();
            $keunggulan = Keunggulan::get()->isEmpty() ? null : Keunggulan::get();
            $tentang_kami = TentangKami::first() ?? null;
            $harga = Harga::get()->isEmpty() ? null : Harga::get();
            $syarat_ketentuan = SyaratKetentuan::get()->isEmpty() ? null : SyaratKetentuan::get();
            $media_partner = MediaPartner::get()->isEmpty() ? null : MediaPartner::get();
            $cara_order = CaraOrder::get()->isEmpty() ? null : CaraOrder::get();
            $faq = Faq::get()->isEmpty() ? null : Faq::get();
            $layanan = Layanan::get()->isEmpty() ? null : Layanan::get();
            $kontak = Kontak::get()->isEmpty() ? null : Kontak::get();
            return response()->json(['id' => '1', 'data' => [
                'beranda' => $beranda,
                'info' => $info,
                'manfaat' => $manfaat,
                'keunggulan' => $keunggulan,
                'tentang_kami' => $tentang_kami,
                'harga' => $harga,
                'syarat_ketentuan' => $syarat_ketentuan,
                'media_partner' => $media_partner,
                'cara_order' => $cara_order,
                'faq' => $faq,
                'layanan' => $layanan,
                'kontak' => $kontak,
            ]]);
        } catch (\Throwable $th) {
            return response()->json(['id' => '0', 'data' => $th->getMessage()]);
        }
    }
}
