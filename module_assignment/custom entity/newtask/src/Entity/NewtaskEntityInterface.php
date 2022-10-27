<?php

namespace Drupal\newtask\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Newtask entity entities.
 *
 * @ingroup newtask
 */
interface NewtaskEntityInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityPublishedInterface, EntityOwnerInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Newtask entity name.
   *
   * @return string
   *   Name of the Newtask entity.
   */
  public function getName();

  /**
   * Sets the Newtask entity name.
   *
   * @param string $name
   *   The Newtask entity name.
   *
   * @return \Drupal\newtask\Entity\NewtaskEntityInterface
   *   The called Newtask entity entity.
   */
  public function setName($name);

  /**
   * Gets the Newtask entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Newtask entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Newtask entity creation timestamp.
   *
   * @param int $timestamp
   *   The Newtask entity creation timestamp.
   *
   * @return \Drupal\newtask\Entity\NewtaskEntityInterface
   *   The called Newtask entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Gets the Newtask entity revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Newtask entity revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\newtask\Entity\NewtaskEntityInterface
   *   The called Newtask entity entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Newtask entity revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Newtask entity revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\newtask\Entity\NewtaskEntityInterface
   *   The called Newtask entity entity.
   */
  public function setRevisionUserId($uid);

}
