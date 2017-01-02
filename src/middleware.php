<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);

use Symfony\Component\DomCrawler\Crawler;

$app->add(function (\Slim\Http\Request $request, \Slim\Http\Response $response, $next) {
    /** @var $response \Slim\Http\Response */

    $response = $next($request, $response);
    if ($request->hasHeader('X-PJAX')) {
        $crawler = new Crawler((string) $response->getBody());
        $stream = fopen('php://temp', 'w+');
        $body = new \Slim\Http\Body($stream);
        $content = $crawler->filter($request->getHeaderLine('X-PJAX-Container'))->html();
        $body->write($content);
        return $response->withBody($body);
    }

    return $response;

});