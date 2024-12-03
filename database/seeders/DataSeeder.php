<?php

namespace Database\Seeders;

use App\Models\Beranda;
use App\Models\CaraOrder;
use App\Models\Faq;
use App\Models\Harga;
use App\Models\Info;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\Layanan;
use App\Models\Manfaat;
use App\Models\SyaratKetentuan;
use App\Models\TentangKami;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DataSeeder extends Seeder
{
    public function run()
    {
        // Beranda
        Beranda::create([
            'header' => 'Jasa Press Release Murah',
            'isi' => '<p>Tingkatkan reputasi bisnis kamu dengan Jasa Press Release Murah dari kami! Dapatkan kesempatan untuk melakukan publikasi media online secara masif yang akan membantu meningkatkan brand awareness kamu.</p>',
            'footer' => 'Garansi 100% Berita Tayang',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Info
        Info::create([
            'header' => 'Inilah yang Wajib Anda Tahu',
            'isi' => '<p>Menggunakan press release sebagai alat untuk menyebarkan informasi ke berbagai platform media online masih menjadi tolak ukur dalam membangun opini publik sekaligus sebagai sarana penyebaran informasi yang cepat karena tidak terbatas oleh ruang dan waktu.</p><p>Dengan menggunakan jasa press release murah, penyebaran informasi ke berbagai media online akan menjadi lebih terukur. Selain itu, potensi pembaca media online bisa mencapai ratusan ribu hingga jutaan per bulan.</p><p>Melalui jasa press release, perusahaan berkesempatan membangun opini publik dengan tujuan menyampaikan informasi penting kepada masyarakat melalui pemberitaan yang bernilai.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Manfaat
        Manfaat::create([
            'header' => 'Social Proof yang Kuat',
            'isi' => '<p>Press release tidak sekadar prestise. Aktivitas publikasi dapat dijadikan kendaraan tercepat dalam membangun kepercayaan publik terhadap bisnis perusahaan karena status bisnis yang pernah diberitakan di media online.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Manfaat::create([
            'header' => 'Visibilitas Optimal',
            'isi' => '<p>Distribusi aktivitas press release yang berkelanjutan dapat membantu meningkatkan eksposur bisnis secara signifikan.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Manfaat::create([
            'header' => 'Harga Lebih Terjangkau',
            'isi' => '<p>Membangun otoritas melalui aktivitas publikasi menggunakan jasa press release murah adalah strategi pemasaran terbaik dibandingkan strategi pemasaran lainnya.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Keunggulan
        Keunggulan::create([
            'header' => 'Harga Transparan',
            'isi' => '<p>Kami bekerja sama dengan media nasional ternama dan menyediakan informasi harga dari masing-masing media.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Transaksi Aman',
            'isi' => '<p>Kami bertanggung jawab penuh kepada klien yang telah mengirimkan dana untuk keperluan publikasi di media online nasional.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Termasuk Artikel',
            'isi' => '<p>Kami memastikan bahwa setiap layanan jasa press release murah sudah dilengkapi dengan artikel minimal 500 kata, yang dikemas sesuai dengan gaya masing-masing media.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Kualitas Terbaik',
            'isi' => '<p>Setiap media online dalam daftar kami rata-rata sudah terafiliasi dengan Google News. Dampaknya, pemberitaan tentang bisnis Anda mudah dicari melalui mesin pencari seperti Google.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Bebas Menentukan Media Online',
            'isi' => '<p>Pengguna layanan jasa press release media online bebas menentukan media untuk keperluan publikasi artikel sesuai dengan anggaran yang dimiliki.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Proses Publikasi Cepat',
            'isi' => '<p>Setiap media online dalam daftar kami rata-rata sudah terafiliasi dengan Google News. Dampaknya, pemberitaan tentang bisnis Anda mudah dicari melalui mesin pencari seperti Google.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Tentang Kami
        TentangKami::create([
            'header' => 'Tentang Kyu Media',
            'isi' => '<p>Kyu Media merupakan perusahaan media agensi yang melayani strategi pengelolaan konten artikel dan audio visual untuk mendorong pertumbuhan bisnis melalui pengelolaan media sosial, optimasi SEO, backlink media nasional, pembuatan website, media monitoring, strategi media, dan layanan konten berkualitas.</p>',
            'project_complete' => '13K',
            'happy_client' => '12K',
            'awards_winning' => '49+',
            'success_rate' => '98%',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Harga
        Harga::create([
            'nama_paket' => 'Starter A',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>5 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas A</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '4.000.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Reguler A',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>10 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas A</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '8.000.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Premium A',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>15 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas A</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '10.000.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Syarat dan Ketentuan
        SyaratKetentuan::create([
            'syarat' => 'Naskah dapat diedit.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Pemesanan minimal untuk 5 media.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Pembayaran dilakukan di muka.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Waktu pengerjaan maksimal 3 hari.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Bonus tambahan berlaku untuk pesanan ke-3, 4, 5, dan seterusnya.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Garansi penerbitan ulang jika hasil publikasi tidak sesuai dengan perjanjian awal.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Press release yang sudah terbit tidak dapat diedit kecuali ada kesalahan penulisan nama, gelar, alamat, tanggal, atau typo.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Harga publikasi media massa di atas sudah nett, bebas memilih media nasional ternama kelas A.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Layanan distribusi press release tidak digunakan untuk iklan hard-selling. Untuk kebutuhan iklan penuh, gunakan layanan advertorial.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Layanan press release tidak dapat memberikan hyperlink/backlink. Untuk backlink media, gunakan layanan backlink media.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Harga sudah termasuk pajak.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Cara Order
        CaraOrder::create([
            'header' => '1. Konsultasi',
            'isi' => '<p>Konsultasikan kebutuhan Anda agar kami dapat memberikan layanan yang tepat sesuai dengan anggaran Anda.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        CaraOrder::create([
            'header' => '2. Pengiriman Invoice',
            'isi' => '<p>Anda akan menerima invoice dari tim Kyu Media.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        CaraOrder::create([
            'header' => '3. Pembayaran',
            'isi' => '<p>Lakukan pembayaran sesuai layanan yang disepakati dalam waktu 1x24 jam setelah invoice dikirimkan.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        CaraOrder::create([
            'header' => '4. Proses Pengerjaan',
            'isi' => '<p>Setelah pembayaran diterima oleh bagian keuangan kami, layanan yang Anda pilih akan mulai dikerjakan sehari setelahnya.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // FAQ
        Faq::create([
            'pertanyaan' => 'Mengapa memilih Jasa Press Release Murah dari Kami?',
            'jawaban' => '<p>Kami berpengalaman dalam penerbitan artikel, khususnya press release untuk perusahaan dan individu.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Siapa yang Membutuhkan Jasa Press Release?',
            'jawaban' => '<p>1. Perusahaan</p><p>Menyiarkan kegiatan perusahaan, perubahan struktur organisasi, menanggapi krisis, meningkatkan reputasi.</p><p><br></p><p>2. Startup</p><p>Meningkatkan visibilitas agar masyarakat luas mengetahui keberadaan startup di pasar Indonesia.</p><p><br></p><p>3. UMKM (Usaha Mikro, Kecil, dan Menengah)</p><p>Membangun dan meningkatkan kesadaran di tingkat lokal, menyiarkan produk, merespons perubahan signifikan dalam bisnis.</p><p><br></p><p>4. Pemerintah / BUMN</p><p>Menyiarkan berita tentang kebijakan dan program pemerintah atau BUMN agar diketahui masyarakat luas.</p><p><br></p><p>5. Influencer</p><p>Meningkatkan engagement, memperoleh popularitas, dan meningkatkan peluang untuk verifikasi centang biru di media sosial.</p><p><br></p><p>6. Artis/Seniman</p><p>Memperkenalkan karya terbaru, penampilan di acara besar, dan proyek yang sedang dikerjakan.</p><p><br></p><p>7. Tokoh Masyarakat</p><p>Berbagi pesan atau informasi yang dianggap penting untuk masyarakat.</p><p><br></p><p>8. Organisasi Nirlaba</p><p>Meningkatkan dukungan dan kesadaran masyarakat tentang kegiatan amal dan kampanye sosial yang sedang dijalankan.</p><p><br></p><p>9. Event Organizer</p><p>Memasarkan acara untuk meningkatkan partisipasi dan eksposur event.</p><p><br></p><p>10. Profesional dan Ahli</p><p>Membangun reputasi profesional dengan mengumumkan keberhasilan atau memberikan pandangan ahli melalui media nasional.</p><p><br></p><p>11. Lembaga Pendidikan</p><p>Sekolah, universitas, lembaga pelatihan, yang ingin menyampaikan informasi terkait program pendidikan dan prestasi mereka.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Berapa Hari Artikel Press Release Terbit?',
            'jawaban' => '<p>Proses tayang press release memerlukan waktu 3x24 jam tanpa pengerjaan artikel. Bahkan, bisa lebih cepat dari waktu tersebut.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Apakah Artikel Press Release Tayang Permanen?',
            'jawaban' => '<p>Selama konten press release tidak melanggar kebijakan media, artikel press release akan tetap tayang di media yang bersangkutan.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Bisa Sebar Rilis di Media Online Mana Saja?',
            'jawaban' => '<p>Kami dapat menyebarkan press release klien ke berbagai media online nasional, lokal, atau daerah, hingga media non-tier yang sudah terindeks di Google.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Topik Apa Saja yang Diperbolehkan untuk Press Release?',
            'jawaban' => '<p>Kami menerima semua topik, kecuali:</p><p>1. Judi</p><p>2. Porno</p><p>3. Ujaran Kebencian</p><p>4. Provokasi</p><p>5. Perbandingan Agama</p><p>6. Organisasi Ilegal</p><p>7. Obat dan Makanan yang belum resmi</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Bagaimana Sistem Pembayaran Jasa Press Release?',
            'jawaban' => '<p>Pengguna layanan dapat melakukan pembayaran penuh di awal atau memberikan uang muka sebesar 50% (syarat dan ketentuan berlaku).</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Layanan
        Layanan::create([
            'layanan' => 'Jasa Press Release',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Layanan::create([
            'layanan' => 'Jasa Backlink Media Nasional',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Layanan::create([
            'layanan' => 'Jasa Pengelolaan Media Sosial',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Layanan::create([
            'layanan' => 'Jasa Penulisan Artikel',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Layanan::create([
            'layanan' => 'Media Monitoring',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Kontak
        Kontak::create([
            'kontak' => '085774548930',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'Jl.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'kyumedia@gmail.com',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'kyumedia.com',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
    }
}
