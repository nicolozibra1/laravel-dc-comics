<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'nav_links' => [
           'characters',
           'comics',
           'movies',
           'tv',
           'games',
           'collectibles',
           'video',
           'fans',
           'news',
           'shop'
        ],
        'banner_promo' => [
            [
                "title" => 'digital comics',
                "image" => '/img/buy-comics-digital-comics.png'
            ],
            [
                "title" => 'dc merchandise',
                "image" => '/img/buy-comics-merchandise.png'
            ],
            [
                "title" => 'subscription',
                "image" => '/img/buy-comics-subscriptions.png'
            ],
            [
                "title" => 'comic shop locator',
                "image" => '/img/buy-comics-shop-locator.png'
            ],
            [
                "title" => 'dc power visa',
                "image" => '/img/buy-dc-power-visa.png'
            ]
        ],
        'footer_links' => [
            [
                "title" => 'dc comics',
                "links" => [
                    [
                        "text" => 'characters',
                        "link" => '#'
                    ],
                    [
                        "text" => 'comics',
                        "link" => '#'
                    ],
                    [
                        "text" => 'movies',
                        "link" => '#'
                    ],
                    [
                        "text" => 'tv',
                        "link" => '#'
                    ],
                    [
                        "text" => 'games',
                        "link" => '#'
                    ],
                    [
                        "text" => 'videos',
                        "link" => '#'
                    ],
                    [
                        "text" => 'news',
                        "link" => '#'
                    ],
                ]
            ],
            [
                "title" => 'shop',
                "links" => [
                    [
                        "text" => 'Shop DC',
                        "link" => '#'
                    ],
                    [
                        "text" => 'Shop DC Collectibles',
                        "link" => '#'
                    ]
                ]
            ],
            [
                "title" => 'dc',
                "links" => [
                    [
                        "text" => 'terms of use',
                        "link" => '#'
                    ],
                    [
                        "text" => 'privacy poolicy (new)',
                        "link" => '#'
                    ],
                    [
                        "text" => 'ad choices',
                        "link" => '#'
                    ],
                    [
                        "text" => 'advertising',
                        "link" => '#'
                    ],
                    [
                        "text" => 'jobs',
                        "link" => '#'
                    ],
                    [
                        "text" => 'subscriptions',
                        "link" => '#'
                    ],
                    [
                        "text" => 'talent workshops',
                        "link" => '#'
                    ],
                    [
                        "text" => 'CPSC Certificates',
                        "link" => '#'
                    ],
                    [
                        "text" => 'ratings',
                        "link" => '#'
                    ],
                    [
                        "text" => 'Show help',
                        "link" => '#'
                    ],
                    [
                        "text" => 'contact us',
                        "link" => '#'
                    ],
                ]
            ],
            [
                "title" => 'sites',
                "links" => [
                    [
                        "text" => 'DC',
                        "link" => '#'
                    ],
                    [
                        "text" => 'MAD Magazine',
                        "link" => '#'
                    ],
                    [
                        "text" => 'DC Kids',
                        "link" => '#'
                    ],
                    [
                        "text" => 'DC Universe',
                        "link" => '#'
                    ],
                    [
                        "text" => 'DC Power Visa',
                        "link" => '#'
                    ]
                ]
            ],
        ],
        'social_links' => [
            [
                "title" => 'facebook',
                "image" => '/img/footer-facebook.png'
            ],
            [
                "title" => 'twitter',
                "image" => '/img/footer-twitter.png'
            ],
            [
                "title" => 'youtube',
                "image" => '/img/footer-youtube.png'
            ],
            [
                "title" => 'pinterest',
                "image" => '/img/footer-pinterest.png'
            ],
            [
                "title" => 'periscope',
                "image" => '/img/footer-periscope.png'
            ],
        ],
        'comics' => config('db.comics')
    ];
    // dd(config('db.comics'));
    return view('home', $data);
})->name('home');

Route::resource('comics', ComicsController::class);

Route::get('/comics/{id}', function ($id) {
    $data = [
        'nav_links' => [
           'characters',
           'comics',
           'movies',
           'tv',
           'games',
           'collectibles',
           'video',
           'fans',
           'news',
           'shop'
        ],
        'banner_promo' => [
            [
                "title" => 'digital comics',
                "image" => '/img/buy-comics-digital-comics.png'
            ],
            [
                "title" => 'dc merchandise',
                "image" => '/img/buy-comics-merchandise.png'
            ],
            [
                "title" => 'subscription',
                "image" => '/img/buy-comics-subscriptions.png'
            ],
            [
                "title" => 'comic shop locator',
                "image" => '/img/buy-comics-shop-locator.png'
            ],
            [
                "title" => 'dc power visa',
                "image" => '/img/buy-dc-power-visa.png'
            ]
        ],
        'footer_links' => [
            [
                "title" => 'dc comics',
                "links" => [
                    [
                        "text" => 'characters',
                        "link" => '#'
                    ],
                    [
                        "text" => 'comics',
                        "link" => '#'
                    ],
                    [
                        "text" => 'movies',
                        "link" => '#'
                    ],
                    [
                        "text" => 'tv',
                        "link" => '#'
                    ],
                    [
                        "text" => 'games',
                        "link" => '#'
                    ],
                    [
                        "text" => 'videos',
                        "link" => '#'
                    ],
                    [
                        "text" => 'news',
                        "link" => '#'
                    ],
                ]
            ],
            [
                "title" => 'shop',
                "links" => [
                    [
                        "text" => 'Shop DC',
                        "link" => '#'
                    ],
                    [
                        "text" => 'Shop DC Collectibles',
                        "link" => '#'
                    ]
                ]
            ],
            [
                "title" => 'dc',
                "links" => [
                    [
                        "text" => 'terms of use',
                        "link" => '#'
                    ],
                    [
                        "text" => 'privacy poolicy (new)',
                        "link" => '#'
                    ],
                    [
                        "text" => 'ad choices',
                        "link" => '#'
                    ],
                    [
                        "text" => 'advertising',
                        "link" => '#'
                    ],
                    [
                        "text" => 'jobs',
                        "link" => '#'
                    ],
                    [
                        "text" => 'subscriptions',
                        "link" => '#'
                    ],
                    [
                        "text" => 'talent workshops',
                        "link" => '#'
                    ],
                    [
                        "text" => 'CPSC Certificates',
                        "link" => '#'
                    ],
                    [
                        "text" => 'ratings',
                        "link" => '#'
                    ],
                    [
                        "text" => 'Show help',
                        "link" => '#'
                    ],
                    [
                        "text" => 'contact us',
                        "link" => '#'
                    ],
                ]
            ],
            [
                "title" => 'sites',
                "links" => [
                    [
                        "text" => 'DC',
                        "link" => '#'
                    ],
                    [
                        "text" => 'MAD Magazine',
                        "link" => '#'
                    ],
                    [
                        "text" => 'DC Kids',
                        "link" => '#'
                    ],
                    [
                        "text" => 'DC Universe',
                        "link" => '#'
                    ],
                    [
                        "text" => 'DC Power Visa',
                        "link" => '#'
                    ]
                ]
            ],
        ],
        'social_links' => [
            [
                "title" => 'facebook',
                "image" => '/img/footer-facebook.png'
            ],
            [
                "title" => 'twitter',
                "image" => '/img/footer-twitter.png'
            ],
            [
                "title" => 'youtube',
                "image" => '/img/footer-youtube.png'
            ],
            [
                "title" => 'pinterest',
                "image" => '/img/footer-pinterest.png'
            ],
            [
                "title" => 'periscope',
                "image" => '/img/footer-periscope.png'
            ],
        ],
    ];
        $comics = config('db.comics');
        $comic = $comics[$id];
    return view('comics.show', $data, compact('comic'));
})->name('comics.show');
