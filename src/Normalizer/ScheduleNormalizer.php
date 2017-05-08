<?php

namespace Nodeping\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ScheduleNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface {
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Nodeping\\Model\\Schedule') {
      return false;
    }

    return true;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Nodeping\Model\Schedule;

    // Denormalize elements.

    return $object;
  }
}
