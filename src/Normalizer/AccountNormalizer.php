<?php

namespace Nodeping\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AccountNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Nodeping\\Model\\Account') {
      return false;
    }

    return true;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Nodeping\Model\Account;

    if (isset($data['id']))  {
      $object->setId($data['id']);
    }
    if (isset($data['_id'])) {
      $object->setId($data['id']);
    }
    if (isset($data['type'])) {
      $object->setType($data['type']);
    }
    if (isset($data['customer_name'])) {
      $object->setCustomerName($data['customer_name']);
    }
    if (isset($data['creation_date'])) {
      $object->setCreationDate($data['creation_date']);
    }
    if (isset($data['status'])) {
      $object->setStatus($data['status']);
    }
    if (isset($data['timezone'])) {
      $object->setTimezone($data['timezone']);
    }
    if (isset($data['nextBillingDate'])) {
      $object->setNextBillingDate($data['nextBillingDate']);
    }
    if (isset($data['defaultlocations'])) {
      $object->setDefaultLocations($data['defaultlocations']);
    }
    if (isset($data['parent'])) {
      $object->setParent($data['parent']);
    }
    if (isset($data['name'])) {
      $object->setName($data['name']);
    }
    if (isset($data['status'])) {
      $object->setStatus($data['status']);
    }
    if (isset($data['count'])) {
      $object->setCount($data['count']);
    }

    return $object;
  }
}