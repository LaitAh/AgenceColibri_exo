<h2>Contact</h2>
<form action="" method="POST">
  <div class="left">
    <label for="lastname">Nom
      <input type="text" id="lastname" name="lastname" placeholder="Entrez votre nom ici" value="<?= isset($contact) ? $contact->getLastname() : ''; ?>" require>
    </label>
    <label for="firstname">Prénom
      <input type="text" id="firstname" name="firstname" placeholder="Entrez votre prénom ici" value="<?= isset($contact) ? $contact->getFirstname() : ''; ?>" require>
    </label>
    <label for="email">E-mail
      <input type="email" id="email" name="email" placeholder="Entrez votre e-mail ici" value="<?= isset($contact) ? $contact->getEmail() : ''; ?>" require>
    </label>
  </div>
  <div class="right">
    <label for="subject">Sujet
      <input type="text" id="subject" name="subject" placeholder="Entrez le sujet de votre message ici" value="<?= isset($contact) ? $contact->getSubject() : ''; ?>" require>
    </label>
    <label for="message">Message</label>
    <textarea type="text" id="message" name="message" placeholder="Entrez votre message ici" value="<?= isset($contact) ? $contact->getMessage() : ''; ?>" rows="5" require></textarea>
  </div>
  <button type="submit" class="submit-button">Envoyer</button>
</form>