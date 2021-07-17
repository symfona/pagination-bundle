<?php declare(strict_types=1);

namespace Symfona\PaginationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class ExampleControllerTest extends WebTestCase
{
    public function testExample(): void
    {
        $response = $this->sendRequest();

        $this->assertSame('{"count":5,"items":[3,4]}', $response->getContent());
        $this->assertSame(Response::HTTP_OK, $response->getStatusCode());
    }

    private function sendRequest(): Response
    {
        $client = self::createClient();

        $client->request(Request::METHOD_GET, '/');

        return $client->getResponse();
    }
}
