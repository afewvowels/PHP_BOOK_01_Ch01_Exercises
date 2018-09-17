<section>
  <fieldset>
    <legend>#04 - Days of the Week</legend>
    <div id='exercise_04'>
      <?php
        $Days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

        $Days[0] = "Lundi";
        $Days[1] = "Maradi";
        $Days[2] = "Mercredi";
        $Days[3] = "Jeudi";
        $Days[4] = "Vendredi";
        $Days[5] = "Samedi";
        $Days[6] = "Dimaanche";

        echo "<p>The days of the week in French are:</p>";

        foreach($Days as $Day) {
          echo "<p>$Day</p>";
        }
      ?>
    </div>
  </fieldset>
</section>
