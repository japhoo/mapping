<section class="elementor-section elementor-top-section elementor-element elementor-element-dcb0607 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dcb0607" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f1b7b1" data-id="0f1b7b1" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-c5b1760 elementor-widget elementor-widget-elementskit-testimonial" data-id="c5b1760" data-element_type="widget" data-widget_type="elementskit-testimonial.default">
                    <div class="elementor-widget-container">
                        <div class="ekit-wid-con">
                            <div class="elementskit-testimonial-slider ekit_testimonial_style_6 slick-slider arrow_inside " data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:false,&quot;autoplay&quot;:true,&quot;speed&quot;:500,&quot;slidesPerGroup&quot;:1,&quot;slidesPerView&quot;:1,&quot;loop&quot;:false,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1},&quot;768&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:1},&quot;1024&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1}}}">
                                <div class="swiper-container">
                                    <div class="slick-list swiper-wrapper">
                                        <?php
                                        $sqlstr = "SELECT * FROM testimony WHERE msg !=''";
                                        $stmt = $conn->prepare($sqlstr);
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        while ($row = $result->fetch_assoc()) :
                                            extract($row);
                                        ?>

                                            <div class="swiper-slide">
                                                <div class="slick-slide">
                                                    <div class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-three  elementor-repeater-item-a01711a">
                                                        <div class="elementskit-watermark-icon elementskit-icon-content  commentor-badge ">
                                                            <i aria-hidden="true" class="icon icon-quote"></i>
                                                        </div>
                                                        <div class="elementskit-commentor-bio ">
                                                            <div class="elementkit-commentor-details">
                                                                <div class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                    <img decoding="async" width="550" height="496" src="<?= substr($img, 3) ?>" class="attachment-full size-full" alt="" loading="lazy" srcset="<?= substr($img, 3) ?> 550w, <?= substr($img, 3) ?> 300w" sizes="(max-width: 550px) 100vw, 550px" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementskit-profile-info">
                                                            <strong class="elementskit-author-name"><?= $name ?></strong>
                                                        </div>
                                                        <div class="elementskit-commentor-content">
                                                            <ul class="elementskit-stars">
                                                                <li><a><i class="eicon-star active"></i></a>
                                                                </li>
                                                                <li><a><i class="eicon-star active"></i></a>
                                                                </li>
                                                                <li><a><i class="eicon-star active"></i></a>
                                                                </li>
                                                                <li><a><i class="eicon-star active"></i></a>
                                                                </li>
                                                                <li><a><i class="eicon-star active"></i></a>
                                                                </li>
                                                            </ul>
                                                            <p>
                                                                <?= $msg ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <ul class="slick-dots swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>