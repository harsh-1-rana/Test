<?php

namespace Drupal\apitask\services;

interface NewInterface {

  public function get($uid);

  public function create($data);
  public function update($uid, $data);

  public function delete($uid);
}