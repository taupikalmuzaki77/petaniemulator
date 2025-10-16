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
    }
}
