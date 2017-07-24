<?php

namespace Nodeping\Resource;

class ChecksResource extends Resource {

  private $checks;

  /**
   * Retrieve a list of checks.
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *   - lastresult
   *   - current
   *
   * @see https://nodeping.com/docs-api-checks.html#get
   */
  public function getChecks($options = []) {
    $checks = json_decode($this->get('checks', $options)->getBody());
    if (!empty($checks)) {
      foreach ($checks as $check) {
        $this->checks[] = $this->serializer->deserialize(json_encode($check), 'Nodeping\\Model\\Check', 'json');
      }
      return $this->checks;
    }
    return false;
  }

  /**
   * Update an existing check.
   *
   * @param string $checkId
   * @param \Nodeping\Model\Check $check
   *
   * @see https://nodeping.com/docs-api-checks.html#post-put
   */
  public function updateCheck($checkId, \Nodeping\Model\Check $check) {
    $check = $this->serializer->serialize($check, 'json');
    $response = $this->put('checks/' . $checkId, $check);
    $updated = $this->serializer->deserialize((string)$response->getBody(), 'Nodeping\\Model\\Check', 'json');
    return $updated;
  }

  /**
   * Create a new check.
   *
   * @param \Nodeping\Model\Check $check
   *
   * @see https://nodeping.com/docs-api-checks.html#post-put
   */
  public function createCheck(\Nodeping\Model\Check $check) {
    $check = $this->serializer->serialize($check, 'json');
    $response = $this->post('checks', $check);
    $created = $this->serializer->deserializer((string)$response->getBody(), 'Nodeping\\Model\\Check', 'json');
    return $created;
  }

  /**
   * Delete an existing check.
   *
   * @param array $options
   *  Available options:
   *   - id
   *   - customerid
   *
   * @see https://nodeping.com/docs-api-checks.html#delete
   */
  public function deleteCheck($options = []) {
    $response = json_decode($this->delete('checks', $options));
    if (isset($response['ok'])) {
      return true;
    }
    return false;
  }
}
