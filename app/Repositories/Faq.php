<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Faq{
    public static function getFaq(){
        $datas = collect([

            (object)[
             'question' => 'What Shipping Methods are Available?',
             'answer' => 'Aenean malesuada vitae nibh id lacinia. Vestibulum imperdiet viverra lobortis. Quisque placerat sapien non placerat interdum. libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo.',
            ],

            (object)[
                'question' => 'How Long Will it Take To Get My Package?',
                'answer' => 'In egestas, libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo. Donec viverra tortor quis tortor scelerisque risus finibus. Integer viverra pretium auctor.',
            ],

            (object)[
                'question' => 'How Do I Track My Order?',
                'answer' => 'Aenean malesuada vitae nibh id lacinia. Vestibulum imperdiet viverra lobortis. Quisque placerat sapien non placerat interdum. libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo.',
            ],

            (object)[
                'question' => 'Do I need an account to place an order?',
                'answer' => 'Aenean malesuada vitae nibh id lacinia. Vestibulum imperdiet viverra lobortis. Quisque placerat sapien non placerat interdum. libero vitae scelerisque tristique, turpis augue faucibus dolor, at aliquet ligula massa at justo.',
            ],

        ])->all();

        return $datas;
    }
}