<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mulmed = [ 
            'Human and Computer Interaction', 
            'User Experience', 
            'User Experience for Digital Immersive Technology'
        ];

        foreach($mulmed as $topic) {
            Post::create([
                'title' => $topic,
                'content' => fake()->paragraphs(3, true),
                'author' => fake()->name(),
                'category' => 'Interactive Multimedia',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8Z-Rc9VUwFtiRCu5YKzVPexKTvwxdFrzWhcNh9_Jx3KU0305-dRgNp7p9zK3bA6lkJUs&usqp=CAU',
                'published_at' => fake()->date(),
            ]);
        }


        $softeng = [
            'Pattern Software Design', 
            'Agile Software Development', 
            'Code Reengineering'
        ];

        foreach($softeng as $topic) {
            Post::create([
                'title' => $topic,
                'content' => fake()->paragraphs(3, true),
                'author' => fake()->name(),
                'category' => 'Software Engineering',
                'image' => 'https://blog.ipleaders.in/wp-content/uploads/2021/05/online-course-blog-header.jpg',
                'published_at' => fake()->date(),
            ]);
        }
    }
}
