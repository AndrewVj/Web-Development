var inputNo = document.getElementById("input-number");

var submitButton = document.querySelector("#submitButton");

submitButton.addEventListener("click", onSubmitButtonClick);

//To do after submit button is clicked.
function onSubmitButtonClick(e) {
  getInputAndDisplaySong(inputNo);
  e.preventDefault();
}

//Funtion to get input from the input field and print the song accordingly
function getInputAndDisplaySong(inputNo) {
  if (inputNo.value === "") {
    showAlert("Enter the number. Number field should not be empty!", "error");
  } else {
    if (TryParseInt(inputNo.value, 0) === 0) {
      showAlert("Enter a valid number!", "error");
    } else {
      displaySong(parseInt(inputNo.value));
    }
  }
  document.getElementById("input-number").value = "";

  //To remove the displayed result after 40seconds
  setTimeout(function () {
    document.getElementById("result").innerText = "";
  }, 40000);
}

//To parse string value to int
function TryParseInt(str, defaultValue) {
  var returnValue = defaultValue;
  if (str !== null) {
    if (str.length > 0) {
      if (!isNaN(str)) {
        returnValue = parseInt(str);
      }
    }
  }
  return returnValue;
}

//Function to show alert message
function showAlert(message, className) {
  var div = document.getElementById("alert");
  div.innerText = message;
  div.className = className;

  //To remove the alert messages after 5 seconds
  setTimeout(function () {
    div.innerText = "";
    div.className = "";
  }, 3000);
}

//Function to display song in HTML
function displaySong(inputData) {
  generatedSongArray = generateSong(inputData);
  var finalSong = "";
  generatedSongArray.forEach((element) => {
    // finalSong = finalSong + element;
    finalSong = `${finalSong}${element}`;
  });

  var displayElement = document.getElementById("result");
  displayElement.innerText = finalSong;
  showAlert("Song Generated Successfully!", "success");
}

//Function to generate Song Array
function generateSong(num) {
  var songArray = new Array();
  var song = "";
  for (var i = num; i > 0; i--) {
    if (i === 1) {
      song = `${i} bottle of milk on the wall, ${i} bottle of milk. Take one down, pass it around, no more bottles of milk on the wall!`;
      songArray.push(song);
      return songArray;
    }

    if (i != 2) {
      song = `${i} bottles of milk on the wall, ${i} bottles of milk. Take one down, pass it around, ${
        i - 1
      } bottles of milk on the wall. `;
      songArray.push(song);
    }

    if (i === 2) {
      song = `${i} bottles of milk on the wall, ${i} bottles of milk. Take one down, pass it around, ${
        i - 1
      } bottle of milk on the wall. `;
      songArray.push(song);
    }
  }
}
