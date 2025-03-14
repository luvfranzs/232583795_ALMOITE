<?php
$a = 15;
$b = 7;

echo "Sum: " . ($a + $b) . "\n";
echo "Difference: " . ($a - $b) . "\n";
echo "Product: " . ($a * $b) . "\n";
echo "Quotient: " . ($a / $b) . "\n";
?>

<?php
$number = 5;

if ($number % 2 == 0) {
    echo "The number $number is even.\n";
} else {
    echo "The number $number is odd.\n";
}
?>

<?php
$number = 5;

if ($number > 0) {
    echo "The number $number is positive.\n";
} elseif ($number < 0) {
    echo "The number $number is negative.\n";
} else {
    echo "The number $number is zero.\n";
}
?>

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo "$i\n";
    }
}
?>

<?php
$a = 0;
$b = 1;
$counter = 0;

while ($counter < 10) {
    $c = $a + $b;
    if ($c % 2 == 0) {
        echo "$c\n";
    }
    $a = $b;
    $b = $c;
    $counter++;
}
?>

<?php
function greet($name) {
    return "Hello, $name!\n";
}

echo greet("John");
?>

<?php
function square($num) {
    return $num * $num;
}

echo square(5) . "\n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <form action="process_form.php" method="POST">
        <label for="textInput">Enter some text:</label>
        <input type="text" id="textInput" name="userText">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted text
    $submittedText = $_POST['userText'];
    echo "You submitted: $submittedText\n";
}
?>
