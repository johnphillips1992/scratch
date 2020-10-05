
<?php $path = current_path() ?>
<!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container"> <a class="navbar-brand" href="/">LikeNewRentals.com</a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2"> <a class="<?php if($path=='node/10'){echo 'active';} ?> nav-link" href="/">Home</a> </li>
          <li class="nav-item mx-2"> <a class="<?php if($path=='real-estate-property-list'){echo 'active';} ?> nav-link" href="/real-estate-property-list">Properties</a> </li>
        </ul> <a class="btn navbar-btn mx-2 btn-primary text-secondary" href="/contact">Contact Us</a>
    </div>
  </nav>
<?php if($path=='contact'){ echo '<div class="container pt-5"><h1>Contact Us</h1>'; }?>
  <?php print render($page['content']); ?>

  <!-- Footer -->
  <div class="pt-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p class="lead">We look forward to hearing from you.</p>
		<?php if($path!='contact'){ echo '<a href="/contact" type="submit" class="btn my-1 btn-outline-primary">Contact Us</a>'; }?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 my-3 text-center">
          <p class="text-muted">Copyright 2020 LikeNewRentals.com - All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
<?php print $closure; ?>