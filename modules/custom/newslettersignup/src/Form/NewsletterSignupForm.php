<?php

/**
 * @file
 * Contains \Drupal\newslettersignup\Form\NewsletterSignupForm.
 */

namespace Drupal\newslettersignup\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

/**
 * Newsletter signup form.
 */
class NewsletterSignupForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'newslettersignup_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    
    $form['newsletteryouremail'] = array(
      '#type' => 'textfield',
      '#title' => t('Email'),
      '#size' => 60,
      '#maxlength' => 100,
      '#placeholder'=>'your email address',	
      '#required' => TRUE,
    );	 
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Sign up'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    /**
     * Validate email address
     */
    $newsletteryouremail = trim($form_state->getValue('newsletteryouremail'));
  
    if ($newsletteryouremail !== '' && !\Drupal::service('email.validator')->isValid($newsletteryouremail)) {
      $form_state->setErrorByName('newsletteryouremail', $this->t('Invalid email address'));  
    }
	
	/**
	 * Validate name
	 * @todo code better validation for name
     */
    $newsletteryourname = trim($form_state->getValue('newsletteryourname'));
  
    if (is_numeric($newsletteryourname)) {
	  $form_state->setErrorByName('newsletteryourname', $this->t('Invalid characters in name'));  
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    /**
     * Get user form input
     */
    $newsletteryourname = trim($form_state->getValue('newsletteryourname'));
    $newslettercompanyname = trim($form_state->getValue('newslettercompanyname'));
    $newsletteryouremail = trim($form_state->getValue('newsletteryouremail'));
    
    /**
     * Save newsletter signup form data in content type "Newsletter Signup"
     */
    $node = Node::create([
      'type' => 'newsletter_signup_list',
      'langcode' => 'en',
      'created' => REQUEST_TIME,
      'changed' => REQUEST_TIME,
      // Default admin user ID.
      'uid' => 1,
      'title' => t('Newsletter Signup'),      
      'field_newsletter_signup_email' => $newsletteryouremail,
    ]);
    $node->save();
    
    /**
     * Get the email address to which email to be sent 
     */
    $config = $this->config('newslettersignup.adminsettings');  
    $newslettersignup_admin_email = trim($config->get('newslettersignup_admin_email'));
    
    if ($newslettersignup_admin_email) {
      /**
       * Send email
       */
      $mail_manager = \Drupal::service('plugin.manager.mail');
      $langcode = \Drupal::currentUser()->getPreferredLangcode();      
      $params['message']['newsletteryouremail'] = $newsletteryouremail;
      $to = $newslettersignup_admin_email;
      
      $result = $mail_manager->mail('newslettersignup', 'signup_notify', $to, $langcode, $params, NULL, 'true');
   }
   
   /**
    * Display thanks message to the visitor
    */
   \Drupal::messenger()->addStatus(t('Thanks ' . $newsletteryourname . '! You have been successfully signed up.'));
  }
 
}
