<?php
/*
setcookie(string $name, string $value = "",
int $expires_or_options = 0, > take in seconds 
string $path = "", 
string $domain = "", 
bool $secure = false,
bool $httponly = false): bool
*/
setcookie('fruit', 'Apple', time() + (86400), '/');
if (isset($_COOKIE['fruit'])) {
    print_r($_COOKIE['fruit']);
} else {
    die('no cookies is set');
}