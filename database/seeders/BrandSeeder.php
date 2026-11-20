<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Disney',
                'slug' => 'disney',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Disney%2B_logo.svg',
                'hover_video_url' => 'https://videos.pexels.com/video-files/3129671/3129671-hd_1920_1080_25fps.mp4',
                'sort_order' => 1,
            ],
            [
                'name' => 'Pixar',
                'slug' => 'pixar',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/40/Pixar_logo.svg',
                'hover_video_url' => 'https://videos.pexels.com/video-files/3129671/3129671-hd_1920_1080_25fps.mp4',
                'sort_order' => 2,
            ],
            [
                'name' => 'Marvel',
                'slug' => 'marvel',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/04/MarvelLogo.svg',
                'hover_video_url' => 'https://videos.pexels.com/video-files/3129671/3129671-hd_1920_1080_25fps.mp4',
                'sort_order' => 3,
            ],
            [
                'name' => 'Star Wars',
                'slug' => 'star-wars',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/6c/Star_Wars_Logo.svg',
                'hover_video_url' => 'https://videos.pexels.com/video-files/3129671/3129671-hd_1920_1080_25fps.mp4',
                'sort_order' => 4,
            ],
            [
                'name' => 'National Geographic',
                'slug' => 'national-geographic',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Natgeologo.svg',
                'hover_video_url' => 'https://videos.pexels.com/video-files/3129671/3129671-hd_1920_1080_25fps.mp4',
                'sort_order' => 5,
            ],
        ];

        foreach ($brands as $brand) {
            Brand::updateOrCreate(
                ['slug' => $brand['slug']],
                $brand
            );
        }
    }
}
