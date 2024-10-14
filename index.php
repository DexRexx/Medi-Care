<?php
include 'partials/header.php';

?>

    <!-- Body Section -->
    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
        <div class="info d-flex align-items-center">
          <div class="container">
            <div
              class="row justify-content-center"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="col-lg-6 text-center">
                <h2>Welcome to Medi-Care Hospital</h2>
                <p>
                  Medi-Care Hospital is one of the leading hospitals in the
                  country, the hospital which serves as a community purpose is
                  noted for providing quality and affordable healthcare in a
                  siren and well-motivated atmosphere.
                </p>
                <a href="#featured-services" class="btn-get-started"
                  >Get Started</a
                >
              </div>
            </div>
          </div>
        </div>
        <div
          id="hero-carousel"
          class="carousel slide"
          data-bs-ride="carousel"
          data-bs-interval="5000"
        >
          <div class="carousel-item">
            <img src="assets/images/hero-section/hero-1.jpg" alt="" />
          </div>
          <div class="carousel-item active">
            <img src="assets/images/hero-section/hero-2.jpg" alt="" />
          </div>
          <div class="carousel-item">
            <img src="assets/images/hero-section/hero-3.jpg" alt="" />
          </div>
          <div class="carousel-item">
            <img src="assets/images/hero-section/hero-4.jpg" alt="" />
          </div>
          <div class="carousel-item">
            <img src="assets/images/hero-section/hero-5.jpeg" alt="" />
          </div>
          <a
            class="carousel-control-prev"
            href="#hero-carousel"
            role="button"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon bi bi-chevron-left"
              aria-hidden="true"
            ></span>
          </a>
          <a
            class="carousel-control-next"
            href="#hero-carousel"
            role="button"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon bi bi-chevron-right"
              aria-hidden="true"
            ></span>
          </a>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- ======= Featured Services Section ======= -->
      <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                <h4 class="title"><a href="">Quality healthcare</a></h4>
                <p class="description">
                  Affordable healthcare means accessible, quality medical
                  services for all income levels.
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="fas fa-pills"></i></div>
                <h4 class="title"><a href="">Drugs Prescription</a></h4>
                <p class="description">
                  We offer the best drugs for prescribed patients which have
                  efficient output.
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="fas fa-thermometer"></i></div>
                <h4 class="title"><a href="">Blood Donations</a></h4>
                <p class="description">
                  Come and donate blood to help save another's life.
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"
            >
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="fas fa-dna"></i></div>
                <h4 class="title"><a href="">Quality Service</a></h4>
                <p class="description">
                  Our staffs are of qualified and proper background who offer
                  quality services.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Featured Services Section -->

      <!-- About Section -->
      <section id="about" class="about section">
        <div class="container">
          <div class="row gy-4 gx-5">
            <div
              class="col-lg-6 position-relative align-self-start"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <img src="assets/images/about-us.webp" class="img-fluid" alt="" />
            </div>
            <div
              class="col-lg-6 content"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <h3>Our Board of Directors</h3>
              <p>
                The board of directors governs and oversees strategic decisions,
                ensuring quality care, financial stability, and regulatory
                compliance. They guide hospital policies, approve budgets, and
                support executive leadership.
              </p>
              <ul>
                <li>
                  <i class="fa-solid fa-vial-circle-check"></i>
                  <div>
                    <h5>We also specialize in research.</h5>
                    <p>
                      Our staff are proficient in the conclusion of medicinal
                      research to serve you.
                    </p>
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-pump-medical"></i>
                  <div>
                    <h5>We offer health and safety tips</h5>
                    <p>
                      We teach people about the importance of living a good and
                      clean life. This helps prevents people from getting sick.
                    </p>
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-heart-circle-xmark"></i>
                  <div>
                    <h5>We offer heart and mental advice</h5>
                    <p>
                      Our services also include mental and heart workout
                      programs to help ease blood flow.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->

      <!-- Stats Section -->
      <section id="stats" class="stats section light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div
              class="col-lg-3 col-md-6 d-flex flex-column align-items-center"
            >
              <i class="fa-solid fa-user-doctor"></i>
              <div class="stats-item">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="22"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Doctors</p>
              </div>
            </div>
            <!-- End Stats Item -->
            <div
              class="col-lg-3 col-md-6 d-flex flex-column align-items-center"
            >
              <i class="fa-regular fa-hospital"></i>
              <div class="stats-item">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="12"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Departments</p>
              </div>
            </div>
            <!-- End Stats Item -->
            <div
              class="col-lg-3 col-md-6 d-flex flex-column align-items-center"
            >
              <i class="fas fa-flask"></i>
              <div class="stats-item">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="6"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Research Labs</p>
              </div>
            </div>
            <!-- End Stats Item -->
            <div
              class="col-lg-3 col-md-6 d-flex flex-column align-items-center"
            >
              <i class="fas fa-award"></i>
              <div class="stats-item">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="88"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Awards</p>
              </div>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>
      </section>
      <!-- /Stats Section -->

      <!-- Departments Section -->
      <section id="departments" class="departments section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Departments</h2>
          <p>We have the best medical departments. Come check them out.</p>
        </div>
        <!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a
                    class="nav-link active show"
                    data-bs-toggle="tab"
                    href="#departments-tab-1"
                    >Cardiology</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#departments-tab-2"
                    >Neurology</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#departments-tab-3"
                    >Hepatology</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#departments-tab-4"
                    >Pediatrics</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-bs-toggle="tab"
                    href="#departments-tab-5"
                    >Eye Care</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="departments-tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Cardiology</h3>
                      <p class="fst-italic">We have the best heart surgeons.</p>
                      <p>
                        Cardiology is a branch of medicine that specializes in
                        diagnosing, treating, and preventing diseases and
                        conditions related to the heart and blood vessels.
                        Cardiologists, the doctors who practice cardiology,
                        focus on heart health, addressing issues such as
                        coronary artery disease, heart rhythm disorders, heart
                        failure, and congenital heart defects.
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/images/departments/departments-1.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="departments-tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>We have the best brain and spinal surgeons</h3>
                      <p class="fst-italic">
                        We treat and manage disorders of the nervous system,
                        which includes the brain, spinal cord, and peripheral
                        nerves.
                      </p>
                      <p>
                        We practice neurology, address conditions such as
                        epilepsy, stroke, multiple sclerosis, Parkinson's
                        disease, Alzheimer's disease, migraines, and
                        neuropathies. They employ various diagnostic tools and
                        techniques, including neurological exams, imaging
                        studies (like MRI and CT scans), electroencephalograms
                        (EEGs), lumbar punctures, and nerve conduction studies.
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/images/departments/departments-2.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="departments-tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>We treat liver and gall bladder diseases.</h3>
                      <p class="fst-italic">
                        Hepatologists aim to manage liver health, improve liver
                        function, and provide treatment options, including
                        medications, lifestyle changes, and in some cases, liver
                        transplantation.
                      </p>
                      <p>
                        We specialize in hepatology, address conditions such as
                        hepatitis, liver cirrhosis, liver cancer, fatty liver
                        disease, and biliary tract disorders. They use various
                        diagnostic tools and procedures, including liver
                        function tests, imaging studies (such as ultrasound, CT,
                        and MRI), liver biopsies, and endoscopic techniques.
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/images/departments/departments-3.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="departments-tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>
                        We study growth in infants, children and adolescents.
                      </h3>
                      <p class="fst-italic">
                        We also have well developed plan to have young ones.
                      </p>
                      <p>
                        Pediatricians, the doctors who specialize in pediatrics,
                        provide comprehensive care that includes preventive
                        health maintenance for healthy children, medical care
                        for acutely or chronically ill children, and guidance to
                        support the physical, emotional, and social development
                        of young patients. They address a wide range of health
                        issues, including immunizations, growth and development
                        monitoring, behavioral problems, infections, injuries,
                        genetic disorders, and chronic diseases.
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/images/departments/departments-4.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="departments-tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Come and check your eye proficiency.</h3>
                      <p class="fst-italic">We offer eye test and medicine.</p>
                      <p>
                        An eye test, or eye exam, is a comprehensive assessment
                        performed by an optometrist or ophthalmologist to
                        evaluate vision and check for eye diseases
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img
                        src="assets/images/departments/departments-5.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Departments Section -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
          <div class="text-center">
            <h3>In an emergency? Need help now?</h3>
            <p>
              Visit us to help sort out your medical and health issues. We also
              have an ambulance on standby for any emergency issues. We are
              located at Dansoman, Sahara. Call us on 0208102626. We are the
              best at treating all kinds of health and mental issues. Book an
              Appointment below.
            </p>
            <a class="cta-btn scrollto" href="#appointment"
              >Book an Appointment</a
            >
          </div>
        </div>
      </section>
      <!-- End Cta Section -->
    </main>

    <?php
include 'partials/footer.php';

?>