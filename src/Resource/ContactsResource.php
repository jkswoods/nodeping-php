<?php

namespace Nodeping\Resource;

class ContactsResource extends Resource {

  private $contacts;

  /**
   * Get contact information.
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *
   * @see https://nodeping.com/docs-api-contacts.html#get
   */
  public function getContacts($options = []) {
    $contacts = json_decode($this->get('contacts', $options)->getBody(), true);
    if (!empty($contacts)) {
      foreach ($contacts as $key => $contact) {
        $this->contacts[] = $this->serializer->deserialize(json_encode(array_merge($contact, array('id' => $key))), 'Nodeping\\Model\\Contact', 'json');
      }
      return $this->contacts;
    }
    return false;
  }

  /**
   * Update contact information.
   *
   * @param string $contactId
   * @param \Nodeping\Model\Contact $contact
   *
   * @see https://nodeping.com/docs-api-contacts.html#post-put
   */
  public function updateContact($contactId, \Nodeping\Model\Contact $contact) {
    $contact = $this->serializer->serialize($contact, 'json');
    $response = $this->put('contacts/' . $contactId, $contact);
    $contact = $this->serializer->deserialize((string)$response->getBody(), 'Nodeping\\Model\\Contact', 'json');
    return $contact;
  }

  /**
   * Create a new contact.
   *
   * @param \Nodeping\Model\Contact $contact.
   *
   * @see https://nodeping.com/docs-api-contacts.html#post-put
   */
  public function createContact(\Nodeping\Model\Contact $contact) {
    $contact = $this->serializer->serialize($contact, 'json');
    $response = $this->post('contacts', $contact);
    $contact = $this->serializer->deserialize((string)$response->getBody(), 'Nodeping\\Model\\Contact', 'json');
    return $contact;
  }

  /**
   * Delete a contact.
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *
   * @see https://nodeping.com/docs-api-contacts.html#delete
   */
  public function deleteContact($options = []) {
    $response = json_decode($this->delete('contacts', $options));
    if (isset($response['ok'])) {
      return true;
    }
    return false;
  }
}
