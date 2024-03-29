<div class="content">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-paper text-danger"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Crop Purchased</p>
                <p class="card-title"><?php echo sum_as_total("crop_purchased","WHERE supplier_id=".$_SESSION['user_id'],"quantity")."kg"; ?>
                  <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <a href="index.php?page=all_orders"><i class="fa fa-list"></i> View  </a>
              </div>
            </div>
          </div>
        </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-paper text-danger"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Total Requests</p>
                <p class="card-title"><?php echo get_count("requests"); ?>
                  <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <a href="index.php?page=requests"><i class="fa fa-list"></i> View  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>