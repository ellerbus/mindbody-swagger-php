namespace MindBody\Clients;

/**
 * Generated <?=date('Y-m-d H:i')?>;
 */
class <?=$client_key?>Client extends BaseClient
{
    <?php foreach ($client->methods as $key => $method): ?>

    /**
     * <?=$method->operation->summary ?? 'none'?>;
     * <?=$this->getDescription($method->operation)?>;
     *
     */
    public function <?=$method->name?>(<?=$method->getRequest()?>)<?=$method->getResponse()?>

    {
        $url = $this->getUrl('<?=$method->getPath()?>');

        $response = $this-><?=$method->http_method?>($url, $request);

        return $response;
    }
    <?php endforeach?>

}
