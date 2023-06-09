<!DOCTYPE html>
<html>
<head>
<title>Bilder Quiz</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>


<!-- Header -->
<table border="1px solid black" align="center">
<tr>
<td>
<img src="images/quiz.png" alt="quiz" width="200px" height="70px" align="left">
</td>
<td>
<div class="typing">Your current Quiz is about: <wbr>The Earth &#127757</div>
</td>
</tr>
</table> 
<br> 

<!-- Quiz with Radio Buttons -->
<table border="1px solid black" align="center">
<tr>
<td>
<center><img src="images/world.gif" alt="World" width="200" height="200"></center>
</td>
</tr>
<tr>	
<td>
<p>What is the name of the imaginary line that divides the world into Western and Eastern hemispheres?</p>
</td>
</tr>
<tr>
<form method="post">
<tr>	
<td>
<label>
<input type="radio" name="antwort_gruppe" value="Wrong">The equator
</label>
</td>
</tr>
<tr>	
<td>
<label>
<input type="radio" name="antwort_gruppe" value="Wrong">The Tropic of Cancer
</label>
</td>
</tr>
<tr>	
<td>
<label>
<input type="radio" name="antwort_gruppe" value="Wrong">The North Pole
</label>
</td>
</tr>
<tr>	
<td>
<label>
<input type="radio" name="antwort_gruppe" value="Right">The prime meridian 
</label>
</td>
</tr>
<tr>	
<td>
<center><input class="shadow__btn" type="submit" value="Submit"></center>
</td>
</tr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<tr>";
  echo "<td>";
  $inhalt = $_POST;
  if (array_key_exists('antwort_gruppe',$inhalt)){
    $answer = $inhalt['antwort_gruppe'];
    echo "<p>Your answer is ". $answer . "</p>";
    // Redirect to next quiz if the answer is correct
    if ($answer === "Right") {
      echo "<p>Going to the next Quiz in <span id='countdown'>6</span> seconds ...</p>";
      echo "<script>
              let count = 6;
              const countdown = setInterval(() => {
                count--;
                document.getElementById('countdown').textContent = count;
                if (count === 0) {
                  clearInterval(countdown);
                  window.location.href = 'color-mixing.php';
                }
              }, 1000);
            </script>";
    }
  } else {
    echo "<p><center>Pick Answer</center></p>";
  }
  echo "</td>";
  echo "</tr>";
}
?>
</table>


<br>
<!-- Buttons -->
<center>
<a href="index.php" class="shadow__btn">Home</a>
<a href="color-mixing.php" class="shadow__btn">Next</a>

</center>

<center>
<h1>Quiz 1/8</h1>
</center>

</body>
</html>