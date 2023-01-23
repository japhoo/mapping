<section id="testimonia1" class="testimonial testimonial-wide testimonial-1">
    <div class="container">
        <div class="row">
            <h2 class="text-center">What Our clients say about us</h2>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 wow fadeInUp" data-wow-delay="100ms">
                <div id="testimonial-wide" class="carousel carousel-navs" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
                    <?php
                    $sqlstr = "SELECT * FROM testimony WHERE msg !=''";
                    $stmt = $conn->prepare($sqlstr);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) :
                        extract($row);
                    ?>
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <div class="testimonial--body">
                                <p>“<?= $msg ?>”</p>
                            </div>

                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="<?= $img ?>" alt="Testimonial Author">
                                </div>
                                <h4><?= $name ?></h4>
                                <p><?= $country ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </div>
</section>