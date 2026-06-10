<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::insert([
            [
                'title' => 'Assassin Creed Valhalla',
                'description' => 'Game open world bertema Viking. Bersama Eivor, Jelajahi dunia yang luas, bertempur dengan brutal, dan buatlah legenda Anda sendiri di era Viking yang penuh petualangan.',
                'price_numeric' => 15000,
                'image' => 'Assassin_creed_valhalla.jpg',
            ],
            [
                'title' => 'Miside',
                'description' => 'Game waifu yandere. Simulasi kencan dengan Mita',
                'price_numeric' => 5000,
                'image' => 'miside.jpg',
            ],
            [
                'title' => 'House Flipper',
                'description' => 'Game simulasi renovasi rumah. Beli, renovasi, dan jual rumah untuk mendapatkan keuntungan. Jadilah seorang house flipper sukses dengan kreativitas dan keterampilan renovasi Anda.',
                'price_numeric' => 300000,
                'image' => 'house_flipper.jpg',
            ],
            [
                'title' => 'Resident Evil 2',
                'description' => 'Leon S. Kennedy, seorang polisi pemula, dan Claire Redfield, seorang mahasiswa yang mencari saudaranya, terjebak di Raccoon City yang penuh dengan zombie. Mereka harus bekerja sama untuk bertahan hidup dan mengungkap misteri di balik wabah mematikan ini.',
                'price_numeric' => 150000,
                'image' => 'resident_evil_2.jpg',
            ],
            [
                'title' => 'Forza Horizon 4',
                'description' => 'Jelajahi dunia terbuka yang indah di Inggris dengan berbagai macam mobil dan tantangan balap. Nikmati musim yang berubah-ubah, acara komunitas, dan kebebasan untuk menjelajahi dunia balap yang menakjubkan.',
                'price_numeric' => 200000,
                'image' => 'forza_horizon_4.jpg',
            ],
            [
                'title' => 'Assassin Creed Odyssey',
                'description' => 'dunia terbuka yang luas di Yunani Kuno, di mana Anda dapat menjelajahi berbagai lokasi ikonik, bertempur dengan musuh-musuh yang kuat, dan membuat keputusan yang memengaruhi alur cerita. Dengan grafis yang memukau dan gameplay yang mendalam, Assassin Creed Odyssey menawarkan pengalaman petualangan',
                'price_numeric' => 300000,
                'image' => 'assassin_creed_odyssey.jpg',
            ],
            [
                'title' => 'The Crew 2',
                'description' => 'mengendarai berbagai jenis kendaraan, mulai dari mobil sport hingga pesawat terbang, di dunia terbuka yang luas dan penuh dengan tantangan. Dengan grafis yang memukau dan gameplay yang seru, The Crew 2 menawarkan pengalaman balap yang mendebarkan di seluruh Amerika Serikat.',
                'price_numeric' => 5000,
                'image' => 'the_crew.jpg',
            ],
            [
                'title' => 'Battlefield 4',
                'description' => 'pertempuran modern yang intens dengan grafis yang memukau dan gameplay yang mendalam. Bergabunglah dalam pertempuran epik di berbagai lokasi di seluruh dunia, gunakan kendaraan tempur yang kuat, dan bekerja sama dengan tim untuk meraih kemenangan di medan perang yang dinamis.',
                'price_numeric' => 5000,
                'image' => 'battlefield_4.jpg',
            ],
            [
                'title' => 'Hitman Absolution',
                'description' => 'jadilah agen pembunuh bayaran yang mematikan dalam petualangan penuh aksi dan intrik. Dengan kebebasan untuk merencanakan dan melaksanakan misi pembunuhan dengan berbagai cara kreatif, Hitman Absolution menawarkan pengalaman stealth yang mendalam dan penuh tantangan.',
                'price_numeric' => 5000,
                'image' => 'hitman_absolution.jpg',
            ],
            [
                'title' => 'Need For Speed Heat',
                'description' => 'Balapan jalanan yang seru di kota fiksi Palm City, di mana Anda dapat memilih untuk menjadi pembalap jalanan yang berani atau anggota kepolisian yang tegas. Dengan berbagai mobil yang dapat disesuaikan, tantangan balap yang menegangkan, dan dunia terbuka yang hidup, Need For Speed Heat menawarkan pengalaman balap yang mendebarkan.',
                'price_numeric' => 5000,
                'image' => 'need_for_speed_heat.png',
            ],
            [
                'title' => 'Sniper Elite 4',
                'description' => 'Jadilah snipert yang berpengalaman dalam pertempuran modern yang intens. Dengan sistem gameplay yang mendalam dan grafis yang memukau, Sniper Elite 4 menawarkan pengalaman menembak yang autentik dan penuh tantangan.',
                'price_numeric' => 5000,
                'image' => 'sniper_elite_4.jpeg',
            ],
            [
                'title' => 'Outlast 2',
                'description' => 'menjadi seorang jurnalis yang terjebak di sebuah kota terpencil yang penuh dengan kengerian dan misteri. Dengan grafis yang menakutkan dan atmosfer yang mencekam, Outlast 2 menawarkan pengalaman horor psikologis yang mendalam dan penuh ketegangan.',
                'price_numeric' => 5000,
                'image' => 'outlast_2.jpg',
            ],
        ]);
    }
}
