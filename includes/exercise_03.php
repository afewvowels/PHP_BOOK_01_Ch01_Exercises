<section>
  <fieldset>
    <legend>#03 - Number Formatting</legend>
    <div id='exercise_02'>
      <?php
        $SingleFamilyHome = 399500;
        $SingleFamilyHome_Display = number_format($SingleFamilyHome, 2);
        echo "<p>The current median price of a single family home in Pleasanton, CA is $$SingleFamilyHome_Display.</p>";
      ?>
    </div>
  </fieldset>
</section>
