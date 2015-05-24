<?php
include_once "../common/header.php";
include_once "../common/session.start.php";
?>
<div id="content">
	<form name="editentrenament" action="../post/post.editentrenament.php" method="POST">
		Data
		<input type="text" name="Data"
		<?php
		if (isset($_SESSION["POST"]["Data"])) {
			echo " value=\"" . $_SESSION["POST"]["Data"] . "\"";
		}
		?>
		>
		<br>
		<table>
			<tr>
				<td> Equip
				<input type="text" name="Equip"
				<?php
				if (isset($_SESSION["POST"]["Equip"])) {
					echo " value=\"" . $_SESSION["POST"]["Equip"] . "\"";
				}
				?>
				>
				</td>
				<td> Macrocicle
				<input type="text" name="Macrocicle"
				<?php
				if (isset($_SESSION["POST"]["Macrocicle"])) {
					echo " value=\"" . $_SESSION["POST"]["Macrocicle"] . "\"";
				}
				?>
				>
				</td>
			</tr>
			<tr>
				<td> Categoria
				<input type="text" name="Categoria"
				<?php
				if (isset($_SESSION["POST"]["Categoria"])) {
					echo " value=\"" . $_SESSION["POST"]["Categoria"] . "\"";
				}
				?>
				>
				</td>
				<td> Mesocicle
				<input type="text" name="Mesocicle"
				<?php
				if (isset($_SESSION["POST"]["Mesocicle"])) {
					echo " value=\"" . $_SESSION["POST"]["Mesocicle"] . "\"";
				}
				?>
				>
				</td>
			</tr>
			<tr>
				<td> Temporada
				<input type="text" name="Temporada"
				<?php
				if (isset($_SESSION["POST"]["Temporada"])) {
					echo " value=\"" . $_SESSION["POST"]["Temporada"] . "\"";
				}
				?>
				>
				</td>
				<td> Microcicle
				<input type="text" name="Microcicle"
				<?php
				if (isset($_SESSION["POST"]["Microcicle"])) {
					echo " value=\"" . $_SESSION["POST"]["Microcicle"] . "\"";
				}
				?>
				>
				</td>
			</tr>
		</table>
		<br>
		Objectius
		<br>
		<input type="text" name="Objectius"
		<?php
		if (isset($_SESSION["POST"]["Objectius"])) {
			echo " value=\"" . $_SESSION["POST"]["Objectius"] . "\"";
		}
		?>
		>
		<br>
		Material
		<br>
		<input type="text" name="Material"
		<?php
		if (isset($_SESSION["POST"]["Material"])) {
			echo " value=\"" . $_SESSION["POST"]["Material"] . "\"";
		}
		?>
		>
		<br>
		Exercicis
		<table>
			<tr>
				<td>Part 1</td>
				<td>
				<table>
					<tr>
						<td>Durada</td><td>Nom</td><td>Explicació</td><td>Consigna</td>
					</tr>
					<?php
					include_once "../db/CtrlDB.php";
					$ctrlDB = new CtrlDB;
					foreach ($_POST as $key => $value) {
						if ($value == "Seleccionar") {
							$IDex = (int)$key;
						}
					}
					if (isset($IDex)) {
						$_SESSION['exercicis'] = array($IDex);
						$ex = $ctrlDB -> getExercici($IDex);
						include "../collections/exercici_list_item.php";
					}
					?>
				</table></td>
				<td>
				<input type="submit" name="afegir" value="Afegir exercici" />
				</td>
			</tr>
			<tr>
				<td>Part 1</td>
				<td></td><td>
				<input type="submit" name="afegir" value="Afegir exercici" />
				</td>
			</tr>
		</table>
		<input type="submit" name="guardar" value="Guardar">
	</form>
</div>
<?php
include_once "../common/footer.php";
?>
