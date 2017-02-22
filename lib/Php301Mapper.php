<?php

namespace Lib;

class Php301Mapper
{

    /**
     * @var Array of redirects
     */
    public $redirects = [];

    /**
     * @var URI of the page.
     */
    public $uri;

    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @param array $redirects structure ['oldurl'=>'newurl', 'old'=>'new']
     */
    public function setRedirects(array $redirects)
    {
        foreach($redirects as $old=>$new)
        $this->redirects[$old] = $new;
    }

    /**
     * start the process on a given page.
     */
    public function run()
    {
        if($this->uriMatch()) $this->dispatchRedirect();
    }

    /**
     * send a 301 to server header and redirect
     */
    private function dispatchRedirect()
    {
        header("Location: ".$this->redirects[$this->uri], TRUE, 301);
    }

    /**
     * @return bool
     */
    public function uriMatch()
    {
        return (array_key_exists($this->uri, $this->redirects));
    }

}