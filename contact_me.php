<?php include("dependable/head.php"); ?>
    <main>

      <section class="content-box-area mt-4">
        <div class="container">
          <div class="row g-4">
            <?php include("dependable/profile.php"); ?>
            <div class="col-xl-8">
              <div class="card content-box-card">
                <div class="card-body portfolio-card contact-card">
                  <div class="top-info">
                    <div class="text">
                      <h1 class="main-title">Let's 👋 <span>Work</span> Together</h1>
                    </div>
                  </div>
                  <div class="contact-area">
                    <div class="leave-comments-area">
                      <div class="comments-box">
                        <form id="contact-form" action="assets/mail.php" method="POST">
                          <div class="row gx-3">
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Name</label>
                                <input name="name" required type="text" class="form-control shadow-none" placeholder="Enter your name">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input name="email" required type="email" class="form-control shadow-none" placeholder="Enter your email">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Subject</label>
                                <input name="subject" required type="text" class="form-control shadow-none" placeholder="Subject">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Budget</label>
                                <select name="budget" required class="form-select shadow-none">
                                  <option disabled selected>Select budget...</option>
                                  <option value="$5000">$5000</option>
                                  <option value="$5000 - $1000">$5000 - $10000</option>
                                  <option value="$10000 - $2000">$10000 - $20000</option>
                                  <option value="$20000">$20000+</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-4">
                                <label class="form-label">Comment</label>
                                <textarea name="message" class="form-control shadow-none" rows="4"
                                  placeholder="Type details about your inquiry"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <button class="submit-btn" type="submit">
                                Send Message
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.5 11.6665V6.6665H12.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </button>
                            </div>
                          </div>
                        </form>
                        <p class="ajax-response mb-0"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- background shape area start -->
      <div class="background-shapes">
        <div class="shape-1 common-shape">
          <img src="assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
        </div>
        <div class="shape-2 common-shape">
          <img src="assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
        </div>
        <div class="threed-shape-1 move-with-cursor" data-value="1">
          <img src="assets/img/bg/object-3d-1.png" alt="object-3d-1">
        </div>
        <div class="threed-shape-2 move-with-cursor" data-value="1">
          <img src="assets/img/bg/object-3d-2.png" alt="object-3d-2">
        </div>
      </div>
      <!-- background shape area end -->
    </main>
    <!-- main area part end -->
<?php include("dependable/footer.php"); ?>