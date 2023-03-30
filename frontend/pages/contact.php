<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact us</span>
                <h2 class="mb-4">Do you have any question?</h2>
            </div>
        </div>

        <div class="row block-9">
            <div class="col-md-8">
                <form action="proses/send_pesan.php" class="bg-light p-4 p-md-5 contact-form" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email" name="email">
                            </div>
                        </div>
                        <div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Subject" name="subject">
								</div>
							</div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message" name="submit" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-md-4 d-flex pl-md-5">
                <div class="row">
                    <?php
                    $query = "SELECT * FROM contact";
                    $result = mysqli_query($conn, $query);
                    $data = mysqli_fetch_assoc($result);
                    ?>
                    <div class="dbox w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="text">
                            <p><span>Address:</span><?php echo $data['address'];  ?></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-whatsapp"></span>
                        </div>
                        <div class="text">
                            <p><span>Whatsapp:</span> <a href="https://wa.me/<?= $data['phone']; ?>">+<?= $data['phone']; ?></a></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="text">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com"><?php echo $data['email'];  ?></a></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-instagram"></span>
                        </div>
                        <div class="text">
                            <p><span>Instagram</span> <a href="https://www.instagram.com/prasty_08/"><?php echo $data['instagram'];  ?></a></p>
                        </div>
                    </div>
                </div>
                <!-- <div id="map" class="map">

					</div> -->
            </div>
        </div>
        <div class="row">
            <?php
            $query = "SELECT iframe FROM contact";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
            ?>
            <?= $data['iframe']; ?>
        </div>
    </div>

</section>
