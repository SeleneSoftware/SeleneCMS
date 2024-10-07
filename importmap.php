<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@hotwired/turbo' => [
        'version' => '8.0.10',
    ],
    '@fortawesome/fontawesome-free' => [
        'version' => '6.6.0',
    ],
    '@fortawesome/fontawesome-free/css/fontawesome.min.css' => [
        'version' => '6.6.0',
        'type' => 'css',
    ],
    'jquery' => [
        'version' => '3.7.1',
    ],
    'breakpoints-js' => [
        'version' => '1.0.6',
    ],
    '@fortawesome/fontawesome-free/css/all.css' => [
        'version' => '6.6.0',
        'type' => 'css',
    ],
];
