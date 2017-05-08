<?php

namespace Nodeping\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ResultNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Nodeping\\Model\\Result') {
      return false;
    }

    return true;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Nodeping\Model\Result;

    if (isset($data['doc']['_id'])) {
      $object->setId($data['doc']['_id']);
    }
    if (isset($data['doc']['ci'])) {
      $object->setCustomerId($data['doc']['ci']);
    }
    if (isset($data['doc']['t'])) {
      $object->setType($data['doc']['t']);
    }
    if (isset($data['doc']['tg'])) {
      $object->setTarget($data['doc']['tg']);
    }
    if (isset($data['doc']['th'])) {
      $object->setThreshold($data['doc']['th']);
    }
    if (isset($data['doc']['i'])) {
      $object->setInterval($data['doc']['i']);
    }
    if (isset($data['doc']['ra'])) {
      $object->setScheduled($data['doc']['ra']);
    }
    if (isset($data['doc']['q'])) {
      $object->setQueue($data['doc']['q']);
    }
    if (isset($data['doc']['s'])) {
      $object->setStartTime($data['doc']['s']);
    }
    if (isset($data['doc']['sc'])) {
      $object->setResult($data['doc']['sc']);
    }
    if (isset($data['doc']['m'])) {
      $object->setMessage($data['doc']['m']);
    }
    if (isset($data['doc']['su'])) {
      $object->setPass($data['doc']['su']);
    }
    if (isset($data['doc']['rt'])) {
      $object->setRunTime($data['doc']['rt']);
    }
    if (isset($data['doc']['e'])) {
      $object->setFinishTime($data['doc']['e']);
    }
    if (isset($data['doc']['l'])) {
      $object->setLocations($data['doc']['l']);
    }

    return $object;
  }
}
