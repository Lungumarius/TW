<!doctype html>
<div class="forms">
	<?php
	$link = mysqli_connect("localhost", "root", "", "magazin_online");

	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 ?>
    <form class="register1" action="../php/login.php" method="post">
            <div class="form-group row" >
                <h1 style="margin-left: 10vh">Login</h1>

            </div>
        <br>
            <div class="form-group row">
                <label for="mail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3">
                    <input name="mail2" type="text" class="form-control" id="mail" placeholder="Mail" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-3">
                    <input name="parola2" type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>

        <button name="register11" type="submit" id="register1" class="btn btn-primary" >Submit</button>
    </form>
    <form class="register2" action="../php/register.php" method="post">
        <div class="form-group row">
            <h1 style="margin-left: 15vh">Register</h1>
        </div>
        <br>
        <div class="form-group row">
            <label for="nume" class="col-sm-3 col-form-label">Nume</label>
            <div class="col-sm-4">
                <input  name="nume" type="text"  class="form-control" id="nume" placeholder="Nume">
            </div>
        </div>
        <div class="form-group row">
            <label for="prenume" class="col-sm-3 col-form-label">Prenume</label>
            <div class="col-sm-4">
                <input name="prenume" type="text"  class="form-control" id="prenume" placeholder="Prenume">
            </div>
        </div>
        <div class="form-group row">
            <label for="mail3" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-4">
                <input name="mail" type="email"  class="form-control" id="mail3" placeholder="Mail">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword2" class="col-sm-3 col-form-label">Parola</label>
            <div class="col-sm-4">
                <input name="parola" type="password" class="form-control" id="inputPassword2" placeholder="Parola">
            </div>
        </div>
        <div class="form-group row">
            <label for="numar" class="col-sm-3 col-form-label">Numar de telefon</label>
            <div class="col-sm-4">
                <input name="telefon" type="number" class="form-control" id="numar" placeholder="Numar de telefon">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputState" class="col-sm-3 col-form-label" > Oras</label>
            <div class="col-sm-4">
            <select name="oras" id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option value="Alba">Alba</option>
                <option value="Arad">Arad</option>
                <option value="Arges">Arges</option>
                <option value="Bacau">Bacau</option>
                <option value="Bihor">Bihor</option>
                <option value="Bistrita Nasaud">Bistrita Nasaud</option>
                <option value="Botosani">Botosani</option>
                <option value="Brasov">Brasov</option>
                <option value="Braila">Braila</option>
                <option value="Bucuresti">Bucuresti</option>
                <option value="Buzau">Buzau</option>
                <option value="Caras Severin">Caras Severin</option>
                <option value="Calarasi">Calarasi</option>
                <option value="Cluj">Cluj</option>
                <option value="Constanta">Constanta</option>
                <option value="Covasna">Covasna</option>
                <option value="Dambovita">Dambovita</option>
                <option value="Dolj">Dolj</option>
                <option value="Galati">Galati</option>
                <option value="Giurgiu">Giurgiu</option>
                <option value="Gorj">Gorj</option>
                <option value="Harghita">Harghita</option>
                <option value="Hunedoara">Hunedoara</option>
                <option value="Ialomita">Ialomita</option>
                <option value="Iasi">Iasi</option>
                <option value="Ilfov">Ilfov</option>
                <option value="Maramures">Maramures</option>
                <option value="Mehedinti">Mehedinti</option>
                <option value="Mures">Mures</option>
                <option value="Neamt">Neamt</option>
                <option value="Olt">Olt</option>
                <option value="Prahova">Prahova</option>
                <option value="Satu Mare">Satu Mare</option>
                <option value="Salaj">Salaj</option>
                <option value="Sibiu">Sibiu</option>
                <option value="Suceava">Suceava</option>
                <option value="Teleorman">Teleorman</option>
                <option value="Timis">Timis</option>
                <option value="Tulcea">Tulcea</option>
                <option value="Vaslui">Vaslui</option>
                <option value="Valcea">Valcea</option>
                <option value="Vrancea">Vrancea</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="adresa" class="col-sm-3 col-form-label">Adresa</label>
            <div class="col-sm-4">
                <input name="adresa" type="text" class="form-control" id="adresa" placeholder="Adresa">
            </div>
        </div>

        <button type="submit" id="register2" class="btn btn-primary" >Submit</button>
    </form>

</div>
</html>
