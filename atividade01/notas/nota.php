<!DOCTYPE html>
<html lang="pt-BR">
<body>
    <h2>Formulário de Notas</h2>
    <form action="calcula_nota.php" method="POST">
        <label for="materia">Matéria:<br>
        <input type="text" id="materia" name="materia" required><br>

        <label for="nota">Nota:<br>
        <input type="number" step="0.1" id="nota" name="nota" min="0" max="10" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>