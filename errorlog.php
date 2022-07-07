<?php

class Storage
{
    public function add(string $key, $value)
    {
        if (! is_bool($value) && ! is_string($value)) {
            error_log("Требуется тип stirng или bool, f yt " . gettype($value));
            return false; // вместо false лучше генерировать исключения
        }
        // действия с $key и $value
    }
}
