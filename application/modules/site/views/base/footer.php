        <div class="row hidden-print">
          <hr>
          <footer>
            <p>
              <small class="pull-right" data-step="10" data-intro="Contact WSDC for any queries, feedback, suggestions">
                <em>page rendered in <?php echo $this->benchmark->elapsed_time();?> sec</em> | 
                <span class="glyphicon glyphicon-envelope"> </span> <a href="mailto: discussforum@gmail.com" target="_blank">  discussforum@gmail.com</a> | 
                <span class="tips" title=""> <span class="glyphicon glyphicon-phone"> </span> +91-8121210825</span> |
                <span class="glyphicon glyphicon-copyright-mark"></span> 2014, CODERED
              </small>
            </p>
          </footer>
        </div>
        <script src="<?php echo JS."jquery.min.js"; ?> "></script>
        <script src="<?php echo JS."bootstrap.min.js"; ?> "></script>
        <?php
        if (isset($scripts)) {
          foreach ($scripts as $index => $script) {
            ?>
            <script src="<?php echo JS.$script; ?>"></script>
            <?php
          }
        }
        ?>
      </body>
      </html>
