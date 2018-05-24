<!-- This file is used to markup the public-facing widget. -->
<?php if(strlen(trim($monday_friday)) > 0): ;?>
  <p>
    <span class="day-of-week"><b>Monday-Friday: </b></span><?php echo $monday_friday ;?>
  </p>
<?php endif;?>
<?php if(strlen(trim($monday_friday)) > 0): ;?>
  <p>
    <span class="day-of-week"><b>Saturday: </b></span><?php echo $saturday ;?>
  </p>
<?php endif;?>
<?php if(strlen(trim($monday_friday)) > 0): ;?>
  <p>
    <span class="day-of-week"><b>Sunday: </b></span><?php echo $sunday ;?>
  </p>
<?php endif;?>
