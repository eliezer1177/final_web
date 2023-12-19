<div class="container mt-4">
    <?= form_open('contact/update/' . $contact->id, 'class="edit-form"') ?>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" class="form-control" value="<?= $contact->name ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" value="<?= $contact->email ?>">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="form-control" value="<?= $contact->subject ?>">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" class="form-control"><?= $contact->message ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    <?= form_close() ?>
</div>
