<?php

if (!function_exists('activeClass')) {
    /**
     * Membuat kelas ".active"
     *
     * Membuat kelas ".active" atau apapun yang didefinisikan sebagai argumen kedua
     * sebagai kelas aktif untuk route saat ini.
     *
     * @param array $routes routes yang diperiksa
     * @param string $class nama kelas yang dihasilkan
     * @param array $queries query string yang diperiksa
     * @return string
     */
    function activeClass($routes = [], $class = 'active', $queries = [])
    {
        if (is_string($routes)) {
            $routes = [$routes];
        }

        foreach ($routes as $key => $value) {
            if (request()->routeIs($value)) {
                // If current route is equal to given route, return active class
                return $class;
            }
        }

        if (count($queries) > 0) {
            foreach ($queries as $key => $value) {
                if (request()->query($key) == $value) {
                    return $class;
                }
            }
        }
    }
}
