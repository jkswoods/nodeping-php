<?php

namespace Nodeping\Normalizer;

class NormalizerFactory {

  /**
   * Returns an array of normalizers for use with the Nodeping API.
   */
  public function getNormalizers() {
    return array(
      new AccountNormalizer(),
      new CheckNormalizer(),
      new ContactGroupNormalizer(),
      new ContactNormalizer(),
      new NotificationNormalizer(),
      new ResultNormalizer(),
    );
  }
}
