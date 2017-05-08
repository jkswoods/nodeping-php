<?php

namespace Nodeping\Resource;

class ContactGroupsResource extends Resource {

  private $contactGroups;

  /**
   * Get a list of contact groups.
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *
   * @see https://nodeping.com/docs-api-contactgroups.html#get
   */
  public function getContactGroups($options = []) {
    $contactGroups = json_decode($this->get('contactgroups', $options)->getBody(), true);
    if (!empty($contactGroups)) {
      foreach ($contactGroups as $key => $contactGroup) {
        $this->contactGroups[] = $this->serializer->deserialize(json_encode(array_merge($contactGroup, array('id' => $key))), 'Nodeping\\Model\\ContactGroup', 'json');
      }
      return $this->contactGroups;
    }
    return false;
  }

  /**
   * Update a contact group.
   *
   * @param string $contactGroupId
   * @param \Nodeping\Model\ContactGroup $contactGroup
   *
   * @see https://nodeping.com/docs-api-contactgroups.html#post-put
   */ 
  public function updateContactGroup($contactGroupId, \Nodeping\Model\ContactGroup $contactGroup) {
    $contactGroup = $this->serializer->serialize($contactGroup, 'json');
    $response = $this->put('contactgroups/' . $contactGroupId, $contactGroup);
    $group = $this->serializer->deserialize((string)$response->getBody(), 'Nodeping\\Model\\ContactGroup', 'json');
    return $group;
  }

  /**
   * Create a contact group.
   *
   * @param \Nodeping\Model\ContactGroup $contactGroup.
   *
   * @see https://nodeping.com/docs-api-contactgroups.html#post-put
   */
  public function createContactGroup(\Nodeping\Model\ContactGroup $contactGroup) {
    $contactGroup = $this->serializer->serialize($contactGroup, 'json');
    $response = $this->post('contactgroups', $contactGroup);
    $group = $this->serializer->deserialize((string)$respone->getBody(), 'Nodeping\\Model\\ContactGroup', 'json');
    return $group;
  }

  /**
   * Delete a contact group.
   *
   * @param array $options
   *  Available options:
   *   - customerid
   *   - id
   *
   * @see https://nodeping.com/docs-api-contactgroups.html#delete
   */
  public function deleteContactGroup($options = []) {
    $response = json_decode($this->delete('contactgroups', $options));
    if (isset($response['ok'])) {
      return true;
    }
    return false;
  }
}
