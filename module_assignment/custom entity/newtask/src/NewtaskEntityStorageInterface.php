<?php

namespace Drupal\newtask;

use Drupal\Core\Entity\ContentEntityStorageInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\newtask\Entity\NewtaskEntityInterface;

/**
 * Defines the storage handler class for Newtask entity entities.
 *
 * This extends the base storage class, adding required special handling for
 * Newtask entity entities.
 *
 * @ingroup newtask
 */
interface NewtaskEntityStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Newtask entity revision IDs for a specific Newtask entity.
   *
   * @param \Drupal\newtask\Entity\NewtaskEntityInterface $entity
   *   The Newtask entity entity.
   *
   * @return int[]
   *   Newtask entity revision IDs (in ascending order).
   */
  public function revisionIds(NewtaskEntityInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Newtask entity author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Newtask entity revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\newtask\Entity\NewtaskEntityInterface $entity
   *   The Newtask entity entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(NewtaskEntityInterface $entity);

  /**
   * Unsets the language for all Newtask entity with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
