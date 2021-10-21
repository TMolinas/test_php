<form action="pages/contact-form-action.php" method="post">
    <div class="form-group">
        <label for="subject">Sujet</label>
        <input type="text" class="form-control" id="subject" name="subject" required>
    </div>
    <div class="form-group">
    <label for="email">Votre email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="nom@exemple.com" required>
    </div>

    <div class="form-group">
        <label for="message">Votre message</label>
        <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

