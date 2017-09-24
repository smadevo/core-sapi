<?php
namespace Smadevo\Request;

/**
 * SAPI request.
 *
 * @inheritdoc
 */
abstract class SAPI extends \Smadevo\Request\Base
{
    /**
     * Creates and returns a SAPI request.
     *
     * @return self
     */
    final public static function create(): self
    {
        return new static(
            $_SERVER['REQUEST_METHOD'],
            $_SERVER['REQUEST_URI']
        );
    }

    /**
     * @inheritDoc
     */
    final public function sendResponseStatus(int $code): void
    {
        http_response_code($code);
    }

    /**
     * @inheritDoc
     */
    final public function sendResponseHeader(string $header): void
    {
        header($header);
    }

    /**
     * @inheritDoc
     */
    final public function sendResponseBody(string $body): void
    {
        echo $body;
    }
}
