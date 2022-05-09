<h2>Contact</h2>
<form>
  <div class="left">
    <label for="last-name">Nom
      <input type="text" id="last-name" require>
    </label>
    <label for="first-name">Prénom
      <input type="text" id="first-name" require>
    </label>
    <label for="email">E-mail
      <input type="email" id="email" require>
    </label>
  </div>
  <div class="right">
    <label for="subject">Sujet
      <input type="text" id="subject" require>
    </label>
    <label for="message">Message</label>
    <textarea type="text" id="message" rows="5" require></textarea>
  </div>
  <input type="submit" class="submit-button" value="Envoyer">
</form>