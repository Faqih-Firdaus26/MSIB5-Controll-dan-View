<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts =
    [
        [
        "title" => "Universitas Singaperbangsa Karawang",
        "slug"  => "universitas-singaperbangsa-karawang",
        "jurusan" => "Teknik Elektro",
        "body" => "Universitas Singaperbangsa Karawang (UNSIKA) merupakan salah satu Perguruan Tinggi Negeri di Provinsi Jawa Barat. Didirikan pada tanggal 2 Februari 1982 yang berlokasi di Kabupaten Karawang."
        ],
        // [
        //     "title" => "judul Post Kedua",
        //     "slug" => "judul-post-kedua",
        //     "author" => "Jafar Setiawan",
        //     "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing
        //                 elit. Eos, consectetur fuga! Rerum ullam assumenda 
        //                 eligendi repudiandae neque tempora mollitia excepturi velit
        //                 ratione cumque labore culpa doloribus harum quaerat, 
        //                 at error praesentium temporibus voluptate consequatur 
        //                 necessitatibus? Placeat iste nesciunt, incidunt aliquam minima 
        //                 ratione qui eius tempore, magni ex rerum maiores distinctio, 
        //                 accusamus soluta quis unde molestiae saepe quos cumque quisquam porro ea. 
        //                 Corporis doloribus soluta, quas tempora eligendi alias fuga, 
        //                 ipsa iste perspiciatis nemo voluptas consequuntur inventore aut illum ipsam voluptatum."
        // ],
    ];


    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find ($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if ($p["slug"] === $slug ) {
        //         $post = $p;
        //     }
        // }
        return $posts ->firstWhere('slug', $slug);
    }
}
