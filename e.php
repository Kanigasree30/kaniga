<!DOCTYPE HTML>
<html>
<head>
  <title>ONLINE EXAMINATION PORTAL</title>
</head>
<body bgcolor="Pink">

<h1><i>Online Examination Portal</i></h1>
<h4>STUDENT'S DETAILS:</h4>

<form method="post" action="">
  Name: <input type="text" name="name"><br><br>
  Roll No: <input type="text" name="roll"><br><br>
  Department: <input type="text" name="department"><br><br>
  Subject: <input type="text" name="subject"><br><br>

  <h3>"Compulsory attend all the given question. Each question has 1 mark"</h3>
  <h2><i>Choose the following:</i></h2>

  <p>1. What is the chemical symbol for gold?</p>
  <input type="radio" name="q1" value="Ag">Ag<br>
  <input type="radio" name="q1" value="Au">Au<br>
  <input type="radio" name="q1" value="Gd">Gd<br>
  <input type="radio" name="q1" value="Co">Co<br><br>

  <p>2. Which is the largest desert in the world?</p>
  <input type="radio" name="q2" value="Arabian desert">Arabian desert<br>
  <input type="radio" name="q2" value="Gobi">Gobi<br>
  <input type="radio" name="q2" value="Antarctica desert">Antarctica desert<br>
  <input type="radio" name="q2" value="Sahara">Sahara<br><br>

  <p>3. Who wrote Romeo and Juliet?</p>
  <input type="radio" name="q3" value="Charles Dickens">Charles Dickens<br>
  <input type="radio" name="q3" value="Jane Austen">Jane Austen<br>
  <input type="radio" name="q3" value="Mark Twain">Mark Twain<br>
  <input type="radio" name="q3" value="William Shakespeare">William Shakespeare<br><br>

  <p>4. Which musical instrument has 88 keys?</p>
  <input type="radio" name="q4" value="Piano">Piano<br>
  <input type="radio" name="q4" value="Violin">Violin<br>
  <input type="radio" name="q4" value="Guitar">Guitar<br>
  <input type="radio" name="q4" value="Flute">Flute<br><br>

  <p>5. Which country won the FIFA World Cup in 2018?</p>
  <input type="radio" name="q5" value="Brazil">Brazil<br>
  <input type="radio" name="q5" value="Germany">Germany<br>
  <input type="radio" name="q5" value="Argentina">Argentina<br>
  <input type="radio" name="q5" value="France">France<br><br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $department = $_POST['department'];
    $subject = $_POST['subject'];

    // Correct answers
    $answers = array(
        "q1" => "Au",
        "q2" => "Antarctica desert",
        "q3" => "William Shakespeare",
        "q4" => "Piano",
        "q5" => "France"
    );

    $score = 0;
    foreach($answers as $key => $value){
        if(isset($_POST[$key]) && $_POST[$key] == $value){
            $score++;
        }
    }

    echo "<h2>Result</h2>";
    echo "Name: $name <br>";
    echo "Roll No: $roll <br>";
    echo "Department: $department <br>";
    echo "Subject: $subject <br><br>";
    echo "Your Score: $score / 5";
}
?>

</body>
</html>