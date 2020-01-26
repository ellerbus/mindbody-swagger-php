<?php
namespace Utilities;

/**
 *
 */
class HttpClient
{
    /**
     * Gets data from a server
     */
    public static function get($url, $headers = null)
    {
        $all_headers = [];

        if ($headers && is_array($headers))
        {
            $all_headers = $headers;
        }

        $options = [
            'http' => [
                'method' => 'GET',
            ],
        ];

        if (count($all_headers) > 0)
        {
            $options['http']['header'] = $all_headers;
        }

        $context = stream_context_create($options);

        $results = file_get_contents($url, false, $context);

        return $results;
    }

    /**
     * Posts data to a server
     */
    public static function post($url, $data, $headers = null)
    {
        $all_headers = [
            'Content-Type: application/x-www-form-urlencoded',
        ];

        if ($headers && is_array($headers))
        {
            $all_headers = $headers;
        }

        $options = [
            'http' => [
                'header' => $all_headers,
                'method' => 'POST',
            ],
        ];

        if ($data != null)
        {
            if (is_string($data))
            {
                $options['http']['content'] = $data;
            }
            else
            {
                $options['http']['content'] = http_build_query($data);
            }
        }

        $context = stream_context_create($options);

        $results = file_get_contents($url, false, $context);

        return $results;
    }
}
