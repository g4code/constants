<?php

namespace G4\Constants;

class Http
{
    const HOST = 'host';

    // HTTP REQUEST METHODS
    const METHOD_GET    = 'GET';
    const METHOD_POST   = 'POST';
    const METHOD_PUT    = 'PUT';
    const METHOD_DELETE = 'DELETE';

    // HTTP RESPONSE CODES
    // Informational 1xx
    const CODE_100 = 100;
    const CODE_101 = 101;

    // Success 2xx
    const CODE_200 = 200;
    const CODE_201 = 201;
    const CODE_202 = 202;
    const CODE_203 = 203;
    const CODE_204 = 204;
    const CODE_205 = 205;
    const CODE_206 = 206;

    // Redirection 3xx
    const CODE_300 = 300;
    const CODE_301 = 301;
    const CODE_302 = 302;
    const CODE_303 = 303;
    const CODE_304 = 304;
    const CODE_305 = 305;
    const CODE_307 = 307;

    // Client Error 4xx
    const CODE_400 = 400;
    const CODE_401 = 401;
    const CODE_402 = 402;
    const CODE_403 = 403;
    const CODE_404 = 404;
    const CODE_405 = 405;
    const CODE_406 = 406;
    const CODE_407 = 407;
    const CODE_408 = 408;
    const CODE_409 = 409;
    const CODE_410 = 410;
    const CODE_411 = 411;
    const CODE_412 = 412;
    const CODE_413 = 413;
    const CODE_414 = 414;
    const CODE_415 = 415;
    const CODE_416 = 416;
    const CODE_417 = 417;
    const CODE_422 = 422;

    // Server Error 5xx
    const CODE_500 = 500;
    const CODE_501 = 501;
    const CODE_502 = 502;
    const CODE_503 = 503;
    const CODE_504 = 504;
    const CODE_505 = 505;
    const CODE_509 = 509;

    // HTTP RESPONSE MESSAGES
    // Informational 1xx
    const MESSAGE_100 = 'Continue';
    const MESSAGE_101 = 'Switching Protocols';

    // Success 2xx
    const MESSAGE_200 = 'OK';
    const MESSAGE_201 = 'Created';
    const MESSAGE_202 = 'Accepted';
    const MESSAGE_203 = 'Non-Authoritative Information';
    const MESSAGE_204 = 'No Content';
    const MESSAGE_205 = 'Reset Content';
    const MESSAGE_206 = 'Partial Content';

    // Redirection 3xx
    const MESSAGE_300 = 'Multiple Choices';
    const MESSAGE_301 = 'Moved Permanently';
    const MESSAGE_302 = 'Found';
    const MESSAGE_303 = 'See Other';
    const MESSAGE_304 = 'Not Modified';
    const MESSAGE_305 = 'Use Proxy';
    const MESSAGE_307 = 'Temporary Redirect';

    // Client Error 4xx
    const MESSAGE_400 = 'Bad Request';
    const MESSAGE_401 = 'Unauthorized';
    const MESSAGE_402 = 'Payment Required';
    const MESSAGE_403 = 'Forbidden';
    const MESSAGE_404 = 'Not Found';
    const MESSAGE_405 = 'Method Not Allowed';
    const MESSAGE_406 = 'Not Acceptable';
    const MESSAGE_407 = 'Proxy Authentication Required';
    const MESSAGE_408 = 'Request Timeout';
    const MESSAGE_409 = 'Conflict';
    const MESSAGE_410 = 'Gone';
    const MESSAGE_411 = 'Length Required';
    const MESSAGE_412 = 'Precondition Failed';
    const MESSAGE_413 = 'Request Entity Too Large';
    const MESSAGE_414 = 'Request-URI Too Long';
    const MESSAGE_415 = 'Unsupported Media Type';
    const MESSAGE_416 = 'Requested Range Not Satisfiable';
    const MESSAGE_417 = 'Expectation Failed';
    const MESSAGE_422 = 'Unprocessable Entity';

    // Server Error 5xx
    const MESSAGE_500 = 'Internal Server Error';
    const MESSAGE_501 = 'Not Implemented';
    const MESSAGE_502 = 'Bad Gateway';
    const MESSAGE_503 = 'Service Unavailable';
    const MESSAGE_504 = 'Gateway Timeout';
    const MESSAGE_505 = 'HTTP Version Not Supported';
    const MESSAGE_509 = 'Bandwidth Limit Exceeded';

    /**
     * @var array
     */
    public static $messages = [
        self::CODE_100 => self::MESSAGE_100,
        self::CODE_101 => self::MESSAGE_101,
        self::CODE_200 => self::MESSAGE_200,
        self::CODE_201 => self::MESSAGE_201,
        self::CODE_202 => self::MESSAGE_202,
        self::CODE_203 => self::MESSAGE_203,
        self::CODE_204 => self::MESSAGE_204,
        self::CODE_205 => self::MESSAGE_205,
        self::CODE_206 => self::MESSAGE_206,
        self::CODE_300 => self::MESSAGE_300,
        self::CODE_301 => self::MESSAGE_301,
        self::CODE_302 => self::MESSAGE_302,
        self::CODE_303 => self::MESSAGE_303,
        self::CODE_304 => self::MESSAGE_304,
        self::CODE_305 => self::MESSAGE_305,
        self::CODE_307 => self::MESSAGE_307,
        self::CODE_400 => self::MESSAGE_400,
        self::CODE_401 => self::MESSAGE_401,
        self::CODE_402 => self::MESSAGE_402,
        self::CODE_403 => self::MESSAGE_403,
        self::CODE_404 => self::MESSAGE_404,
        self::CODE_405 => self::MESSAGE_405,
        self::CODE_406 => self::MESSAGE_406,
        self::CODE_407 => self::MESSAGE_407,
        self::CODE_408 => self::MESSAGE_408,
        self::CODE_409 => self::MESSAGE_409,
        self::CODE_410 => self::MESSAGE_410,
        self::CODE_411 => self::MESSAGE_411,
        self::CODE_412 => self::MESSAGE_412,
        self::CODE_413 => self::MESSAGE_413,
        self::CODE_414 => self::MESSAGE_414,
        self::CODE_415 => self::MESSAGE_415,
        self::CODE_416 => self::MESSAGE_416,
        self::CODE_417 => self::MESSAGE_417,
        self::CODE_422 => self::MESSAGE_422,
        self::CODE_500 => self::MESSAGE_500,
        self::CODE_501 => self::MESSAGE_501,
        self::CODE_502 => self::MESSAGE_502,
        self::CODE_503 => self::MESSAGE_503,
        self::CODE_504 => self::MESSAGE_504,
        self::CODE_505 => self::MESSAGE_505,
        self::CODE_509 => self::MESSAGE_509,
    ];
}