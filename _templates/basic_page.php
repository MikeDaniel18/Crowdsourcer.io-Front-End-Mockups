<?php
    // Use this space to change the default page variables.
    // $loggedin = true;

    // Leave this in, loads all state and style.

    require_once("../root.php");
    require_once("../includes/functions.php");
    require_once("../includes/page_config.php");
    require_once("../partials/header.php");

    // Custom PHP goes here...
?>

<style>
  /* Fixes cards not lining up */
  .row > * > .thumbnail_container {
    margin: 0px;
  }
</style>

<!-- Example of full-width content aka a "Jumbotron" -->
<header class="create-header">
  <div class="create-splash-bg">
    <div class="container-fluid">
        <div class="col-lg-12 splash-vertical-span-container text-center">
            <span class="vertical-span">
                <h1 class="tagline funky_text">This is a starting point...</h1>
            </span>
            <h3 class="voffset">Use this page, to get started with your design.</h3>
        </div>
    </div>
  </div>
</header>

<!-- Container wraps, and centers content. Use for non-fullwidth content-->
<div class="container">
  <h1>Build your static page here!</h1>
  <p>
    This page is here for you to view. <strong><u>Please do not edit this file!!! Make a copy first!</u></strong>. You can use any components on this page, or you can choose to remove them. Also, please follow naming conventions on the <a href="/">front page</a>. If you have any questions, comments or concerns, please contact us at <a href="https://crowdsourcer.io/mission-control/29"/><i class="fa fa-rocket"></i> Mission Control.</a>
  </p>

  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <!-- #####################
        EXAMPLE: Card w/ Thumbnail
      ###################### -->
      <div class="thumbnail_container">
        <a href="#">
            <img class="thumbnail_image" src="<? getRandomImage(); ?>"/>
        </a>
        <div class="thumbnail_content">
          <a href="#">
            <h4 class="nvoffset">Card Title</h4>
          </a>
          <p class="nvmarg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at ex ac libero semper mattis nec consequat augue.
          </p>
          <div class="thumbnail_footer">
            <div class="progress progress-xs nvmarg voffset">
              <div class="progress-bar progress-bar-xs progress-bar-success" role="progressbar" aria-valuenow="89.473684210526" aria-valuemin="0" aria-valuemax="100" style="width: 89.473684210526%"></div>
            </div>
            <div class="thumbnail_project_info voffset">
              <div class="row even_gutter">
                <div class="col-xs-4 project_thumbnail_stat even_gutter">
                  <p class="nvmarg nvoffset project_thumbnail_stat_number">14</p>
                  <p class="nvmarg nvoffset description_label">Contributors</p>
                </div>
                <div class="col-xs-4 project_thumbnail_stat even_gutter">
                  <p class="nvmarg nvoffset project_thumbnail_stat_number">2</p>
                  <p class="nvmarg nvoffset description_label">Spaces</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END CARD -->
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <!-- #####################
        EXAMPLE: Card w/ Thumbnail
      ###################### -->
      <div class="thumbnail_container">
        <a href="#">
            <img class="thumbnail_image" src="<? getRandomImage(); ?>"/>
        </a>
        <div class="thumbnail_content">
          <a href="#">
            <h4 class="nvoffset">Card Title</h4>
          </a>
          <p class="nvmarg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at ex ac libero semper mattis nec consequat augue.
          </p>
          <div class="thumbnail_footer">
            <div class="progress progress-xs nvmarg voffset">
              <div class="progress-bar progress-bar-xs progress-bar-success" role="progressbar" aria-valuenow="89.473684210526" aria-valuemin="0" aria-valuemax="100" style="width: 89.473684210526%"></div>
            </div>
            <div class="thumbnail_project_info voffset">
              <div class="row even_gutter">
                <div class="col-xs-4 project_thumbnail_stat even_gutter">
                  <p class="nvmarg nvoffset project_thumbnail_stat_number">14</p>
                  <p class="nvmarg nvoffset description_label">Contributors</p>
                </div>
                <div class="col-xs-4 project_thumbnail_stat even_gutter">
                  <p class="nvmarg nvoffset project_thumbnail_stat_number">2</p>
                  <p class="nvmarg nvoffset description_label">Spaces</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END CARD -->
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <!-- #####################
        EXAMPLE: Card w/ Thumbnail
      ###################### -->
      <div class="thumbnail_container">
        <a href="#">
            <img class="thumbnail_image" src="<? getRandomImage(); ?>"/>
        </a>
        <div class="thumbnail_content">
          <a href="#">
            <h4 class="nvoffset">Card Title</h4>
          </a>
          <p class="nvmarg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at ex ac libero semper mattis nec consequat augue.
          </p>
          <div class="thumbnail_footer">
            <div class="progress progress-xs nvmarg voffset">
              <div class="progress-bar progress-bar-xs progress-bar-success" role="progressbar" aria-valuenow="89.473684210526" aria-valuemin="0" aria-valuemax="100" style="width: 89.473684210526%"></div>
            </div>
            <div class="thumbnail_project_info voffset">
              <div class="row even_gutter">
                <div class="col-xs-4 project_thumbnail_stat even_gutter">
                  <p class="nvmarg nvoffset project_thumbnail_stat_number">14</p>
                  <p class="nvmarg nvoffset description_label">Contributors</p>
                </div>
                <div class="col-xs-4 project_thumbnail_stat even_gutter">
                  <p class="nvmarg nvoffset project_thumbnail_stat_number">2</p>
                  <p class="nvmarg nvoffset description_label">Spaces</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END CARD -->
    </div>
</div>
<br/>
<?php require_once("../partials/footer.php"); ?>