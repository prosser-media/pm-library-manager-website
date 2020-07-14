<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'PM Library Manager',
    'description' => 'Website description.',
    'collections' => [],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'border-b-2 border-primary' : '';
    },
    'selected_button' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'bg-primary imp:text-white' : '';
    },
];
