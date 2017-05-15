<?php
/**
 * 
 */

namespace Nodeping\Resource;

use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Nodeping\Normalizer\NormalizerFactory;

class Resource {

  public $token;
  public $client;

  public $serializer;

  /**
   * The class constructor.
   *
   * @param object \Nodeping\Client.
   */
  public function __construct($client) {
    $this->token = $client->token;
    $this->client = $client->client;

    $encoders = array(new JsonEncoder());
    $normalizers = (new NormalizerFactory)->getNormalizers();

    $this->serializer = new Serializer($normalizers, $encoders);
  }

  /**
   * Performs a GET request on the target endpoint.
   *
   * @param string $endpoint
   * @param array $options
   */
  public function get($endpoint, $options = []) {
    $request = $this->client->createRequest('GET', $endpoint . '?' . http_build_query($options), [
      'auth' => [$this->token, ''],
    ]);
    $response = $this->client->send($request);
    // Check the response is correctly authenticated.
    if ($this->checkAuthenticatedResponse($response->getBody())) {
      return $response;
    }
  }

  /**
   * Performs a PUT request on the target endpoint.
   *
   * @param stirng $endpoint
   * @param string $data
   * @param array $options
   */
  public function put($endpoint, $data = null, $options = []) {
    if (is_null($data)) {
      $request = $this->client->createRequest('PUT', $endpoint . '?' . http_build_query($options), [
        'auth' => [$this->token, ''],
        'headers' => [
          'Content-Type' => 'application/json',
        ],
      ]);
      $response = $this->client->send($request);
      // Check the response is correctly authenticated.
      if ($this->checkAuthenticatedResponse($response->getBody())) {
        return $response;
      }
    }
    
    $request = $this->client->createRequest('PUT', $endpoint . '?' . http_build_query($options), [
      'auth' => [$this->token, ''],
      'body' => $data,
      'headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
      ],
    ]);
    $response = $this->client->send($request);
    // Check the response is correctly authenticated.
    if ($this->checkAuthenticatedResponse($response->getBody())) {
      return $response;
    }
  }

  /**
   * Performs a POST request on the target endpoint.
   *
   * @param string $endpoint
   * @param string $data
   * @param array $options
   */
  public function post($endpoint, $data = null, $options = []) {
    if (is_null($data)) {
      $request = $this->client->createRequest('POST', $endpoint . '?' . http_build_query($options), [
        'auth' => [$this->token, ''],
        'headers' => [
          'Accept' => 'application/json',
        ],
      ]);
      $response = $this->client->send($request);
      // Check the response is correctly authenticated.
      if ($this->checkAuthenticatedResponse($response->getBody())) {
        return $response;
      }
    }

    $request = $this->client->createRequest('POST', $endpoint . '?' . http_build_query($options), [
      'auth' => [$this->token, ''],
      'body' => $data,
      'headers' => [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
      ],
    ]);
    $response = $this->client->send($request);
    // Check the response is correctly authenticated.
    if ($this->checkAuthenticatedResponse($response->getBody())) {
      return $response;
    }
  }

  /**
   * Performs a DELETE request on the target endpoint.
   *
   * @param string $endpoint
   * @param array $options
   */
  public function delete($endpoint, $options = []) {
    $request = $this->client->createRequest('DELETE', $endpoint . '?' . http_build_query($options), [
      'auth' => [$this->token, ''],
    ]);
    $response = $this->client->send($request);
    // Check the response is correctly authenticated.
    if ($this->checkAuthenticatedResponse($response->getBody())) {
      return $response;
    }
  }

  /**
   * Checks the response is properly authenticated.
   *
   * @param string $response
   */
  public function checkAuthenticatedResponse($response) {
    if (strpos($response, '{"error":') !== false) {
      throw new \Nodeping\Exception\AuthenticationFailureException('Failed to authenticate using the supplied API token', $response);
    }
    return true;
  }
}
