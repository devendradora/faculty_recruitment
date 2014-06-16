            <!-- content ends here -->
                </div>
            </div>
        </div>
        <footer>
            <hr>
                <!-- <p>Elapsed time: {elapsed_time}</p> -->
                <p class="pull-right hidden-print">
                    <span class="glyphicon glyphicon-envelope"> </span> <a href="mailto: wsdc.nitw@gmail.com" target="_blank">  wsdc.nitw@gmail.com</a> |
                    <span class="glyphicon glyphicon-phone"> </span> +91-8121210825 |
                    <span class="glyphicon glyphicon-copyright-mark"></span> 2014, WSDC NITW
               </p>
        </footer>
        <!-- <script src="<?php //echo base_url("assets/js/jquery.js"); ?>"></script> -->
        <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/jquery.validate.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/additional-methods.js");?>"></script>
        <!-- <script src="<?php //echo base_url("assets/js/bootstrap/tooltip.js"); ?>"></script> -->
        <!-- <script src="<?php //echo base_url("assets/js/bootstrap/popover.js"); ?>"></script> -->
        <script src="<?php echo base_url("assets/js/base.js"); ?>"></script>
        <?php
        if (isset($scripts)) {
            foreach ($scripts as $index => $script) {
                ?>
                <script src="<?php echo base_url("assets/js/".$script); ?>"></script>
                <?php
            }
        }
        ?>