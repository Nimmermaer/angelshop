<?php

namespace MB\Angelshop\Controller;

use Psr\Http\Message\ResponseInterface;

class SearchController extends ActionController
{
    public function searchAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }
}
