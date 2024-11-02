<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

spl_autoload_register(function ($className) {
    $parts = explode('\\', $className);
    unset($parts[0]);
    $className = implode('/', $parts);
    require_once 'src/' . $className . '.php';
});

use App\Router;

require_once __DIR__ '../routes.php';
require_once __DIR__ '../helpers.php';

Router::addRoute('/', function () {
    $posts = [
        [
            'title' => 'World news 1',
            'body' => 'World news body 1',
            'created_at' => 'May 24, 2020',
            'author' => 'Chris'
        ],
        [
            'title' => 'World news 2',
            'body' => 'World news body 2',
            'created_at' => 'December 14, 2020',
            'author' => 'Kaspar'
        ],
        [
            'title' => 'World news 3',
            'body' => 'World news body 3',
            'created_at' => 'August 12, 2020',
            'author' => 'Martin'
        ],
        [
            'title' => 'World news 4',
            'body' => 'World news body 4',
            'created_at' => 'September 1, 2021',
            'author' => 'Pets'
        ],
        [
            'title' => 'World news 5',
            'body' => 'World news body 5',
            'created_at' => 'June 8, 2023',
            'author' => 'Vello'
        ],
    ];
    include 'views/index.php';
});

Router::addRoute('/us', function () {
    $posts = [
        [
            'title' => 'U.S news 1',
            'body' => 'U.S news body 1',
            'created_at' => 'May 24, 2020',
            'author' => 'Chris'
        ],
        [
            'title' => 'U.S news 2',
            'body' => 'U.S news body 2',
            'created_at' => 'December 14, 2020',
            'author' => 'Kaspar'
        ],
        [
            'title' => 'U.S news 3',
            'body' => 'U.S news body 3',
            'created_at' => 'August 12, 2020',
            'author' => 'Martin'
        ],
        [
            'title' => 'U.S news 4',
            'body' => 'U.S news body 4',
            'created_at' => 'September 1, 2021',
            'author' => 'Pets'
        ],
        [
            'title' => 'U.S news 5',
            'body' => 'U.S news body 5',
            'created_at' => 'June 8, 2023',
            'author' => 'Vello'
        ],
    ];
    include 'views/us.php';
});

Router::addRoute('/tech', function () {
    $posts = [
        [
            'title' => 'Tech news 1',
            'body' => 'Tech news body 1',
            'created_at' => 'May 24, 2020',
            'author' => 'Chris'
        ],
        [
            'title' => 'Tech news 2',
            'body' => 'Tech news body 2',
            'created_at' => 'December 14, 2020',
            'author' => 'Kaspar'
        ],
        [
            'title' => 'Tech news 3',
            'body' => 'Tech news body 3',
            'created_at' => 'August 12, 2020',
            'author' => 'Martin'
        ],
        [
            'title' => 'Tech news 4',
            'body' => 'Tech news body 4',
            'created_at' => 'September 1, 2021',
            'author' => 'Pets'
        ],
        [
            'title' => 'Tech news 5',
            'body' => 'Tech news body 5',
            'created_at' => 'June 8, 2023',
            'author' => 'Vello'
        ],
    ];
    include 'views/tech.php';
});



$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match) {
  call_user_func();
} else {
  http_response_code(404);
}

// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $posts = [
//             [
//                 'title' => 'World news 1',
//                 'body' => 'World news body 1',
//                 'created_at' => 'May 24, 2020',
//                 'author' => 'Chris'
//             ],
//             [
//                 'title' => 'World news 2',
//                 'body' => 'World news body 2',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Kaspar'
//             ],
//             [
//                 'title' => 'World news 3',
//                 'body' => 'World news body 3',
//                 'created_at' => 'August 12, 2020',
//                 'author' => 'Martin'
//             ],
//             [
//                 'title' => 'World news 4',
//                 'body' => 'World news body 4',
//                 'created_at' => 'September 1, 2021',
//                 'author' => 'Pets'
//             ],
//             [
//                 'title' => 'World news 5',
//                 'body' => 'World news body 5',
//                 'created_at' => 'June 8, 2023',
//                 'author' => 'Vello'
//             ],
//         ];
//         include 'views/index.php';
//         break;
//     case '/us':
//         $posts = [
//             [
//                 'title' => 'U.S news 1',
//                 'body' => 'U.S news body 1',
//                 'created_at' => 'May 24, 2020',
//                 'author' => 'Chris'
//             ],
//             [
//                 'title' => 'U.S news 2',
//                 'body' => 'U.S news body 2',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Kaspar'
//             ],
//             [
//                 'title' => 'U.S news 3',
//                 'body' => 'U.S news body 3',
//                 'created_at' => 'August 12, 2020',
//                 'author' => 'Martin'
//             ],
//             [
//                 'title' => 'U.S news 4',
//                 'body' => 'U.S news body 4',
//                 'created_at' => 'September 1, 2021',
//                 'author' => 'Pets'
//             ],
//             [
//                 'title' => 'U.S news 5',
//                 'body' => 'U.S news body 5',
//                 'created_at' => 'June 8, 2023',
//                 'author' => 'Vello'
//             ],
//         ];
//         include 'views/us.php';
//         break;
//     case '/tech': 
//         $posts = [
//             [
//                 'title' => 'Tech news 1',
//                 'body' => 'Tech news body 1',
//                 'created_at' => 'May 24, 2020',
//                 'author' => 'Chris'
//             ],
//             [
//                 'title' => 'Tech news 2',
//                 'body' => 'Tech news body 2',
//                 'created_at' => 'December 14, 2020',
//                 'author' => 'Kaspar'
//             ],
//             [
//                 'title' => 'Tech news 3',
//                 'body' => 'Tech news body 3',
//                 'created_at' => 'August 12, 2020',
//                 'author' => 'Martin'
//             ],
//             [
//                 'title' => 'Tech news 4',
//                 'body' => 'Tech news body 4',
//                 'created_at' => 'September 1, 2021',
//                 'author' => 'Pets'
//             ],
//             [
//                 'title' => 'Tech news 5',
//                 'body' => 'Tech news body 5',
//                 'created_at' => 'June 8, 2023',
//                 'author' => 'Vello'
//             ],
//         ];
//         include 'views/tech.php';
//         break;
//     default: 
//         echo '404 page not found!';
// }