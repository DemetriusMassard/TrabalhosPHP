
<fieldset class="col-sm-6">
	<form action="controller/Cusuario.php" method="post">
		<span class="campo">Nome</span><br> <input name="nome" id="txtnome" class="form-control" type="text"/><br/>
		<span class="campo">Email</span><br> <input name="email" id="txtemail" class="form-control" type="text"/><br/>
		<span class="campo">telefone</span><br> <input name="telefone"class="form-control" id="txttelefone" type"/><br>
		emdereço<br><input name="endereco" class="form-control" id="txtendereco=" type=text"/><br>
		rua<br><input name="rua"  class="form-control" id="txtnome" type="text"/><br>
		cep<br><input name="cep" class="form-control" id="txtrua" type="text"/><br>
		<select name="genero" class="form-control">
			<option value="Masculino">
				Masculino
			</option>
			<option value="Feminino">
				Feminino
			</option>
		</select>
		<br>		
		<input type="submit" value="Enviar"/>
	</form>
</fieldset>