<div class="row">
    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
        <?php 
    if($this->session->flashdata('success') == TRUE) 
      echo '<div class="alert alert-success"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('success').'</div>';

    if($this->session->flashdata('warning') == TRUE) 
      echo '<div class="alert alert-warning"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('warning').'</div>';

    if($this->session->flashdata('info') == TRUE)
      echo '<div class="alert alert-info"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('info').'</div>';

    if($this->session->flashdata('danger') == TRUE)
      echo '<div class="alert alert-danger"><a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>'.$this->session->flashdata('danger').'</div>';
    ?>
    <!-- </div> -->
</div>