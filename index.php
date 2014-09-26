<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>harjutus-7</title>
</head>
  <body>
  	<?php $count=1;
  		while ($count<=10) {
  			echo $count;
  			$count += 1;
  		}
  	?>

  	<h2>While Loop</h2>
  	<?php $count=10;
  		while ($count<=100) {
  			echo $count . ', ';
  			$count += 1;
  		}
  	?><br>
  	<?php $count=100;
  		while ($count<=1000) {
  			echo $count . ', ';
  			$count += 100;
  		}
  	?>

  	<h3>Infinite while loop</h3>
  	<?php
    /*$count = 1;
	while ($count <= 10) {
        echo $count;
        $count = 1;
    }*/
?>

	<h3>If statement in while loop</h3>
	<?php
    $count = 1;

    while ($count <=10) {
        if ($count == 3) {
           // echo "<script>alert('kolm');</script>";
        } elseif($count == 7) {
           // echo "<script>alert('seitse');</script>";
            
        } else {
        	echo $count;
        }

        $count += 1;
    }
?>
	<h2>For loop</h2>
	<?php 
	for ($count =1; $count<=20; $count+=1) {
		if ($count%2 == 0) {
			echo "Number {$count} on paarisarv";
		} elseif ($count%2 == 1) {
			echo "Number {$count} on paaritu arv";
		}
	}
	?><br>
	
  <h2>Foreach loop</h2>
  <?php $businesses = array("Apple", "IBM", "Dell", "Samsung", "Asus");?>
  <ul>
  <?php foreach ($businesses as $business) :?>
    <li> <?php echo $business ?></li>
  <?php endforeach ?>
  </ul>

  <ul>
  <?php
    $classes = array("Serveripoolsed rakendused", "3D", "Veebikujundus", "Sisuhaldussüsteemid", "Veebitehnoloogiad");
    $count = 1;

    foreach ($classes as $class) {  
      //echo "<li>" . $count . $class . "</li>";
      echo "<li>{$count}. {$class}</li>";
      $count++;
    }
  ?>
    
  </ul>

  <style>
      table {
        border: 1px dotted black;
      }
      .contact {
        color:red;
      }
      .first-column {
        background-color:grey;
      }
    </style>
  <table class="contact">
    <tbody>
      <?php $contact = array(
        "first_name" => "Maile",
        "last_name" => "Rohiväli",
        "e-mail" => "maile.rohivali@khk.ee",
        "age" => "33",
    );

    foreach ($contact as $attribute => $value ) {
      $attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
            echo "
      <tr>
        <td class='first-column'>{$attribute_formatted}</td>
        <td>{$value}</td>
      </tr>";
    };
    ?>
    </tbody>
  </table>

</body>
</html>

