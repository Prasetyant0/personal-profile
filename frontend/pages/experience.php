<section class="ftco-section education-section ftco-no-pb experience" id="experience-section" style="background: #F8F9FA;">
    <div class="container">
        <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <h2>Experience</h2>
        </header>
        <div class="timeline">
            <?php
            $query = "SELECT * FROM experience";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
            ?>
            <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                <div class="timeline-text">
                    <h2><?php echo $data['experience'];  ?></h2>
                    <p class="text-justify">
                        <?php echo $data['deskripsi'];  ?>
                    </p>
                </div>
            </div>
            <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                <?php
                $query = "SELECT * FROM experience LIMIT 1 OFFSET 1";
                $result = mysqli_query($conn, $query);
                $data = mysqli_fetch_assoc($result);
                ?>
                <div class="timeline-text">
                    <div class="timeline-date"></div>
                    <h2><?php echo $data['experience'];  ?></h2>
                    <p class="text-justify">
                        <?php echo $data['deskripsi'];  ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
