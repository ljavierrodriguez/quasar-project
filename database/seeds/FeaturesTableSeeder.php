<?php

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            'icono' => 'globe',
            'titulo' => 'Web Design',
            'descripcion' => 'Web design encompasses many different skills and disciplines in the production and maintenance of websites.',
        ]);

        DB::table('features')->insert([
            'icono' => 'user',
            'titulo' => 'User Experience',
            'descripcion' => 'The different areas of web design include web graphic design; interface design; authoring; user experience design; and seo.',
        ]);

        DB::table('features')->insert([
            'icono' => 'dashboard',
            'titulo' => 'Client Side',
            'descripcion' => 'The term web design is normally used to describe the design process relating to the front-end (client side) design of a website ',
        ]);

        DB::table('features')->insert([
            'icono' => 'cloud-download',
            'titulo' => 'Themes & Templates',
            'descripcion' => 'A web template system uses a template processor to combine web templates to form finished web pages.',
        ]);

        DB::table('features')->insert([
            'icono' => 'trophy',
            'titulo' => 'Publishing Tools',
            'descripcion' => 'It is a web publishing tool present in content management systems, web application frameworks, and HTML editors.',
        ]);

        DB::table('features')->insert([
            'icono' => 'microphone',
            'titulo' => 'Static & Dynamic',
            'descripcion' => 'Web templates can be used like the template of a form letter to generate "static" web pages in advance or to produce.',
        ]);
    }
}
