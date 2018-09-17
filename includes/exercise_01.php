<section>
  <fieldset>
    <legend>#01 - Interest Rates Array</legend>
    <div id='exercise_01'>
      <?php
        $InterestRate1 = 0.0725;
        $InterestRate2 = 0.0750;
        $InterestRate3 = 0.0775;
        $InterestRate4 = 0.0800;
        $InterestRate5 = 0.0825;
        $InterestRate6 = 0.0850;
        $InterestRate7 = 0.0875;

        $InterestRateArr = array($InterestRate1, $InterestRate2, $InterestRate3,
                                  $InterestRate4, $InterestRate5, $InterestRate6,
                                  $InterestRate7);

        foreach($InterestRateArr as $Rate) {
          echo "<p>$Rate</p>";
        }
      ?>
    </div>
  </fieldset>
</section>
