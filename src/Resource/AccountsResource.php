<?php

namespace Nodeping\Resource;

class AccountsResource extends Resource {

  /**
   * Returns the subaccounts.
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *
   * @see https://nodeping.com/docs-api-accounts.html#get
   */
  public function getAccounts($options = []) {
    $accounts = json_decode($this->get('accounts', $options)->getBody(), true);
    if (!empty($accounts)) {
      foreach ($accounts as $key => $account) {
        $this->accounts[] = $this->serializer->deserialize(json_encode(array_merge($account, array('id' => $key))), 'Nodeping\\Model\\Account', 'json');
      }
      return $this->accounts;
    }
    return false;
  }

  /**
   * Update account information
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *   - name
   *   - timezone
   *   - location
   *   - emailme
   *   - status
   *
   * @see https://nodeping.com/docs-api-accounts.html#put
   */
  public function updateAccount($options = []) {
    $response = $this->put('accounts', null, $options);
    $account = $this->serializer->deserialize((string)$response->getBody(), 'Nodeping\\Model\\Account', 'json');
    return $account;
  }

  /**
   * Create a new subaccount
   *
   * @param array $options
   *  Available options:
   *   - name
   *   - contactme
   *   - email
   *   - timezone
   *   - location
   *   - emailme
   *
   * @see https://nodeping.com/docs-api-accounts.html#post
   */
  public function createAccount($options = []) {
    $response = $this->post('accounts', null, $options);
    $account = $this->serializer->deserialize((string)$response->getBody(), 'Nodeping\\Model\\Account', 'json');
    return $account;
  }

  /**
   * Delete a subaccount
   * 
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *
   * @see https://nodeping.com/docs-api-accounts.html#delete
   */
  public function deleteAccount($options = []) {
    $response = json_decode($this->delete('accounts', $options));
    if (isset($response['success'])) {
      return true;
    }
    return false;
  }
}
