<?php

if (! function_exists('activeMenu')) {
    function activeMenu(string $route, string $active = 'active'): string
    {
        return request()->routeIs($route) ? $active : '';
    }
}

if (! function_exists('formatDate')) {
    function formatDate($date, $format = 'd M Y'): string
    {
        return \Carbon\Carbon::parse($date)->format($format);
    }
}
