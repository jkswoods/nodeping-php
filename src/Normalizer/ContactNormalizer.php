<?php

namespace Nodeping\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ContactNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Nodeping\\Model\\Contact') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Nodeping\Model\Contact) {
      return true;
    }

    return false;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Nodeping\Model\Contact;

    if (isset($data['_id'])) {
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
    if (isset($data['custrole'])) {
      $object->setCustrole($data['custrole']);
    }
    if (isset($data['addresses'])) {
      $object->setAddresses($data['addresses']);
    }
    if (isset($data['sdomain'])) {
      $object->setSDomain($data['sdomain']);
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdClass();

    if (null !== $object->getId()) {
      $data->{'id'} = $object->getId();
    }
    if (null !== $object->getName()) {
      $data->{'name'} = $object->getName();
    }
    if (null !== $object->getCustrole()) {
      $data->{'custrole'} = $object->getCustrole();
    }
    if (null !== $object->getAddresses()) {
      $data->{'addresses'} = $object->getAddresses();
    }
    if (null !== $object->getNewAddresses()) {
      $data->{'newaddresses'} = $object->getNewAddresses();
    }

    return $data;
  }
}
