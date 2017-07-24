<?php

namespace Nodeping\Normalizer;

use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CheckNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface{
  
  public function supportsDenormalization($data, $type, $format = null) {
    if ($type !== 'Nodeping\\Model\\Check') {
      return false;
    }

    return true;
  }

  public function supportsNormalization($data, $format = null) {
    if ($data instanceof \Nodeping\Model\Check) {
      return true;
    }

    return false;
  }
    
  public function denormalize($data, $class, $format = null, array $context = []) {
    if (empty($data)) {
      return null;
    }
    $object = new \Nodeping\Model\Check;

    if (isset($data['_id'])) {
      $object->setId($data['_id']);
    }
    if (isset($data['_rev'])) {
      $object->setRev($data['_rev']);
    }
    if (isset($data['customer_id'])) {
      $object->setCustomerId($data['customer_id']);
    }
    if (isset($data['label'])) {
      $object->setLabel($data['label']);
    }
    if (isset($data['interval'])) {
      $object->setInterval($data['interval']);
    }
    if (isset($data['notifications'])) {
      $object->setNotifications($data['notifications']);
    }
    if (isset($data['type'])) {
      $object->setType($data['type']);
    }
    if (isset($data['status'])) {
      $object->setStatus($data['status']);
    }
    if (isset($data['modified'])) {
      $object->setModified($data['modified']);
    }
    if (isset($data['enable'])) {
      $object->setEnable($data['enable']);
    }
    if (isset($data['public'])) {
      $object->setPublic($data['public']);
    }
    if (isset($data['parameters'])) {
      $object->setParameters($data['parameters']);
    }
    if (isset($data['created'])) {
      $object->setCreated($data['created']);
    }
    if (isset($data['queue'])) {
      $object->setQueue($data['queue']);
    }
    if (isset($data['uuid'])) {
      $object->setUuid($data['uuid']);
    }
    if (isset($data['state'])) {
      $object->setState($data['state']);
    }
    if (isset($data['firstdown'])) {
      $object->setFirstdown($data['firstdown']);
    }
    if (isset($data['runlocations'])) {
      $object->setRunLocations($data['runlocations']);
    }

    return $object;
  }

  public function normalize($object, $format = null, array $context = []) {
    $data = new \stdClass();
    if (null !== $object->getId()) {
      $data->{'id'} = $object->getId();
    }
    if (null !== $object->getType()) {
      $data->{'type'} = $object->getType();
    }
    if (null !== $object->getParameters()) {
      $param = $object->getParameters();
      if (isset($param['contentstring'])) {
        $data->{'contentstring'} = $param['contentstring'];
      }
      if (isset($param['target'])) {
        $data->{'target'} = $param['target'];
      }
      if (isset($param['threshold'])) {
        $data->{'threshold'} = $param['threshold'];
      }
      if (isset($param['sens'])) {
        $data->{'sens'} = $param['sens'];
      }
      if (isset($param['dnstype'])) {
        $data->{'dnstype'} = $param['dnstype'];
      }
      if (isset($param['dnstoresolve'])) {
        $data->{'dnstoresolve'} = $param['dnstoresolve'];
      }
      if (isset($param['follow'])) {
        $data->{'follow'} = $param['follow'];
      }
      if (isset($param['email'])) {
        $data->{'email'} = $param['email'];
      }
      if (isset($param['port'])) {
        $data->{'port'} = $param['port'];
      }
      if (isset($param['username'])) {
        $data->{'username'} = $param['username'];
      }
      if (isset($param['password'])) {
        $data->{'password'} = $param['password'];
      }
      if (isset($param['secure'])) {
        $data->{'secure'} = $param['secure'];
      }
      if (isset($param['verify'])) {
        $data->{'verify'} = $param['verify'];
      }
      if (isset($param['ignore'])) {
        $data->{'ignore'} = $param['ignore'];
      }
      if (isset($param['invert'])) {
        $data->{'invert'} = $param['invert'];
      }
      if (isset($param['warningdays'])) {
        $data->{'warningdays'} = $param['warningdays'];
      }
      if (isset($param['fields'])) {
        $data->{'fields'} = $param['fields'];
      }
      if (isset($param['postdata'])) {
        $data->{'postdata'} = $param['postdata'];
      }
      if (isset($param['data'])) {
        $data->{'data'} = $param['data'];
      }
      if (isset($param['receiveHeaders'])) {
        $data->{'receiveHeaders'} = $param['receiveHeaders'];
      }
      if (isset($param['sendHeaders'])) {
        $data->{'sendHeaders'} = $param['sendHeaders'];
      }
      if (isset($param['method'])) {
        $data->{'method'} = $param['method'];
      }
      if (isset($param['statuscode'])) {
        $data->{'statuscode'} = $param['statuscode'];
      }
      if (isset($param['ipv6'])) {
        $data->{'ipv6'} = $param['ipv6'];
      }
    }
    if (null !== $object->getCustomerId()) {
      $data->{'customerid'} = $object->getCustomerId();
    }
    if (null !== $object->getLabel()) {
      $data->{'label'} = $object->getLabel();
    }
    if (null !== $object->getInterval()) {
      $data->{'interval'} = $object->getInterval();
    }
    if (null !== $object->getEnable()) {
      $data->{'enabled'} = $object->getEnable();
    }
    if (null !== $object->isPublic()) {
      $data->{'public'} = $object->isPublic();
    }
    if (null !== $object->getRunLocations()) {
      $data->{'runlocations'} = $object->getRunLocations();
    }
    if (null !== $object->getNotifications()) {
      $data->{'notifications'} = $object->getNotifications();
    }
    if (null !== $object->getDep()) {
      $data->{'dep'} = $object->getDep();
    }

    return $data;
  }
}