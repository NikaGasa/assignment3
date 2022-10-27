<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\youtube;

class YTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        youtube::create([
            'link'=> "https://www.youtube.com/watch?v=xvftIIrnvxs&ab_channel=TokhleOfficial",
            'title' => "გოსლინგი ეძებს სათოხლავს",
            'description' => '#BladeRunner2049 #Drive #Movie #Tokhle',
            'channelname' => 'Tokhle Official',
        ]);

        youtube::create([
            'link'=> "https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley",
            'title' => "Rick Astley - Never Gonna Give You Up (Official Music Video)",
            'description' => 'he official video for “Never Gonna Give You Up” by Rick Astley',
            'channelname'=> 'Rick Astley'
        ]);

        youtube::create([
            'link'=> "https://www.youtube.com/watch?v=XqZsoesa55w&ab_channel=PinkfongBabyShark-Kids%27Songs%26Stories",
            'title' => "Baby Shark Dance | #babyshark Most Viewed Video | Animal Songs | PINKFONG Songs for Children",
            'description' => '⭐️ [NEW CHANNEL] Subscribe 👶🏼 Bebefinn - Nursery Rhymes & Kids Songs ⭐️ 
            https://www.youtube.com/channel/UC-cY...
            ',
            'channelname' => ('Pinkfong Baby Shark - Kids Songs & Stories'),
        ]);

        youtube::create([
            'link'=> "https://www.youtube.com/watch?v=Oe3FG4EOgyU&ab_channel=Sentinel79",
            'title' => "Schnappi Das Kleine Krokodil",
            'description' => 'Schnappi The Small Crocodile',
            'channelname' => 'Sentinel79',
        ]);

        youtube::create([
            'link'=> "https://www.youtube.com/watch?v=Oqrm-9Wy8iU&ab_channel=10Hours",
            'title' => "AUUGHHH! (TikTok Sound) [10 Hours]",
            'description' => '🌎 133rd video!            ',
            'channelname' => '10Hours',
        ]);
    }
}
