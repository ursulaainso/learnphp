<?php 

namespace App\Controllers;

class PublicController {
    public function index() {
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
        include  __DIR__ . '/../../views/index.php';
    }

    public function us() {
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
        include __DIR__ . '/../../views/us.php';
    }

    public function tech() {
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
        include __DIR__ . '/../../views/tech.php';
    }
}