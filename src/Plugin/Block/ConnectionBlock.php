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
    //$build = [];
    //$build['connection_block']['#markup'] = 'Implement ConnectionBlock.';

    //return $build;
    $config = \Drupal::config('connections.Config');
    $fb = $config->get('facebook_url');
    $twitter = $config->get('twitter_url');
    $gplus = $config->get('google_plus_url');
    

    //return ['#markup' => 'Implement ConnectionBlock'];

    return [
      '#theme' => 'connections_block',
      '#socials' => ['facebook' => $fb, 'twitter' => $twitter, 'google plus' => $gplus],
      //'#twitter' => $twitter,
      //'#gplus' => $gplus,
    ];
  }

}
