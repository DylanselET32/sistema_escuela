
<div class="card card-body">
    <form action="save_alumno.php" method="POST">
        <div class="form-group">
            <label>Nombre </label>
            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Martina">
        </div>
        <div class="form-group">
            <label>Apellido </label>
            <input type="text" name="apellido" class="form-control" id="exampleInputPassword1" placeholder="Feldman">
        </div>
        <div class="form-group">
            <label>DNI </label>
            <input type="number" name="dni"  min="0" class="form-control" id="exampleInputPassword1" placeholder="45266891">
        </div>
        <div class="form-group">
            <label>Año de cursada</label>
            <input type="number" name="año" min="1" max="7"class="form-control" id="exampleInputPassword1" placeholder="5">
        </div>
        <br>
        <input type="submit" name="save_alumno" class="btn btn-success btn-block" value="GUARDAR">
    </form>
</div>