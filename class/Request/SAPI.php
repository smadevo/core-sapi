<?php
namespace App\Request;

/**
 * @inheritdoc
 */
final class SAPI extends Base
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $path;

    /**
     * @inheritDoc
     */
    protected function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @inheritDoc
     */
    protected function getPath(): string
    {
        return $this->path;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->path   = $_SERVER['REQUEST_URI'];
    }

    /**
     * @inheritDoc
     */
    public function sendResponseStatus(int $code): void
    {
        http_response_code($code);
    }

    /**
     * @inheritDoc
     */
    public function sendResponseHeader(string $header): void
    {
        header($header);
    }

    /**
     * @inheritDoc
     */
    public function sendResponseBody(string $body): void
    {
        echo $body;
    }
}
