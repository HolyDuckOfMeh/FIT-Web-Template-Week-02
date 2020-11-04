<!-- Exercise JavaScript II -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a dice class that holds an int attribute for the number of sides it has, and a roll function that rolls the dice and returns the outcome. 
      Add the elements and script needed so that a user can enter a number of sides and a number of times to roll; display on a button click.</h4>
    <!-- Place Answer Here -->
      
    <label for='diceSideInput'>Number of Sides:</label>
      <input id='diceSideInput'>
      <br>
      <br>
      <label for='rollAmountInput'>Roll Amount:</label>
      <input id='rollAmountInput'>
      <button id='rollDice' onClick='rollem(document.getElementById("diceSideInput").value, document.getElementById("rollAmountInput").value)'>Roll</button>

      <p id='rollDisplay'></p>

      <script>

        //epic class time
        class Dice{
          //cornstructor
          constructor(sidesVal){
            this.sides = sidesVal;
          };

          //function to roll
          roll(){
            return Math.floor(Math.random()*Math.floor(this.sides) + 1)
          };
        };

        function rollem(sidesVal, rollVal){
          var die = new Dice(sidesVal);
          var rollSum = 0;
          var rollResult = 0;
          var rollList = '';
          while(rollVal > 0){
            rollResult = die.roll();
            rollSum += rollResult;
            rollList += ' ' + rollResult;
            rollVal--;
          }
          document.getElementById("rollDisplay").innerHTML = rollList + " Sum: " + rollSum;
        }

      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question F1 -->
  <div class='student-response'>
    <h1>Question #F1:</h1>
    <h4>Copy Question 1, but add a 'cheaty' attribute that allows the user to also input how cheaty they wish their dice to be. 
      (be creative and useful, it'll earn you more points! :)</h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F1 -->

<!-- Question F2 -->
  <div class='student-response'>
    <h1>Question #F2:</h1>
    <h4>Create the elements and script to accept a username and password. Add a 'register' button that accepts a new username and password and stores it along with some 
      pre-written and hardcoded usernames and passwords. Display 'Access Granted' or some other secret in a p tag if the username and password match, otherwise show an error.</h4>
    <!-- Place Answer Here -->

      

    <!-- Place Answer Here -->
  </div>
<!-- Question F2 -->

<!-- Question F3 -->
  <div class='student-response'>
    <h1>Question #F3:</h1>
    <h4>Create a monster class that has attributes like name, health, attack damage, and description as well as a function to attack and return a 
      damage amount, and another function to be sent a damage amount for the monster to take. Then create 2 monster objects and allow the user to 
      click a button next to the monster to attack it for 1d6 damage (1-6). Constantly display the monsters' hp's and when the button is clicked also 
      have that monster attack the user. display the users health as well (ex. starting at 100). </h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F3 -->
