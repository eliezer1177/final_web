
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Drop Us A Note</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ex!</p>
        </div>
      </div>
    </div>
  </div>
</section>





<section class="contact-form">
  <div class="container">
  <?=form_open_multipart(base_url('contact/tambah'), array('id' => 'form1'))?>
      <div class="col-md-6 col-sm-12">
        <div class="block">
          <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="Email Address">
          </div>
          <div class="form-group">
            <input name="subject" type="text" class="form-control" placeholder="Subject">
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="block">
          <div class="form-group-2">
            <textarea name="message" class="form-control" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit">Send Message</button>
        </div>
      </div>
      <div class="error" id="error">Sorry Msg dose not sent</div>
      <div class="success" id="success">Message Sent</div>
      <?=form_close()?>


<div class="container mt-4">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $contact->name ?></td>               
                <td><?= $contact->email ?></td>              
                <td><?= $contact->subject ?></td>                    
                <td><?= $contact->message ?></td>               
                <td>
                    <a href="<?= base_url('contact/update/' . $contact->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?= base_url('contact/delete/' . $contact->id) ?>" 
                    class="btn btn-danger btn-sm" 
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                    >
                    Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

      <div class="col-md-6 mt-5 mt-md-0">
        <div class="block">
          <div class="google-map">
            <div class="map" id="map_canvas" data-latitude="51.5223477" data-longitude="-0.1622023"
              data-marker="<?=home_assets()?>images/marker.png"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
