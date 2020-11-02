<!-- Exercise JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a keyword brainwashed script. Add an input and a button, then add the code to add functionality. 
      The user will enter a long string of text, then on button click, the code will search the long string for a keyword and print everything after the keyword to a p tag. 
      (You may use "skeleton" as the keyword if you can't think of anything else.)</h4>
    <!-- Place Answer Here -->

      <label for='leagueChatCleanser'>League Chat Input:</label>
      <input id='leagueChatInput'>
      <p id='leagueChatDisplay'></p>

      <button id='leagueChatButton' onClick='chat(document.getElementById("leagueChatInput").value)'>Trash Talk</button>

      <script>

       function chat(input)
          {
            var ezclap=input.indexOf("ez");
            var keyMessage=input.substring(ezclap, ezclap+2);
            document.getElementById('leagueChatDisplay').innerHTML = keyMessage
          }
      
      </script>



    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create the script and elements necessary to hold a game inventory. Create a hardcoded array for this inventory. 
        One input and button will be responsible for checking what item is at the entered index, 
        while another input and button will be responsible for entering how many of that item is stored. 
        (Hint two arrays or a 2 dimensional array is needed)</h4>
    <!-- Place Answer Here -->
      
      <label for='gameInventoryInput'>Item Name:</label>
      <input id='gameInventoryInput'>

      <button id='gameInventoryButton' onClick='inventorySearch(document.getElementById("gameInventoryInput").value)'>Search Bag</button>
      <p id='gameDisplay'></p>
      <br>
      <br>
      <br>

      <label for='gameAmountInput'>Item Amount:</label>
      <input id='gameAmountInput'>

      <button id='gameAmountButton' onClick='setAmount(document.getElementById("gameAmountInput").value)'>Set Amount</button>
 
      <script>
      
      var inventoryItems = ['Blue-Eyes White Dragon', 'A Dead Rat', 'Thunderfury', 'Hextech Gunblade'];
      var inventoryAmount = ['3', '15', '1', '6'];
      var inputvar = 0;

      function inventorySearch(input)
      {
        inputvar = input;
        document.getElementById('gameDisplay').innerHTML = inventoryItems[input] + " | Quantity: " + inventoryAmount[input];
      }
      
      function setAmount(input2)
      {
        inventoryAmount[inputvar] = input2;
        document.getElementById('gameDisplay').innerHTML = inventoryItems[inputvar] + " | Quantity: " + inventoryAmount[inputvar];
      }
      </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question F -->
  <div class='student-response'>
    <h1>Find-IT #1:</h1>
    <h4>Create a time travel script. Use the necessary code and elements to allow the user to enter a date (in year, month, day, hour, and minute) 
        they would like to travel to. Then display the number of years, days, hours, and minutes they would need to travel to reach that date and time. 
        (Notice month is excluded)</h4>
    <!-- Place Answer Here -->
      
    <!-- Place Answer Here -->
  </div>
<!-- Question F -->

