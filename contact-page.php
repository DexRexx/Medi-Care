<?php
include 'partials/header.php';
?>

<!-- Body Section -->
<!-- Page Title -->
<div
  class="page-title dark-background"
  style="background-image: url(assets/images/service-banner.jpeg)"
>
  <div class="container position-relative">
    <h1>Contact Us</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Contact Section</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End Page Title -->

<main class="main">
  <!-- Contact Section -->
  <section id="contact" class="contact section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-6">
          <div
            class="info-item d-flex flex-column justify-content-center align-items-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>Sahara, Dansoman - Accra, Ghana</p>
          </div>
        </div>
        <!-- End Info Item -->
        <div class="col-lg-3 col-md-6">
          <div
            class="info-item d-flex flex-column justify-content-center align-items-center"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>0208102626</p>
          </div>
        </div>
        <!-- End Info Item -->
        <div class="col-lg-3 col-md-6">
          <div
            class="info-item d-flex flex-column justify-content-center align-items-center"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>kvngalpha000@gmail.com</p>
          </div>
        </div>
        <!-- End Info Item -->
      </div>
      <div class="row gy-4 mt-1">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15884.509591079483!2d-0.26595045242811755!3d5.548123610914666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf97711b12b299%3A0xffd4d7dd05fb27f1!2sDansoman%2C%20Accra!5e0!3m2!1sen!2sgh!4v1722424850961!5m2!1sen!2sgh"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <!-- End Google Maps -->

        <div class="col-lg-6">
          <form
            action="forms/contact-logic.php"
            method="post"
            class="php-email-form"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="row gy-4">
              <div class="col-md-6">
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  placeholder="Your Name"
                  required=""
                />
              </div>
              <div class="col-md-6">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  placeholder="Your Email"
                  required=""
                />
              </div>
              <div class="col-md-12">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  placeholder="Subject"
                  required=""
                />
              </div>
              <div class="col-md-12">
                <textarea
                  class="form-control"
                  name="message"
                  rows="6"
                  placeholder="Message"
                  required=""
                ></textarea>
              </div>
              <div class="col-md-12 text-center">
                <!-- Error/Success Message Display -->
                <?php if (!empty($errors)): ?>
                <div class="error-message">
                  <ul>
                    <?php foreach ($errors as $error): ?>
                      <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <?php elseif (!empty($successMessage)): ?>
                <div class="success-message">
                  <?php echo htmlspecialchars($successMessage); ?>
                </div>
                <?php endif; ?>             
              </div>
              <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Send Message</button>

                </div>
            </div>
          </form>
        </div>
        <!-- End Contact Form -->
      </div>
    </div>
  </section>
  <!-- /Contact Section -->
</main>

<?php
include 'partials/footer.php';
?>
