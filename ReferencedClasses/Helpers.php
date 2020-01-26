<?php

/**
 *
 */
class Helpers
{
    /**
     *
     */
    public static function snakeCase($text)
    {
        $expression = '/(?<=\d)(?=[A-Za-z])|(?<=[A-Za-z])(?=\d)|(?<=[a-z])(?=[A-Z])/';

        return strtolower(preg_replace($expression, '_', $text));
    }

    /**
     *
     */
    public static function spinalCase($text)
    {
        $expression = '/(?<=\d)(?=[A-Za-z])|(?<=[A-Za-z])(?=\d)|(?<=[a-z])(?=[A-Z])/';

        return strtolower(preg_replace($expression, '-', $text));
    }
}
