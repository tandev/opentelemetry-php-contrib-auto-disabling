<?php

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\HttpClient\Response\ResponseStream;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

class HttpClientTest extends TestCase {

    public function test(): void {
        $httpClient = new HttpClient();
        $httpClient->request('foo', '', []);

        self::assertTrue(true);
    }
}

class HttpClient implements HttpClientInterface
{
    public function request(string $method, string $url, array $options = []): ResponseInterface
    {
        if (isset($options['on_progress'])) {
            throw new RuntimeException('The option being set means the otel autoinstrumentation is active, but an http client might not support it. (Like ApiPlatform)');
        }

        return new MockResponse();
    }

    public function stream(iterable|ResponseInterface $responses, float $timeout = null): ResponseStreamInterface
    {
        throw new RuntimeException();
    }

    public function withOptions(array $options): static
    {
        throw new RuntimeException();
    }
}