	
		<?php
		
			
			$frameworks = array(
					"sy" => "Symfony" ,
					"ci" => "CodeIgniter" ,
					"fphp" => "FuelPHP" ,
					"cphp" => "CakePHP" ,
					"lv" => "Laravel"
				) ;
				
	
	$frameSelectionnees = $_GET['framework'] ;
          ?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Formulaire</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css" >
    </head>
     
    <body>

		<div class="**"></div>
		<div class="background">
                 <img src="background-php.jpg">
        </div>
             
		<div class="condidature">
			<h1> Votre candidature </h1>
			
			<table>
				<tr>
				<td> Civilité  </td>
				<td> <?php echo  $_GET["civilite"]  ;  ?> </td>
				</tr>
				
				<tr>
				<td> Nom  </td>
				<td> <?php echo  $_GET["nom"] ; ?> </td>
				</tr>
				
				<tr>
				<td> Prénom  </td>
				<td> <?php echo  $_GET["prenom"] ; ?> </td>
				</tr>
				
				<tr>
				<td> Date de naissance  </td>
				<td> <?php echo  $_GET["anniversaire"] ; ?> </td>
				</tr>
				
				<tr>
				<td> Téléphone  </td>
				<td> <?php echo  $_GET["numTel"] ; ?> </td>
				</tr>
				
				<tr>
				<td> Adresse électronique  </td>
				<td> <?php echo  $_GET["mail"] ; ?> </td>
				</tr>
				
				<tr>
				<td> Niveau en PHP  </td>
				<td> <?php echo  $_GET["Niveau"] ; ?> </td>
				</tr>
				
				<tr>
					<ul>
				<td> Frameworks PHP  </td>
				<td> <?php
							foreach( $frameSelectionnees as $uneframe){
										echo  "<li>" . $frameworks[ $uneframe] . "</li>"  ;
									} ?> </td>
				</ul>
				</tr>
				
				<tr>
				<td> Moi  </td>
				<td> <?php echo  $_GET["commentaire"] ; ?> </td>
				</tr>
			
			</table>
			

		</div>
		
	</body>
</html>


