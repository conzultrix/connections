<?php

namespace Drupal\connections\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ConnectionsContact' block.
 *
 * @Block(
 *  id = "connections_contact",
 *  admin_label = @Translation("Connections contact"),
 * )
 */
class ConnectionsContact extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
  	$config = \Drupal::config('connections.Config');
  	$phone = $config->get('phone_number');

  	return [
      '#theme' => 'connections_contact',
      '#phone' => $phone,
  	];
  }

}
