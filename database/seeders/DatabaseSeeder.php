<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class, GenreSeeder::class]);
        
        $post = Post::create([
            'slug'=> 'resident-evil-4',
            'title'=> 'resident evil 4',
            'img'=> 're4.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '15-08-2025'),
            'category_id'=> '2',
            'desc'=> 'Biohazard 4 atau yang lebih akrab dikenal dengan nama Resident Evil 4 adalah game yang dikembangkan oleh Capcom pada Januari 2005. Di game ini kita memerankan seorang polisi muda bernama Leon Scott Kennedy yang dimana si leon ini ditugaskan untuk mencari seorang putri presiden yang bernama Ashley Graham.',
            'link'=> 'https://ouo.io/3AUD0n'

        ]);
        $genreIds = [6, 11];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'god-of-war-2',
            'title'=> 'God Of War 2',
            'img'=> 'gow2.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '16-08-2025'),
            'category_id'=> '2',
            'desc'=> 'Dikembangkan oleh Santa Monica Studio dan diterbitkan oleh Sony Computer Entertainment pada tahun 2007. Di game ini kita bermain sebagai Kratos yang dimana dia memiliki gelar dewa perang.',
            'link'=> 'https://ouo.io/sHKJuB'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'mortal-kombat-shaolin-monks',
            'title'=> 'Mortal Kombat Shaolin Monks',
            'img'=> 'mksm.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-08-2025'),
            'category_id'=> '2',
            'desc'=> 'Mortal Kombat Shaolin Monks dirilis pada tahun 2005 oleh Midway. Di judul ini kita bermain sebagai Liu Kang & Kung Lau yang mencoba untuk menyelamatkan bumi dari tangan orang luar.',
            'link'=> 'https://ouo.io/Xvbt54'
        ]);
        $genreIds = [1, 5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'naruto-shippudent-ultimate-ninja-5',
            'title'=> 'Naruto Shippudent Ultimate Ninja 5',
            'img'=> 'naruto.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '18-08-2025'),
            'category_id'=> '2',
            'desc'=> 'Game ini rilis pada tahun 2007 untuk versi bahasa jepang, sedangkankan untuk versi bahasa inggris nya, game ini rilis pada tahun 2009. Tidak berbeda jauh seperti judul lain nya, di game ini kita bisa memilih memainkan story atau langsung melakukan free battle.',
            'link'=> 'https://ouo.io/ZD38lF',
        ]);
        $genreIds = [5, 10];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'need-for-speed-mostwanted',
            'title'=> 'Need For Speed Most Wanted',
            'img'=> 'nfs.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '19-08-2025'),
            'category_id'=> '2',
            'desc'=> 'Need For Speed Mostwanted adalah sebuah game racing yang dikembangkan oleh Electronic Arts pada tahun 2005, dan game ini merupakan seri ke sembilan dalam seri Need for Speed.',
            'link'=> 'https://ouo.io/NSFL01',
        ]);
        $genreIds = [9];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'the-warriors',
            'title'=> 'The Warriors',
            'img'=> 'thewarriors.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '20-08-2025'),
            'category_id'=> '2',
            'desc'=> 'The Warriors adalah game yang dikembangkan oleh Rockstar Toronto pada tahun 2005. Game ini dibuat didasarkan dari film tahun 1979 yang berjudul serupa.',
            'link'=> 'https://ouo.io/lLXoRv6'
        ]);
        $genreIds = [1, 5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'the-incredibles-rise-of-the-underminer',
            'title'=> 'The Incredibles Rise Of The Underminer',
            'img'=> 'theincredible.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '21-08-2025'),
            'category_id'=> '2',
            'desc'=> 'The Incredibles Rise Of The Underminer dikembangkan oleh Heavy Iron Studios pada tahun 2005. di Game ini kita bisa bermain secara Multi Player bersama teman. Di seri kedua ini kita berpetualang bersama Frozone untuk membasmi kejahatan para robot yang mengancam perdamaian.',
            'link'=> 'https://ouo.io/42VaqX'
        ]);
        $genreIds = [1];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'black',
            'title'=> 'Black',
            'img'=> 'black.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-08-2025'),
            'category_id'=> '2',
            'desc'=> 'The Incredibles: Rise of the Underminer adalah sebuah game yang dirilis pada tahun 2005. Game ini merupakan alternatif sequel dari film animasi The Incredibles tahun 2004.',
            'link'=> 'https://ouo.io/D67Jlg'
        ]);
        $genreIds = [1, 11];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'sengoku-basara-heroes-2',
            'title'=> 'Sengoku Basara Heroes 2',
            'img'=> 'basara.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '23-08-2025'),
            'category_id'=> '2',
            'desc'=> 'Sengoku Basara Heroes 2 adalah sebuah game Hack and Slash yang dikembangkan oleh Capcom. Game ini pertama kali dirilis pada tahun 2007 untuk Playstation 2 dan Nintendo Wii',
            'link'=> 'https://ouo.io/sG6BUt8'
        ]);
        $genreIds = [1, 5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'god-hand',
            'title'=> 'God Hand',
            'img'=> 'godhand.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '24-08-2025'),
            'category_id'=> '2',
            'desc'=> 'Dikembangkan oleh Clover Studio, game ini dirilis di jepang dan amerika pada tahun 2006, dan untuk wilayah PAL pada tahun 2007.',
            'link'=> 'https://ouo.io/PIW9ak'
        ]);
        $genreIds = [1, 5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'god-of-war',
            'title'=> 'God Of War',
            'img'=> 'gow.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '25-08-2025'),
            'category_id'=> '2',
            'desc'=> 'God of War adalah game yang dikembangkan oleh Santa Monica Studio pada tahun 2005. Game ini berlatar di mitologi yunani, yang dimana disini kita berperan sebagai seorang prajurit sparta yang bernama kratos.',
            'link'=> 'https://ouo.io/FLhjWq'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'jet-li-rise-to-honor',
            'title'=> 'Jet Li Rise To Honor',
            'img'=> 'jetli.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '26-08-2025'),
            'category_id'=> '2',
            'desc'=> 'Dikembangkan oleh Sony Computer Entertainment pada tahun 2004. Sesuai namanya, di game ini kita berperan sebagai Jet Li yang dimana dia ini adalah seorang polisi hongkong, yang menyamar sebagai paengawal Boss Chiang.',
            'link'=> 'https://ouo.io/cR07Ul'
        ]);
        $genreIds = [1, 5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'bully',
            'title'=> 'bully',
            'img'=> 'bully.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Bully atau judul alternatif nya Canis Canem Edit adalah game yang dikembangkan oleh Rockstar Vancouver pada tahun 2006 untuk playstation 2. Di game ini kita berperan sebagai Jimmy Hopkins yang dimana merupakan seorang remaja nakal dan anak yatim piatu yang telah diusir beberapa kali oleh sekolah lamanya. Ia akhirnya di masukkan ke Akademi Bullworth oleh ayah dan ibu angkatnya.',
            'link'=> 'https://ouo.io/0VCqdxu'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'crash-twinsanity',
            'title'=> 'crash twinsanity',
            'img'=> 'crashtwinsanity.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> "Crash Twinsanity adalah sebuah game platformer yang dirilis pada tahun 2004 yang dikembangkan oleh Traveller's Tales.",
            'link'=> 'https://ouo.io/mIXyxVH'
        ]);
        $genreIds = [7];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'def-jam-fight-for-ny',
            'title'=> 'def jam fight for ny',
            'img'=> 'defjamfightforny.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Def Jam Fight for NY adalah game bergenre Fighting yang dikembangkan oleh AKI Corporation dan EA Canada lalu diterbitkan oleh EA Games pada tahun 2004.',
            'link'=> 'https://ouo.io/ia73sS'
        ]);
        $genreIds = [5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'final-fantasy-x',
            'title'=> 'final fantasy x',
            'img'=> 'finalfantasyx.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Final Fantasy X merupakan game role playing yang dikembangkan dan di terbitkan oleh Square pada tahun 2001. Berlatar didunia Fantasy Spira, dan memiliki latar tempat Pasifik Selatan, Thailand, dan jepang.',
            'link'=> 'https://ouo.io/GZVmWw'
        ]);
        $genreIds = [10];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'grand-turismo-4',
            'title'=> 'gran turismo 4',
            'img'=> 'granturismo4.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Gran Turismo 4 adalah sebuah game simulasi yang dikembangkan oleh Polyphony Digital dan di diterbitkan oleh Sony Computer Entertainment pada tahun 2004. Di Game ini memiliki 721 Mobil dari 80 perusahaan manufaktur mobil dan memiliki 51 Track balap.',
            'link'=> 'https://ouo.io/mHJ5BTT'
        ]);
        $genreIds = [9, 12];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'digimon-rumble-arena-2',
            'title'=> 'digimon rumble arena 2',
            'img'=> 'digimonrumblearena2.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Digimon Rumble Arena 2 adalah game bergenre fighting yang dirilis Bandai pada tahun 2004. Game ini merupakan sequel lanjutan dari versi sebelumnya.',
            'link'=> 'https://ouo.io/rGBT6WJ'
        ]);
        $genreIds = [5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'dark-cloud-2',
            'title'=> 'dark cloud 2',
            'img'=> 'darkcloud2.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Dark Cloud 2 atau juga dikenal sebagai Dark Chronicle adalah game yang dikembangkan oleh Level-5 dan dirilis oleh Sony Computer Entertainment pada tahun 2002.',
            'link'=> 'https://ouo.io/JjsN23o'
        ]);
        $genreIds = [1, 10];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'dynasty-warriors-5-xtreme-legend',
            'title'=> 'dynasty warriors 5 xtreme legend',
            'img'=> 'dynastywarriors5xtremelegend.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Dynasty Warriors 5 Xtreme Legend dirilis pada tahun 2005. Menurut Wikipedia di seri ini pemain tidak diizinkan untuk memainkan Mode Mosou jika tidak punya  disk game Dynasty Warrior 5.',
            'link'=> 'https://ouo.io/6ZuYXs'
        ]);
        $genreIds = [1];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'haunting-ground',
            'title'=> 'haunting ground',
            'img'=> 'hauntingground.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Haunting Ground adalah game bergenre Survival Horror yang dikembangkan dan dirilis oleh Capcom pada tahun 2005. Cerita berkisah tentang seorang wanita bernama Fiona Belli yang terbangun di ruang bawah tanah sebuah kastil. Di game ini mengharuskan player untuk menghindari dan sembunyi dari musuh, karna kalo fiona dekat dengan musuh entah kenapa layar game menjadi putih blur seperti  belum sarapan di dunia nyata lalu mau pingsan.',
            'link'=> 'https://ouo.io/PPSAABC'
        ]);
        $genreIds = [6];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'yakuza-2',
            'title'=> 'yakuza 2',
            'img'=> 'yakuza2.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '17-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Dirilis pada tahun 2006, game ini dikembangkan dan dirilis oleh Sega yang dimana ini adalah seri kedua dari judul sebelumnya. Di seri ini Kazuma Kiryu menerima permintaan dari Klan Tojo untuk mencegah perang antara Tojo dengan Omi Alliance.',
            'link'=> 'https://ouo.io/iZHaK0r'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'genji',
            'title'=> 'genji',
            'img'=> 'genji.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '19-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Genji adalah sebuah Game Hack & Slash yang dikembangkan oleh Game Republic pada tahun 2005. Memiliki gameplay seperti Dynasty Warriors, disini kita bermain sebagaii Yoshitsune atau benkei yang masing masing karakter memiliki ciri khas masing masing.',
            'link'=> 'https://ouo.io/P0dPPH'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'shadow-of-rome',
            'title'=> 'shadow of rome',
            'img'=> 'shadowofrome.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '19-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Caesar telah dibunuh di dalam senat Romawi dan konspirasi membayangi dimana mana. Hanya Agrippa dan Octavianus yang beranii mencari kebenaran dalam game buatan Capcom ini.',
            'link'=> 'https://ouo.io/iEdbs3'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'twisted-metal-black',
            'title'=> 'twisted metal black',
            'img'=> 'twistedmetalblack.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '19-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Twisted Metal Black adalah sebuah game perang yang menggunakan kendaraan sebagai alat perang nya. Di game ini tersedia banyak karakter yang bisa dimainkan, setiap karakter memilik statistik dan alur cerita sendiri. Di game ini mengharuskan kamu untuk berkeliling area untuk mencoba mengalahkan musuh sambil mencoba untuk bertahan hidup.',
            'link'=> 'https://ouo.io/Zb041o'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'ar-tonelico-2-melody-of-metafalica',
            'title'=> 'ar tonelico 2 melody of metafalica',
            'img'=> 'artonelico2melodyofmetafalica.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '21-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Ar tonelico 2 Melody of Metafalica adalah sebuah game bertemakan Role Playing, yang dikembangkan oleh Gust yang dirilis di jepang pada tahun 2007.',
            'link'=> 'https://ouo.io/u3BJED'
        ]);
        $genreIds = [10];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'castlevania-curse-of-darkness',
            'title'=> 'castlevania curse of darkness',
            'img'=> 'castlevaniacurseofdarkness.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '21-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Castlevania Curse of Darkness sebuah game yang dikembangkan oleh Konami pada tahun 2005.',
            'link'=> 'https://ouo.io/oWOtw4H'
        ]);
        $genreIds = [1, 10];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'onimusha-3-demon-siege',
            'title'=> 'onimusha 3 demon siege',
            'img'=> 'onimusha3demonsiege.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '21-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Onimusha 3 Demon Siege adalah sebuah game yang dikembangkan oleh Capcom pada tahun 2004.',
            'link'=> 'https://ouo.io/e0apyW'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'silent-hill-origins',
            'title'=> 'silent hill origins',
            'img'=> 'silenthillorigins.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '21-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Silent Hill Origins adalah sebuah game yang bertemakan Survival & Horror yang dikembangkan oleh Climax Studios dan dirilis oleh Konami di tahun 2007.',
            'link'=> 'https://ouo.io/0LqZS5D'
        ]);
        $genreIds = [6];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'spiderman-3',
            'title'=> 'spiderman 3',
            'img'=> 'spiderman3.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '21-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Spider-Man 3 adalah sebuah Game yang berdasarkan pada film tahun 2007 dengan judul yang sama.',
            'link'=> 'https://ouo.io/zCfBfy'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'yakuza',
            'title'=> 'yakuza',
            'img'=> 'yakuza.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '21-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Yakuza adalah sebuah game yang dikembangkan oleh Sega, dan dirilis pada tahun 2005 untuk wilayah jepang, kemudian pada 2006 baru dirilis secara global.',
            'link'=> 'https://ouo.io/rsLSwjH'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'ben-10-protector-of-earth',
            'title'=> 'ben 10 protector of earth',
            'img'=> 'ben10protectorofearth.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Ben 10 Protector Of Earth adalah sebuah game yang dikembangkan oleh High Voltage Software dan dirilis oleh D3 Publisher pada tahun 2007.',
            'link'=> 'https://ouo.io/xTNNKV'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'digimon-world-4',
            'title'=> 'digimon world 4',
            'img'=> 'digimonworld4.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Digimon World 4 adalah sebuah game yang dikembangkan oleh BEC dan dirilis oleh Bandai di tahun 2005',
            'link'=> 'https://ouo.io/yv9lap'
        ]);
        $genreIds = [1, 10];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'ghost-rider',
            'title'=> 'ghost rider',
            'img'=> 'ghostrider.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Ghost Rider adalah sebuah game yang dibuat berdasarkan film. Game ini dikembangkan oleh Climax Action dan dirilis oleh 2K pada tahun 2007.',
            'link'=> 'https://ouo.io/Pg3bLZH'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'mortal-kombat-deadly-alliance',
            'title'=> 'mortal kombat deadly alliance',
            'img'=> 'mortalkombatdeadlyalliance.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Mortal Kombat Deadly Alliance adalah sebuah game yang dikembangkan sekaligus dirilis oleh Midway pada tahun 2002.',
            'link'=> 'https://ouo.io/d7ES1U'
        ]);
        $genreIds = [5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'naruto-ultimate-ninja-2',
            'title'=> 'naruto ultimate ninja 2',
            'img'=> 'narutoultimateninja2.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Naruto Ultimate Ninja 5 adalah sebuah game yang bertemakan tipe Fighting yang dikembangkan oleh Cyber Connect dan dirilis oleh Bandai pada tahun 2004 untuk region jepang sedangkan untuk global dirilis di tahun 2007.',
            'link'=> 'https://ouo.io/cwTB6k'
        ]);
        $genreIds = [5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'one-piece-round-the-land',
            'title'=> 'one piece round the land',
            'img'=> 'onepieceroundtheland.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'One Piece Round the Land adalah sebuah Game yang dikembangkan oleh Bandai di tahun 2004.',
            'link'=> 'https://ouo.io/qC2eEP'
        ]);
        $genreIds = [1, 2];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'radiata-stories',
            'title'=> 'radiata stories',
            'img'=> 'radiatastories.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Radiata Stories adalah sebuah game Role Playing di kembangkan oleh tri-Ace dan dirilis oleh Square Enix pada tahun 2005.',
            'link'=> 'https://ouo.io/mAqov5'
        ]);
        $genreIds = [1, 10];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'soul-calibur-3',
            'title'=> 'soul calibur 3',
            'img'=> 'soulcalibur3.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Soul Calibur 3 adalah sebuah game bertemakan Fighting yang dikembangkan sekaligus dirilis oleh Namco pada tahun 2005.',
            'link'=> 'https://ouo.io/80T0Y3V'
        ]);
        $genreIds = [5];
        $post->genre()->syncWithoutDetaching($genreIds);

        $post = Post::create([
            'slug'=> 'yu-gi-oh-gx-tag-force',
            'title'=> 'yu-gi-oh gx tag force',
            'img'=> 'yugiohgxtagforce.jpg',
            'created_at'=> Carbon::createFromFormat('d-m-Y', '22-10-2025'),
            'category_id'=> '2',
            'desc'=> 'Yu-Gi-Oh GX Tag Force adalah sebuah Game yang bertemakan Card yang dimana game ini dikembangkan oleh Konami.',
            'link'=> 'https://ouo.io/NdtFcD'
        ]);
        $genreIds = [14];
        $post->genre()->syncWithoutDetaching($genreIds);
    }
}
