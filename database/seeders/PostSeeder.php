<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a default user if none exists
        $user = User::firstOrCreate(
            ['email' => 'rifky@example.com'],
            [
                'name' => 'Rifky',
                'password' => bcrypt('password'),
            ]
        );

        // Create blog posts
        $posts = [
            [
                'title' => 'Building My First Laravel Blog',
                'slug' => 'building-my-first-laravel-blog',
                'excerpt' => 'A journey into creating a simple blog system with Laravel, SQLite, and Blade templates.',
                'content' => '<div class="space-y-6">
    <p class="text-lg">Today I started building my first blog using Laravel. It\'s been an interesting journey setting up the database, models, and views.</p>
    
    <h2 class="text-2xl font-bold mt-8 mb-4">Why Laravel?</h2>
    <p>I chose Laravel because of its elegant syntax and powerful features. The Eloquent ORM makes database interactions incredibly simple, and Blade templates are intuitive to work with.</p>
    
    <h2 class="text-2xl font-bold mt-8 mb-4">The Setup</h2>
    <p>I\'m using SQLite for the database, which is perfect for development and small projects. No need for complex database server configurations - just a single file that stores everything.</p>
    
    <h3 class="text-xl font-semibold mt-6 mb-3">Key Features</h3>
    <ul class="list-disc list-inside space-y-2 ml-4">
        <li>User authentication and post ownership</li>
        <li>Clean URL slugs for SEO</li>
        <li>Published/draft status for posts</li>
        <li>Timestamps for tracking when posts were created</li>
    </ul>
    
    <h2 class="text-2xl font-bold mt-8 mb-4">What I Learned</h2>
    <p>Setting up relationships between Users and Posts was surprisingly easy. Laravel\'s conventions make everything just work. The migration system is also fantastic - version control for your database schema!</p>
    
    <div class="bg-gray-800 rounded-lg p-4 my-6">
        <code class="text-sm text-green-400">
            php artisan make:model Post -m<br>
            php artisan migrate
        </code>
    </div>
    
    <h2 class="text-2xl font-bold mt-8 mb-4">Next Steps</h2>
    <p>I\'m planning to add more features like categories, tags, and maybe even a simple admin panel. For now, I\'m happy with this basic setup that actually works!</p>
    
    <p class="text-muted mt-8">This is just the beginning of my Laravel journey. Stay tuned for more posts about web development and coding adventures.</p>
</div>',
                'featured_image' => null,
                'status' => 'published',
                'published_at' => now()->subDays(1),
            ],
        ];

        foreach ($posts as $postData) {
            Post::create(array_merge($postData, ['user_id' => $user->id]));
        }
    }
}
