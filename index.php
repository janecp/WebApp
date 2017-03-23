<!DOCTYPE html>
<html>
<head>
	<title>JSON PHP</title>
	<script languange="javascript" >
	</script>

</head>
<body>
	<?php

		
         $arr = array( 
            array (
     		   "name" => 'WebApp',
               "catalog" => 'IT',	
               "code" => '341',
               "grade" => 'C' 
            ),
            
           array (
               "name" => 'Philosophy',
               "catalog" => 'HUMA',
               "code" => '101',
               "grade" => 'B-'
            ),

            array (
               "name" => 'Philosophy 2',
               "catalog" => 'HUMA',	
               "code" => '111',
               "grade" => 'B-'
            ),

            array (
               "name" => 'Physics',
               "catalog" => 'NSCI',	
               "code" => '111',
               "grade" => 'B-'
            ),

            array (
               "name" => 'Accounting 1',
               "catalog" => 'ACTG',	
               "code" => '101',
               "grade" => 'B'
            ),

            array (
               "name" => 'Physical Education',
               "catalog" => 'PHYED',	
               "code" => '111',
               "grade" => 'A'
            ),

            array (
               "name" => 'Database',
               "catalog" => 'CS',	
               "code" => '341',
               "grade" => 'B-'
            ),

            array (
               "name" => 'Trigonometry',
               "catalog" => 'MATH',	
               "code" => '213',
               "grade" => 'B'
            ),
           	

         );

		$json = json_encode($arr); 
		
	?>

	<script language="javascript" type="text/javascript">

		var data = JSON.parse( '<?php echo $json; ?>' );

			data.push({'name' : 'English', 'catalog' : 'ENGL', 'code' : '211', 'grade' : 'B'});
			data.push({'name' : 'Operating System', 'catalog' : 'IT', 'code' : '342', 'grade' : 'B'});
			data.push({'name' : 'Tech Writing', 'catalog' : 'ENGL', 'code' : '211', 'grade' : 'B'});



		document.writeln("<table border ='1'>");
		document.writeln("<tr><td>Subject</td><td>Catalog</td><td>Code</td><td>Grade</td></tr>" );
		for(x = 0; data.length > 0; x++){
			document.writeln("<tr>");
			document.writeln("<td>" + data[x].name + "</td>");
			document.writeln("<td>" + data[x].catalog + "</td>");
			document.writeln("<td>" + data[x].code + "</td>");
			document.writeln("<td>" + data[x].grade + "</td>");
			document.writeln("</tr>");

		}
		document.writeln("</table>");

</script>
</body>
</html>