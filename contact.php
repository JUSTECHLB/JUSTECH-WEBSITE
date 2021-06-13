<?php include "header.php" ?>

    <!-- Main Content -->
    <main>

      <!-- Map -->
      <section id="map" class="p-0 pt-80 mt-10">
        <div class="container-fluid p-0">
          <div class="row no-gutters">
            <div class="col">
              <h2 class="hide">Map</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26496.124608916696!2d35.48677272141671!3d33.88925268661702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17215880a78f%3A0x729182bae99836b4!2sBeirut!5e0!3m2!1sen!2slb!4v1619542319967!5m2!1sen!2slb" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact -->
      <section id="contact">
        <div class="container">
          <div class="row">
            <!-- Contact Image -->
            <div class="col-lg-5">
              <!-- About item 1 -->
              <div class="media p-5 bg-white shadow" data-aos="fade-right">
                <div class="media-body">
                  <h3 class="mt-3 mb-4">Contact us</h3>
                  <p>Don't hesitate to contact us. We'll be glad to assist you!</p>
                  <p class="mt-3"><i class="fas fa-map-marker-alt text-primary pr-2"></i> Beirut, Lebanon </p>
                  <p><i class="fas fa-phone text-primary pr-2"></i> +961 78 890 304 </p>
                  <p><i class="fas fa-calendar-alt text-primary pr-2"></i> Monday - Friday, from 9pm - 5pm  </p>
                  <p class="mb-5"><i class="far fa-envelope text-primary pr-2"></i> contact@justechlb.tech </p>
                </div>
              </div>
            </div>
            <!-- Contact Form -->
            <div class="offset-lg-1 col-lg-6">
              <h2 class="hide">Contact</h2>
              <form action="mail.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" id="NameInput" placeholder="name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="EmailInput" placeholder="email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="SubjectInput" placeholder="subject">
                </div>
                <div class="form-group">
                  <textarea placeholder="message" class="form-control" id="FormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-large">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <?php include "cta.php" ?>
      
    </main>

<?php include "footer.php" ?>

  </body>
</html>
