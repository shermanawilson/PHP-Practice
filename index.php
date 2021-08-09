<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

		<!-- <form method"GET">
			<input type="text" name="person">
			<button>SUBMIT</button>
		</form> -->

        <?php

            $name = $_GET['person'];

            echo $name." is a great baby!";

			echo "      ";

			echo strlen("Hi Shy!"); // This produces the string length


        ?>
   
    </body>
</html>