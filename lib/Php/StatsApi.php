<?php
/**
 * StatsApi
 * PHP version 5
 *
 * @category Class
 * @package  MimePost\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MimePost API Reference (Beta)
 *
 * MimePost API for sending email.  You can find out more about MimePost at [https://mimepost.com](http://mimepost.com). For this sample, you can use the api key `special-key` to test the authorization     filters.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: support@mimepost.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MimePost\Client\Php;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MimePost\Client\ApiException;
use MimePost\Client\Configuration;
use MimePost\Client\HeaderSelector;
use MimePost\Client\ObjectSerializer;

/**
 * StatsApi Class Doc Comment
 *
 * @category Class
 * @package  MimePost\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation emaillogsGet
     *
     * Get the logs of a particular date
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     * @param  string $status status (optional)
     * @param  string $to to (optional)
     * @param  int $page page (optional)
     * @param  int $limit limit (optional)
     *
     * @throws \MimePost\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MimePost\Client\Model\ApiResponseEmaillogs
     */
    public function emaillogsGet($start_date, $end_date, $status = null, $to = null, $page = null, $limit = null)
    {
        list($response) = $this->emaillogsGetWithHttpInfo($start_date, $end_date, $status, $to, $page, $limit);
        return $response;
    }

    /**
     * Operation emaillogsGetWithHttpInfo
     *
     * Get the logs of a particular date
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     * @param  string $status (optional)
     * @param  string $to (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \MimePost\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MimePost\Client\Model\ApiResponseEmaillogs, HTTP status code, HTTP response headers (array of strings)
     */
    public function emaillogsGetWithHttpInfo($start_date, $end_date, $status = null, $to = null, $page = null, $limit = null)
    {
        $returnType = '\MimePost\Client\Model\ApiResponseEmaillogs';
        $request = $this->emaillogsGetRequest($start_date, $end_date, $status, $to, $page, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MimePost\Client\Model\ApiResponseEmaillogs',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation emaillogsGetAsync
     *
     * Get the logs of a particular date
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     * @param  string $status (optional)
     * @param  string $to (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function emaillogsGetAsync($start_date, $end_date, $status = null, $to = null, $page = null, $limit = null)
    {
        return $this->emaillogsGetAsyncWithHttpInfo($start_date, $end_date, $status, $to, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emaillogsGetAsyncWithHttpInfo
     *
     * Get the logs of a particular date
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     * @param  string $status (optional)
     * @param  string $to (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function emaillogsGetAsyncWithHttpInfo($start_date, $end_date, $status = null, $to = null, $page = null, $limit = null)
    {
        $returnType = '\MimePost\Client\Model\ApiResponseEmaillogs';
        $request = $this->emaillogsGetRequest($start_date, $end_date, $status, $to, $page, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'emaillogsGet'
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     * @param  string $status (optional)
     * @param  string $to (optional)
     * @param  int $page (optional)
     * @param  int $limit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function emaillogsGetRequest($start_date, $end_date, $status = null, $to = null, $page = null, $limit = null)
    {
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling emaillogsGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling emaillogsGet'
            );
        }

        $resourcePath = '/emaillogs/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($to);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation statsGet
     *
     * Get the summary of stats for a range of dates
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     *
     * @throws \MimePost\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MimePost\Client\Model\ApiResponseStats
     */
    public function statsGet($start_date, $end_date)
    {
        list($response) = $this->statsGetWithHttpInfo($start_date, $end_date);
        return $response;
    }

    /**
     * Operation statsGetWithHttpInfo
     *
     * Get the summary of stats for a range of dates
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     *
     * @throws \MimePost\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MimePost\Client\Model\ApiResponseStats, HTTP status code, HTTP response headers (array of strings)
     */
    public function statsGetWithHttpInfo($start_date, $end_date)
    {
        $returnType = '\MimePost\Client\Model\ApiResponseStats';
        $request = $this->statsGetRequest($start_date, $end_date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MimePost\Client\Model\ApiResponseStats',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation statsGetAsync
     *
     * Get the summary of stats for a range of dates
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function statsGetAsync($start_date, $end_date)
    {
        return $this->statsGetAsyncWithHttpInfo($start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation statsGetAsyncWithHttpInfo
     *
     * Get the summary of stats for a range of dates
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function statsGetAsyncWithHttpInfo($start_date, $end_date)
    {
        $returnType = '\MimePost\Client\Model\ApiResponseStats';
        $request = $this->statsGetRequest($start_date, $end_date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'statsGet'
     *
     * @param  string $start_date Start Date in yyyymmdd format example 20190801 (required)
     * @param  string $end_date End Date in yyyymmdd format example 20190803 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function statsGetRequest($start_date, $end_date)
    {
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling statsGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling statsGet'
            );
        }

        $resourcePath = '/stats/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
