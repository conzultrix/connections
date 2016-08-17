<?php

namespace Drupal\connections\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ConnectionBlock' block.
 *
 * @Block(
 *  id = "connection_block",
 *  admin_label = @Translation("Connection block"),
 * )
 */
class ConnectionBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['connection_block']['#markup'] = 'Implement ConnectionBlock.';

    return $build;
  }

}
