<?php
namespace MindBody\Clients;

abstract class BaseClient
{
    protected $base_url = 'https://api.mindbodyonline.com/public/v6/';

    /**
     *
     */
    protected function getUrl($url)
    {
        return $this->base_url . $url;
    }

    /**
     *
     */
    private function getHeaders()
    {
        $cfg = \Utilities\Configuration::Instance()->mindbody;

        $headers = [
            'Content-Type: application/json',
            'SiteId: ' . $cfg->site_id,
            'Api-Key: ' . $cfg->api_key,
        ];

        if (isset($_SESSION['mindbody_token']))
        {
            $headers['Authorization'] = $_SESSION['mindbody_token'];
        }

        return $headers;
    }

    /**
     *
     */
    protected function get($url, $data = null)
    {
        $headers = $this->getHeaders();

        if ($data != null)
        {
            $url = $url . '?' . http_build_query($data);
        }

        $results = \Utilities\HttpClient::get($url, $headers);

        return json_decode($results);
    }

    /**
     *
     */
    protected function post($url, $data)
    {
        $headers = $this->getHeaders();

        $json = json_encode($data);

        $results = \Utilities\HttpClient::post($url, $json, $headers);

        return json_decode($results);
    }
}
