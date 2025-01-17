<?php

namespace Werner\BookStore\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Werner\BookStore\Helper\HtmlRenderTrait;

class HomePage implements RequestHandlerInterface
{
    use HtmlRenderTrait;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->renderView('homePage.php', [
            'title' => '',
            'activePage' => '/',
        ]);

        return new Response(200, [], $html);
    }
}
