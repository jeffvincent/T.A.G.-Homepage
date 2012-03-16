
<?php include_once('includes/functions.php'); ?>
<?php include('includes/head.php'); ?>


<body>
<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<div id="container">

<div id="services">
<h1 id="intro">Available Services</h1>
<div id="services_content">
  <div id="services_menu">
    <?php include('includes/service_ol.php'); ?>
  </div>

<div id="service_info">

<div id="intro_detail" class="services_detail">
  <?php include('includes/intro_detail.php'); ?>
</div>

<div id="upgrades_detail" class="services_detail">
  <?php include('includes/upgrades_detail.php'); ?>
</div>

<div id="data_recovery_detail" class="services_detail">
  <?php include('includes/recovery_detail.php'); ?>
</div>

<div id="windows-on-mac_detail" class="services_detail">
  <?php include('includes/windows-on-mac_detail.php'); ?>
</div>

<div id="computer_training_detail" class="services_detail">
  <?php include('includes/computer_training_detail.php'); ?>
</div>

<div id="same_day_services_detail" class="services_detail">
    <?php include('includes/same_day_services_detail.php'); ?>
  </div>

  <div id="on_site_services_detail" class="services_detail">
    <?php include('includes/on_site_services_detail.php'); ?>
  </div>

  <div id="corporate_services_detail" class="services_detail">
    <?php include('includes/corporate_services_detail.php'); ?>
  </div>

  <div id="backup_solutions_detail" class="services_detail">
    <?php include('includes/backup_solutions_detail.php'); ?>
  </div>

  <div id="data_transfer_detail" class="services_detail">
    <?php include('includes/data_transfer_detail.php'); ?>
  </div>

  <div id="special_business_packages_detail" class="services_detail">
    <?php include('includes/special_business_packages_detail.php'); ?>
  </div>

  <div id="remote_access_services_detail" class="services_detail">
    <?php include('includes/remote_access_services_detail.php'); ?>
  </div>


</div>
</div>
</div>

<?php include('includes/top_footer.php'); ?>
<?php include('includes/footer.php'); ?>

</body>
</html>
