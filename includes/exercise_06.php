<section>
  <fieldset>
    <legend>#06 - Conditional Operators</legend>
    <div id='exercise_06'>
      <?php
        // Declare variables
        $ToTest1 = "word";
        $ToTest2 = "13";
        $ToTest3 = "42";

        // Define function to test number and print results
        function testVariable($ToTest) {
          // Test variable
          if (is_numeric($ToTest)) {
            if($ToTest % 2 == 0) {
              echo "<p>$ToTest is an even number</p>";
            } else {
              echo "<p>$ToTest is an odd number</p>";
            }
          } else {
            echo "<p>$ToTest is not a number</p>";
          }
        }

        // Test declared variables
        testVariable($ToTest1);
        testVariable($ToTest2);
        testVariable($ToTest3);

      ?>
    </div>
  </fieldset>
</section>
