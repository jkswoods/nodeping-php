<?php

namespace Nodeping\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ContactGroupNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Nodeping\\Model\\ContactGroup') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Nodeping\Model\ContactGroup) {
      return true;
    }

    return false;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Nodeping\Model\ContactGroup;

    if (isset($data['id'])) {
      $object->setId($data['id']);
    }
    if (isset($data['type'])) {
      $object->setType($data['type']);
    }
    if (isset($data['customer_id'])) {
      $object->setCustomerId($data['customer_id']);
    }
    if (isset($data['name'])) {
      $object->setName($data['name']);
    }
    if (isset($data['members'])) {
      $object->setMembers($data['members']);
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdClass();

    if (null !== $object->getName()) {
      $data->{'name'} = $object->getName();
    }
    if (null !== $object->getMembers()) {
      $data->{'members'} = $object->getMembers();
    }

    return $data;
  }
}
