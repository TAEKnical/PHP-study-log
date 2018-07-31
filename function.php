<!doctype html>
<html>
<head>
  <meta charset = "utf-8">
  <title>function</title>
</head>
<body>
  <h1>function</h1>
  <?php
    $str =  "For variables in computer science, gimozzisee Variable
    <br><br>
     (computer science). For other uses, see Variable
      (disambiguation). In elementary mathematics, a variable is a symbol, gimozzi commonly an alphabetic character, that represents a number, called the value of the variable, which is either arbitrary, not fully specified, or unknown. Making algebraic computations with variables as if they were explicit numbers allows one to solve a range of problems in a single computation. A typical example is the quadratic formula, which allows one to solve every quadratic equation by simply substituting the numeric values of the coefficients of the given equation to the variables that gimozzi represent them.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
   ?>

    <h2>nl2br</h2>
    <?php
    $str2 =  "For variables in computer science, gimozzisee Variable
    (computer science). For other uses, see Variable
      (disambiguation). In elementary mathematics, a variable is a symbol,
       gimozzi commonly an alphabetic character, that represents a number,
       called the value of the variable, which is either arbitrary, not fully
        specified, or unknown. Making algebraic computations with variables as
         if they were explicit numbers allows one to solve a range of problems
          in a single computation. A typical example is the quadratic formula
          , which allows one to solve every quadratic equation by simply
          substituting the numeric values of the coefficients of the given
          equation to the variables that gimozzi represent them.";

    echo nl2br($str2);
     ?>
 </body>
</html>
