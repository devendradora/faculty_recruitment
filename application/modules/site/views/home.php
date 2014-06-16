    <div class="container" id="">
    <div class="">
      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
        <li class=""><a href="#recent" data-toggle="tab">Recent Activities</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home">
          <h4 class="text-center">Click on Explore to go to selected subject page</h4>
          <ul class="list-unstyled">
              <?php
              foreach ($query as $row) {
               echo '
                  <li class="col-md-4">
                    <div class="thumbnail">
                      <img class="img-responsive" alt="'.$row->url.'" src="'.IMG.$row->url.'.png" />
                      <div class="caption">
                        <h3>'.$row->name.'</h3>
                        <p>
                          <a class="btn btn-primary" href="">Explore</a>
                        </p>
                      </div>
                    </div>
                  </li>
              ';
              }
              ?>
          </ul>
        </div>
        <div class="tab-pane fade" id="recent">
          
        </div>
      </div>
    </div>
  <hr>
  </div>
