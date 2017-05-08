<?php

namespace Nodeping\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class NotificationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Nodeping\\Model\\Notification') {
      return false;
    }

    return true;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Nodeping\Model\Notification;

    if (isset($data['_id'])) {
      $object->setId($data['_id']);
    }
    if (isset($data['jobid'])) {
      $object->setJobId($data['jobid']);
    }
    if (isset($data['to'])) {
      $object->setTo($data['to']);
    }
    if (isset($data['from'])) {
      $object->setFrom($data['from']);
    }
    if (isset($data['subject'])) {
      $object->setSubject($data['subject']);
    }
    if (isset($data['body'])) {
      $object->setBody($data['body']);
    }
    if (isset($data['network'])) {
      $object->setNetwork($data['network']);
    }
    if (isset($data['type'])) {
      $object->setType($data['type']);
    }
    if (isset($data['at'])) {
      $object->setAt($data['at']);
    }
    if (isset($data['rhp'])) {
      $object->setRhp($data['rhp']);
    }

    return $object;
  }
}
