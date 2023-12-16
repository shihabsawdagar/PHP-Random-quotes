<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Random Quotes</title>
  
</head>
<body>


            
    <?php
$quotes = array('The first duty of a man is to think for himself' => '  - Jose Marti','You show me a capitalist, and I"ll show you a bloodsucker' => '   - Malcom X','Freedom in capitalist society always remains about the same as it was in ancient Greek republics: Freedom for slave owners.' => '   - Vladimir Lenin','Our great democracies still tend to think that a stupid man is more likely to be honest than a clever man, and our politicians take advantage of this prejudice by pretending to be even more stupid than nature made them.' => '   - Bertrand Russell','The Revolution introduced me to art, and in turn, art introduced me to the Revolution!'=> '   - Albert Einstein','Let us not seek to satisfy our thirst for freedom by drinking from the cup of bitterness and hatred.'=>'  - Martin Luther King Jr.');

$randomQuotes = array_rand($quotes);

echo $randomQuotes;
echo '<br>' ;
echo '<br>';
echo $quotes[$randomQuotes]
?>

</body>
</html>
