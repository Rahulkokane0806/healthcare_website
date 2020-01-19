<!DOCTYPE html>
<!-- saved from url=(0051)file:///C:/Users/Aashi%20Mundra/Downloads/quiz.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>depression_quiz</title>
</head>
<body>
			<h2 align="center">depression Quiz</h2>
			<h2 align="center">Let's begin the quiz </h2>

	<div style="margin-left: 450px; margin-right: 200px">
		<form>
  
  <p>1.Little interest or pleasure in doing things?</p>
  <input type="radio" name="a" value="1"> Not at all<br>
  <input type="radio" name="a" value="2"> Little bit<br>
  <input type="radio" name="a" value="3"> Nearly every day


  <p>2.Feeling tired or having little energy?</p>
  <input type="radio" name="b" value="1"> Not at all<br>
  <input type="radio" name="b" value="2"> Little bit<br>
  <input type="radio" name="b" value="3"> Nearly every day

  <p>3.Feeling down, depressed, or hopeless?</p>
  <input type="radio" name="c" value="1"> Not at all<br>
  <input type="radio" name="c" value="2"> Little bit<br>
  <input type="radio" name="c" value="3"> Nearly every day

  <p>4.Trouble falling or staying asleep, or sleeping too much?</p>
  <input type="radio" name="d" value="1"> Not at all<br>
  <input type="radio" name="d" value="2"> Little bit<br>
  <input type="radio" name="d" value="3"> Nearly every day

  <p>5.If you've had any days with issues above, how difficult have these problems made it for you at work, home, school, or with other people?</p>
  <input type="radio" name="e" value="1"> Not at all<br>
  <input type="radio" name="e" value="2"> Little bit<br>
  <input type="radio" name="e" value="3"> Nearly every day


  <p>6.Thoughts that you would be better off dead, or of hurting yourself?</p>
  <input type="radio" name="f" value="1"> Not at all<br>
  <input type="radio" name="f" value="2"> Little bit<br>
  <input type="radio" name="f" value="3"> Nearly every day


  <p>7.Moving or speaking so slowly that other people could have noticed?</p>
  <input type="radio" name="g" value="1" checked=""> Not at all<br>
  <input type="radio" name="g" value="2"> Little bit<br>
  <input type="radio" name="g" value="3"> Nearly every day

  <p>8.Trouble concentrating on things, such as reading the newspaper or watching television?</p>
  <input type="radio" name="h" value="1"> Not at all<br>
  <input type="radio" name="h" value="2"> Little bit<br>
  <input type="radio" name="h" value="3"> Nearly every day

  <p>9.Poor appetite or overeating?</p>
  <input type="radio" name="i" value="1"> Not at all<br>
  <input type="radio" name="i" value="2"> Little bit<br>
  <input type="radio" name="i" value="3"> Nearly every day

  <p>10.Feeling bad about yourself - or that you are a failure or have let yourself or your family down?</p>
  <input type="radio" name="j" value="1"> Not at all<br>
  <input type="radio" name="j" value="2"> Little bit<br>
  <input type="radio" name="j" value="3"> Nearly every day
  <br>
  <br>
   <input type="submit" value="Submit">
	</form>
	</div>

	<?php

$a= $_POST ['a'];
$b= $_POST ['b'];
$c= $_POST ['c'];
$d= $_POST ['d'];
$e= $_POST ['e'];
$f= $_POST ['f'];
$g= $_POST ['g'];
$h= $_POST ['h'];
$i= $_POST ['i'];
$j= $_POST ['j'];
$score=$a+$b+$c+$d+$e+$f+$g+$h+$i+$j;

?>




</body></html>