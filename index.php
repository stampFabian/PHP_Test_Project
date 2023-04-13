<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale="1.0">
		<title>
			Test
		</title>
		<link rel="stylesheet" href="styles/css/bootstrap.css" />
		<link rel="stylesheet" href="styles/style.css" />
	</head>
	<body>
		<div class="container-fluid">
			 <div class="row bg-primary">
				<div class="row">
				  <p>Header</p>
				</div>
				<div class="col-2 bg-secondary">
				    <p>Menue</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="<?php $_SERVER['PHP_SELF']; ?>?menu=1">Formulardaten</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php $_SERVER['PHP_SELF']; ?>?menu=2">Array</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php $_SERVER['PHP_SELF']; ?>?menu=3">Formular</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php $_SERVER['PHP_SELF']; ?>?menu=4">Text</a>
                        </li>
                    </ul>
				</div>
				<div class="col-9 bg-light">

                    <?php
                    if(isset($_GET['menu'])){
                        $menu = $_GET['menu'];
                    }
                    else{
                        $menu = 0;
                    }
                    switch ($menu){
                        case 0:
                            echo "Willkommen, Gast";
                            break;

                        case 1:
                            echo "Es folgt die Überschrift:";
                            echo "<br />";

                            echo "<h1>Formulardaten</h1>";


                            if(isset($_POST["btnSubmit"])){
                                echo "Vorname: ".$_POST["vn"];
                                echo "<br />";
                                echo "Nachname: ".$_POST["nn"];
                                echo "<br />";
                                echo "Geburtsdatum: ".$_POST["gebdat"];
                                echo "<br />";
                                echo "Email: ".$_POST["mail"];
                                echo "<br />";
                                echo "Passwort: ".$_POST["pw"];
                                echo "<br />";
                                if (isset($_POST["cb"]) && $_POST["cb"] == true){
                                    echo "<p>Checkbox: angekreuzt</p>";
                                }
                                else{
                                    echo "<p>Checkbox: nicht angekreuzt</p>";
                                }
                            }
                            else{
                                echo "Keine Formulardaten vorhanden!";
                            }

                        case 2:
                            echo "<pre>";
                            print_r($_POST);
                            echo "</pre>";
                            break;

                        case 3:
                            ?>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" id="daten" name="daten">
                                <div class="mb-3">
                                    <label for="vorname" class="form-label">Vorname</label>
                                    <input type="text" class="form-control" id="vorname" name="vn" aria-describedby="emailHelp">
                                    <div id="vornameHelp" class="form-text">Bitte geben Sie Ihren Vornamen ein!</div>
                                </div>


                                <div class="mb-3">
                                    <label for="nachname" class="form-label">Nachname</label>
                                    <input type="text" class="form-control" id="vorname" name="nn" aria-describedby="emailHelp">
                                    <div id="nachnameHelp" class="form-text">Bitte geben Sie Ihren Nachnamen ein!</div>
                                </div>

                                <div class="mb-3">
                                    <label for="geburtsdatum" class="form-label">Geburtsdatum</label>
                                    <input type="date" class="form-control" id="geburtsdatum"  name="gebdat" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="pw">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="cb">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary" id="btnSubmit" name="btnSubmit">Submit</button>
                                <button type="reset" class="btn btn-secondary">zurücksetzen</button>
                            </form>
                            <?php
                            break;

                        case 4:
                            include("pages/text.html");
                            break;
                    }
                    ?>

				</div>
				<div class="col-1 bg-info">
				  <p>Werbung</p>
				</div>
				<div class="row bg-success">
				  <p>Footer</p>
				</div>
			  </div>
			</div>
		
		<!--
		<div id="container">
		
			<div id="kopfzeile">
			<p>Kopfzeile</p>
			</div>

			<div id="menue">
			<p>Menü</p>
			</div>

			<div id="inhalt">
			<p>Inhalt</p>
			<p></p>
			<p></p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
			<p>Aenean massa.</p>
			<p></p>
			<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<p></p>
			<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
			<p></p>
			<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
			<p></p>
			<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
			<p></p>
			<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
			<p></p>
			<p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
			<p></p>
			<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
			<p></p>
			<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
			<p></p>
			<p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
			<p></p>
			<p>Nam eget dui. Etiam rhoncus.</p>
			<p></p>
			<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
			<p></p>
			<p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
			<p></p>
			<p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
			</div>

			<div id="werbung">
			<p>Werbung</p>
			</div>

			<div id="fusszeile">
			<p>Fusszeile</p>
			</div>
			
		</div>
		-->
	</body>
</html>