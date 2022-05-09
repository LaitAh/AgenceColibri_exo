<?php

namespace Exo\Controllers;

use Exo\Models\Contact;

/**
 * Controller that manages the contact page
 * ContactController inherits from the CoreController in order to have access to the show method
 */
class ContactController extends CoreController {
  
  /**
   * Method managing the displaying of the contact page
   * 
   * @return void
   */
  public function contact() {
    $this->show('contact');
  }

  /**
   * Method to add the contact request filled in by the user to the database
   *
   * @return void
   */
  public function newContact() {
    // Retrieve each data from the user in a variable
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); // FILTER_SANITIZE_EMAIL remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[]
    $subject = filter_input(INPUT_POST, 'subject');
    $message = filter_input(INPUT_POST, 'message');
    // Convert special characters to HTML entities
    $firstname = htmlspecialchars($firstname);
    $lastname = htmlspecialchars($lastname);
    $subject = htmlspecialchars($subject);
    $message = htmlspecialchars($message);

    // Create an error array (which is empty by default)
    $errorsList = [];
    // If there is a error, we fill the errorsList array with this new error
    if (empty($firstname)) { // The "firstname" must be present (not null, not false, not empty string)
      // "Push" the message in the array
      $errorsList[] = 'Le prénom est requis';
    }
    if ($firstname === false) { // If "firstname" is present but didn't passed the cleaning filter
      $errorsList[] = 'Le prénom est invalide';
    }
    // We do the same for all the expected values
    if (empty($lastname)) {
      $errorsList[] = 'Le nom est requis';
    }
    if ($lastname === false) {
      $errorsList[] = 'Le nom est invalide';
    }
    if (empty($email)) {
      $errorsList[] = 'L\'email est requis';
    }
    if ($email === false) {
      $errorsList = 'L\'email est invalide';
    }
    if (empty($subject)) {
      $errorsList[] = 'Le sujet est requis';
    }
    if ($subject === false) {
      $errorsList[] = 'Le sujet est invalide';
    }
    if (empty($message)) {
      $errorsList = 'Le message est requis';
    }
    if ($message === false) {
      $errorsList = 'Le message est invalide';
    }
    // Check the status of the array to know if there have been errors
    if (!empty($errorsList)) {
      $contact = new Contact();
      // Fill the values for each corresponding property in the instance (what the user entered (POST))
      $contact->setFirstname(filter_input(INPUT_POST, 'firstname'));
      $contact->setLastname(filter_input(INPUT_POST, 'lastname'));
      $contact->setEmail(filter_input(INPUT_POST, 'email'));
      $contact->setSubject(filter_input(INPUT_POST, 'subject'));
      $contact->setMessage(filter_input(INPUT_POST, 'message'));

      $this->show('contact', [
        'contact'    => $contact,
        'errorsList' => $errorsList,
      ]);

      // Quit the program to avoid to insert the contact request with the errors
      exit;
    }

    // To insert in DB (or display the pre-entered form), first, we create a new instance of the Contact Model
    $contact = new Contact();

    // Then, fill the values for each corresponding property in the instance
    $contact->setFirstname($firstname);
    $contact->setLastname($lastname);
    $contact->setEmail($email);
    $contact->setSubject($subject);
    $contact->setMessage($message);

    // Finaly, call the method of the Model allowing to add in DB
    $success = $contact->insertInDB();

    if ($success) {
      // Redirect to the contact success page
      header('Location: ' . $_SERVER['BASE_URI'] . '/contact_success');
      exit;
    } else {
      echo 'Erreur dans l\'envoi du formulaire de contact. Veuillez réessayer plus tart';
    }
  }

  /**
   * Method managing the displaying of the contact success page
   * 
   * @return void
   */
  public function contactSuccess() {
    $this->show('contact_success');
  }
}