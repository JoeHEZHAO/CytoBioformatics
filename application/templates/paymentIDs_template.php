             <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="item item-black">
                        <!-- Transparent Image -->
                        <img src="images/transparent.png" alt="" class="img-responsive" />
                        <!-- Heading -->
                        <div class="item-heading clearfix">
                            <!-- Heading -->
                            <h3>Debit Card</h3>
                            <!-- Bank Name -->
                            <h4>AR Bank</h4>
                        </div>
                        <!-- Account -->
                        <div class="item-account">
                            <!-- Value -->
                            <span>XXXX</span>
                            <span>XXXX</span>
                            <!-- <span>XXXX</span> -->
                            <!-- <span>1962</span> -->
                            <span><?php echo $response; ?></span>
                        </div>
                        <!-- Validity Starts -->
                        <div class="item-validity">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <!-- Item -->
                                    <div class="item-valid clearfix">
                                        <!-- Valid From -->
                                        <h5>Valid From</h5>
                                        <!-- Date -->
                                        <span>01/08</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <!-- Item -->
                                    <div class="item-valid clearfix">
                                        <!-- Valid Thru -->
                                        <h5>Valid Thru</h5>
                                        <!-- Date -->
                                        <span>03/16</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Validity Ends -->

                        <!-- Card Type Starts -->
                        <div class="item-cc-type clearfix">
                            <!-- Type -->
                            <h6>Master Card</h6>
                            <!-- Icon -->
                            <i class="fa fa-cc-mastercard"></i>
                        </div>
                        <!-- Card Type Ends --> 
                    </div>
                </div>
    <input type="checkbox" id="card1" name="<?php echo $cardPaymentID; ?>" ><?php echo $cardPaymentID; ?><br>