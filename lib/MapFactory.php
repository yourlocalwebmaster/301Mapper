<?php

namespace Lib;

class MapFactory {
    

    /**
     * @param $uri
     * @param array $arrayOfRedirects i.e. ['index.php'=>'index2.php', 'old'=>'new']
     * @return mixed
     */
    public static function Mapper($uri, array $arrayOfRedirects)
    {
        $PhpMapper = new Php301Mapper();
        $PhpMapper->setRedirects($arrayOfRedirects);
        $PhpMapper->setUri($uri);
        return $PhpMapper;
    }
}