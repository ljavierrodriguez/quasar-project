<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'texto' => 'Earth provides enough to satisfy every mans need, but not every mans greed.',
            'icono_boton_1' => 'shopping-cart',
            'texto_boton_1' => 'Get Theme',
            'style_boton_1' => 'buttonyellow',
            'icono_boton_2' => 'link',
            'texto_boton_2' => 'Start Tour',
            'style_boton_2' => 'buttoncolor',
        ]);

        DB::table('banners')->insert([
            'texto' => 'A project is complete when it starts working for you, rather than you working for it.',
            'icono_boton_1' => 'link',
            'texto_boton_1' => 'Learn More',
            'style_boton_1' => 'buttoncolor',
            'icono_boton_2' => '',
            'texto_boton_2' => '',
            'style_boton_2' => '',
        ]);

        DB::table('banners')->insert([
            'texto' => 'We help you serving a useful social purpose while generating high-quality profits.',
            'icono_boton_1' => 'download',
            'texto_boton_1' => 'Download Now',
            'style_boton_1' => 'buttonyellow',
            'icono_boton_2' => '',
            'texto_boton_2' => '',
            'style_boton_2' => '',
        ]);
    }
}
