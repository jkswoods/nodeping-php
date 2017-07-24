<?php

namespace Nodeping\Resource;

class ResultsResource extends Resource {

  private $results;

  /**
   * Get check results.
   * 
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *   - span
   *   - limit
   *   - start
   *   - end
   *   - clean
   *
   * @see https://nodeping.com/docs-api-results.html#get
   */ 
  public function getResults($options = []) {
    $results = json_decode($this->get('results', $options)->getBody());
    if (!empty($results)) {
      foreach ($results as $result) {
        $this->results[] = $this->serializer->deserialize(json_encode($result), 'Nodeping\\Model\\Result', 'json');
      }
      return $this->results;
    }
    return false;
  }

  /**
   * Retrieve uptime information for a check
   *
   * @param string $checkId
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *   - interval
   *   - start
   *   - end
   *
   * @see https://nodeping.com/docs-api-results.html#uptime
   */
  public function getUptime($checkId, $options = []) {
    $results = json_decode($this->get('results/uptime/' . $checkId, $options)->getBody());
    return $results;
  }

  /**
   * Retrieve information about current events for checks.
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *
   * @see https://nodeping.com/docs-api-results.html#current
   */
  public function getCurrent($options = []) {
    throw new \Nodeping\Exception\NotYetImplementedException('ResultsResource::getCurrent()');
  }
}
