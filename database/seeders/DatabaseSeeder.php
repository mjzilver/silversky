<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->insert([
            'title' => "Website laten maken",
            'url' => "images/website.svg",
            'short_description' => "Wij maken een website naar uw wensen die goed bij uw bedrijf past. Zo gemaakt dat u het zelf gemakkelijk kan bijhouden.",
            'description' => "Wij maken uw website op maat precies zoals u het wil hebben. Hiervoor gebruiken we Wordpress tenzij u specifiek een ander framework wilt gebruiken. Met Wordpress garanderen we dat uw website gemakkelijk aan de passen blijft voor u. Wordpress heeft veel thema's en plugins; hiermee kunnen we uw website helemaal stylen en uniek maken zonder dat het project veel kost. ",
        ]);
        \DB::table('services')->insert([
            'title' => "Website optimalisatie",
            'url' => "images/cogs.svg",
            'short_description' => "Wij optimaliseren delen van jullie al bestaande website zodat gemakkelijker te navigeren is voor klanten.",
            'description' => "Wij optimaliseren uw website helemaal zodat het modern oogt en gemakkelijk te gebruiken is voor u en uw klanten. Ook kan het uw website makkelijker te vinden maken in zoekmachines zoals Google en Bing. Websites die tijden niet bijgehouden worden raken snel verouderd, daarom is het belangrijk om uw website regelmatig bij te houden en te moderniseren. ",
        ]);
        \DB::table('services')->insert([
            'title' => "Plugin maken",
            'url' => "images/plugin.svg",
            'short_description' => "Wij bouwen een plugin op maat die helemaal bij uw website past. Deze is dan uniek voor",
            'description' => "Wilt u iets speciaals voor uw website maar kunt u geen goed passende plugin vinden ervoor? Wij kunnen een plugin maken voor u die compleet in uw algehele website past en helemaal voor u op maat gemaakt is. Dit betekent dat de plugin helemaal voor uw systeem gemaakt is en dus precies past met uw eigen stijl. ",
        ]);
        \DB::table('services')->insert([
            'title' => "Mobiele versie maken",
            'url' => "images/mobile.svg",
            'short_description' => "Wij maken een mobiele versie of app van jullie al bestaande website zodat klanten ook via de mobiel gemakkelijk uw site kan bezoeken.",
            'description' => "Wij maken een mobiele versie van uw website of zelfs een appje voor uw website.Met een thema kunnen we zorgen dat uw website er op een mobiel er netjes uitziet en compleet past.Mobiele websites zijn tegenwoordig enorm belangrijk veel mensen bekijken uw website op hun mobieltje en als dat niet goed werkt zullen ze wellicht snel wegklikken. Daarom vinden wij het belangrijk om een goede mobiele versie te maken van websites. Ook als u een website bij ons laat maken zit daar al een mobiele versie bij.",
        ]);
        \DB::table('services')->insert([
            'title' => "Website thematiseren",
            'url' => "images/style.svg",
            'short_description' => "Wij geven uw website een nieuw likje verf zodat het goed bij uw bedrijf en haar bedrijfskleuren past.",
            'description' => "Wij geven uw website een nieuw likje verf zodat het goed bij uw bedrijf en haar bedrijfskleuren past.",
        ]);
        \DB::table('services')->insert([
            'title' => "En meer",
            'url' => "images/other.svg",
            'short_description' => "Als wat u zoek er niet tussen staat, stuur een mailtje dan kijken wij of het mogelijk is.",
            'description' => "Als wat u zoek er niet tussen staat, stuur een mailtje dan kijken wij of het mogelijk is.",
        ]);

        \DB::table('portfolio')->insert([
            'title' => "Dogcenter",
            'url' => "Dogcenter.nl",
            'description' => "Dit is een website die ik gemaakt heb",
        ]);

        \DB::table('portfolio_images')->insert([
            'portfolio_id' => \App\Models\Portfolio::where('title', 'Dogcenter')->first()->id,
            'url' => "images/dogcenter_frontpage.png",
        ]);

        \DB::table('portfolio_images')->insert([
            'portfolio_id' => \App\Models\Portfolio::where('title', 'Dogcenter')->first()->id,
            'url' => "images/dogcenter_plugin_backend.png",
        ]);

        \DB::table('portfolio_images')->insert([
            'portfolio_id' => \App\Models\Portfolio::where('title', 'Dogcenter')->first()->id,
            'url' => "images/dogcenter_plugin_frontend.png",
        ]);

        \DB::table('portfolio')->insert([
            'title' => "Solute-Bewustwording",
            'url' => "Solute-Bewustwording.nl",
            'description' => "Dit is een website waar ik delen van gemaakt heb",
        ]);

        \DB::table('portfolio_images')->insert([
            'portfolio_id' => \App\Models\Portfolio::where('title', 'Solute-Bewustwording')->first()->id,
            'url' => "images/solute_numerology.png",
        ]);

        \DB::table('portfolio_images')->insert([
            'portfolio_id' => \App\Models\Portfolio::where('title', 'Solute-Bewustwording')->first()->id,
            'url' => "images/solute_plugin_backend.png",
        ]);

        \DB::table('portfolio_images')->insert([
            'portfolio_id' => \App\Models\Portfolio::where('title', 'Solute-Bewustwording')->first()->id,
            'url' => "images/solute_plugin_frontend.png",
        ]);

        User::create([
            'email' => 'admin@admin.nl',
            'password' => Hash::make('admin123'),
        ]);
    }
}
