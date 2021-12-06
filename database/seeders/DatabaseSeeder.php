<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Alief Hafids',
        //     'username' => 'siganteng', 
        //     'email' => 'aliefhafids12@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Igun Gun',
        //     'email' => 'igungun@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Rifle',
            'slug' => 'rifle'
        ]);

        Category::create([
            'name' => 'Shotgun',
            'slug' => 'shotgun'
        ]);

        Category::create([
            'name' => 'Awm',
            'slug' => 'awm'
        ]);

        Post::factory(5)->create();

//         Post::create([
//             'title' => 'Judul Pertama',
//             'slug' => 'judul-pertama',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aperiam consequatur consequuntur ab? Ipsum consequatur
// eum similique eos laboriosam minima accusantium mollitia ipsa, fugiat rem nam quia maxime voluptate temporibus.',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit repudiandae labore nam ipsa sit dolore, quia voluptatem
// laborum hic error, ea perferendis facilis minima quas pariatur expedita? Aspernatur ratione blanditiis consequuntur cum,
// iure laudantium possimus est animi dicta nostrum nisi deleniti laboriosam fuga aliquid, commodi cupiditate iste harum
// aut expedita tempora sunt optio quam quae. Beatae dolorem, natus sed inventore perspiciatis illo. Consequuntur
// similique, magni vitae nostrum enim dolores rerum quo unde odio, nam modi repudiandae nulla maiores qui cupiditate.
// Suscipit, ea consequuntur quidem excepturi doloremque neque quam, eligendi animi saepe incidunt autem dolorum quos
// tempora natus. Quaerat, excepturi aspernatur.',
//             'category_id' => 1,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul Kedua',
//             'slug' => 'judul-kedua',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aperiam consequatur consequuntur ab? Ipsum consequatur
// eum similique eos laboriosam minima accusantium mollitia ipsa, fugiat rem nam quia maxime voluptate temporibus.',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit repudiandae labore nam ipsa sit dolore, quia voluptatem
// laborum hic error, ea perferendis facilis minima quas pariatur expedita? Aspernatur ratione blanditiis consequuntur cum,
// iure laudantium possimus est animi dicta nostrum nisi deleniti laboriosam fuga aliquid, commodi cupiditate iste harum
// aut expedita tempora sunt optio quam quae. Beatae dolorem, natus sed inventore perspiciatis illo. Consequuntur
// similique, magni vitae nostrum enim dolores rerum quo unde odio, nam modi repudiandae nulla maiores qui cupiditate.
// Suscipit, ea consequuntur quidem excepturi doloremque neque quam, eligendi animi saepe incidunt autem dolorum quos
// tempora natus. Quaerat, excepturi aspernatur.',
//             'category_id' => 1,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul Ketiga',
//             'slug' => 'judul-ketiga',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aperiam consequatur consequuntur ab? Ipsum consequatur
// eum similique eos laboriosam minima accusantium mollitia ipsa, fugiat rem nam quia maxime voluptate temporibus.',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit repudiandae labore nam ipsa sit dolore, quia voluptatem
// laborum hic error, ea perferendis facilis minima quas pariatur expedita? Aspernatur ratione blanditiis consequuntur cum,
// iure laudantium possimus est animi dicta nostrum nisi deleniti laboriosam fuga aliquid, commodi cupiditate iste harum
// aut expedita tempora sunt optio quam quae. Beatae dolorem, natus sed inventore perspiciatis illo. Consequuntur
// similique, magni vitae nostrum enim dolores rerum quo unde odio, nam modi repudiandae nulla maiores qui cupiditate.
// Suscipit, ea consequuntur quidem excepturi doloremque neque quam, eligendi animi saepe incidunt autem dolorum quos
// tempora natus. Quaerat, excepturi aspernatur.',
//             'category_id' => 2,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul Keempat',
//             'slug' => 'judul-keempat',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aperiam consequatur consequuntur ab? Ipsum consequatur
// eum similique eos laboriosam minima accusantium mollitia ipsa, fugiat rem nam quia maxime voluptate temporibus.',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit repudiandae labore nam ipsa sit dolore, quia voluptatem
// laborum hic error, ea perferendis facilis minima quas pariatur expedita? Aspernatur ratione blanditiis consequuntur cum,
// iure laudantium possimus est animi dicta nostrum nisi deleniti laboriosam fuga aliquid, commodi cupiditate iste harum
// aut expedita tempora sunt optio quam quae. Beatae dolorem, natus sed inventore perspiciatis illo. Consequuntur
// similique, magni vitae nostrum enim dolores rerum quo unde odio, nam modi repudiandae nulla maiores qui cupiditate.
// Suscipit, ea consequuntur quidem excepturi doloremque neque quam, eligendi animi saepe incidunt autem dolorum quos
// tempora natus. Quaerat, excepturi aspernatur.',
//             'category_id' => 2,
//             'user_id' => 2
//         ]);


    }
}
