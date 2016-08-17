<?php

namespace Drupal\connections\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ConfigForm.
 *
 * @package Drupal\connections\Form
 */
class ConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'connections.Config',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'connections_config';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('connections.Config');
    $form['facebook_url'] = [
      '#type' => 'url',
      '#title' => $this->t('Facebook URL'),
      '#description' => $this->t('Please append protocol eg. https://'),
      '#default_value' => $config->get('facebook_url'),
    ];
    $form['twitter_url'] = [
      '#type' => 'url',
      '#title' => $this->t('Twitter URL'),
      '#description' => $this->t('Please append protocol eg. https://'),
      '#default_value' => $config->get('twitter_url'),
    ];
    $form['google_plus_url'] = [
      '#type' => 'url',
      '#title' => $this->t('Google Plus URL'),
      '#description' => $this->t('Please append protocol eg. https://'),
      '#default_value' => $config->get('google_plus_url'),
    ];
    $form['phone_number'] = [
      '#type' => 'tel',
      '#title' => $this->t('Phone Number'),
      '#description' => $this->t('Please append international code'),
      '#default_value' => $config->get('phone_number'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('connections.Config')
      ->set('facebook_url', $form_state->getValue('facebook_url'))
      ->set('google_plus_url', $form_state->getValue('google_plus_url'))
      ->set('twitter_url', $form_state->getValue('twitter_url'))
      ->set('phone_number', $form_state->getValue('phone_number'))
      ->save();
  }

}
