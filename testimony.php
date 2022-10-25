 <section class="w3l-index4 py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="content-slider text-center">
                <div class="clients-slider">
                    <div class="mask">
                        <ul>
                            <?php 

                            $getest="SELECT* FROM testimonies where status=0";
                            $rst = mysqli_query($conn, $getest);
                            $rtn=mysqli_num_rows($rst);
                            if($rtn){
                                while($row=mysqli_fetch_assoc($rst)){

                                    $tname=$row['name'];
                                    $id=$row['id'];
                                    $tmoney=$row['testimony']; ?>

                                     <li class="anim<?php echo $id ?>">
                                <img src="assets/images/human.png" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>
                                    <?php echo base64_decode($tmoney) ?>
                                    </q> </blockquote>
                                <div class="source">- <?php echo $tname ?>-</div>
                            </li>

                                <?php }
                            } ?>
                           

                           <!--  <li class="anim2">
                                <img src="assets/images/testi2.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                        illo
                                        inventore.
                                    </q> </blockquote>
                                <div class="source">- Petey Cru</div>
                            </li>
                            <li class="anim3">
                                <img src="assets/images/testi3.jpg" class="img-fluid rounded-circle "
                                    alt="client image" />
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation.
                                    </q> </blockquote>
                                <div class="source">- Anna Sth</div>
                            </li>
                            <li class="anim4">
                                <img src="assets/images/testi1.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse
                                        cillum dolore eu. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum.
                                    </q> </blockquote>
                                <div class="source">- Gail For</div>
                            </li>
                            <li class="anim5">
                                <img src="assets/images/testi2.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam,
                                        quis nostrud exercitation.
                                    </q> </blockquote>
                                <div class="source">- Boye Fra</div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>	

        <!-- call block -->
    <section class="w3l-call-to-action-6">
        <div class="container py-md-5 py-sm-4 py-5">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="left-content-call">
                    <h3 class="title-big">Have a testimony to share?</h3>
                    <p class="text-white mt-1">Jesus Answers!</p>
                </div>
                <div class="right-content-call mt-lg-0 mt-4">
                    <ul class="buttons">
                        <li class="phone-sec me-lg-4"><i class="fa fa-speaker-deck"></i>
                            <!-- <a class="call-style-w3" href="tel:+234 909657467657">+234 909657467657</a> -->
                        </li>
                        <li><a href="testify" class="btn btn-style btn-style-2 mt-lg-0 mt-3">Click to Testify</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //call block -->