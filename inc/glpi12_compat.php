<?php

if (!function_exists("brandkit_get_web_dir")) {
    function brandkit_get_web_dir(string $plugin, bool $full = true): string
    {
        $relative = "/plugins/" . $plugin;

        if (!$full) {
            return $relative;
        }

        $base = rtrim((string) \rtrim(
            (string) ($_SERVER["REQUEST_URI"] ?? ""),
            "/"
        ), "/");

        $root = defined("GLPI_ROOT") ? GLPI_ROOT : "";
        $url = "/plugins/" . $plugin;

        if (class_exists("Plugin") && method_exists("Plugin", "getWebDir")) {
            return Plugin::getWebDir($plugin, $full);
        }

        return $url;
    }
}
