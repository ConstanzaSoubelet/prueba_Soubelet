
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de postulación- Soubelet</title>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/validar.js"></script>
</head>

<body>
    <div>
        <form action="conexion.php" method="POST" onsubmit="return validar();">
        <div>
            <table>
                <h1>FORMULARIO DE VOTACIÓN: </h1>
                <tr>
                    <td>Nombre y Apellido</td>
                    <td><input type="text" id="nombre" name="nombre" required></td>
                </tr>
                <tr>
                    <td>Alias</td>
                    <td><input type="text" id="alias" name="alias" minlength="5" required ></td>
                </tr>
                <tr>
                    <td>RUT</td>
                    <td><input type="text" id="rut" name="rut" oninput="validaRut(this)" required></td>
                <tr>
                    <td>Email</td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td>
                    <label>Región</label>
                    <select id="region" name="region">
                        <option value="0">Selecciona una opcion</option>
                        <option value="1">Tarapacá</option>
                        <option value="2">Bio-bío</option>
                    </select>
                    <br>
                    <div id="comuna"></div>
                    </td>
                </tr>
<script type="text/javascript">
	$(document).ready(function(){
		$('#region').val(1);
		recargarLista();

		$('#region').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"region=" + $('#region').val(),
			success:function(r){
				$('#comuna').html(r);
			}
		});
	}
</script>               
                
                <tr>
                    <td>Candidato</td>
                    <td> <select name="candidato">
                        <option value="rock Americano">Rock Americano</option>
                        <option value="rock Británico">Rock Británico</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Como se enteró de Nosotros</td>
                    <td>

                        <input type="checkbox" name="seleccion[]" value="web" />
                        <label>Web</label>

                        <input type="checkbox" name="seleccion[]" value="tv"/>
                        <label>TV</label>

                        <input type="checkbox" name="seleccion[]" value="rs"/>
                        <label>Redes Sociales</label>

                        <input type="checkbox" name="seleccion[]" value="amigo" />
                        <label>Amigo</label>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" method="POST"></td>
                </tr>
            </table>
        </div>
        </form>
    </div>
</body>

</html>


