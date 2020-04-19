<div class="container-fluid">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>*** Gwiazdki Wałowiczów dla Najlepszych Pizzerii We Wrocławiu ***</h2>
    <fieldset>
      <div class="card" style="width: 50rem;">
        <div class="card-body">
          <h5 class="card-title">Instrukcja</h5>
          <p class="card-text">Instrukcja: każdy może przydzielić po jednej ocenie (***, ** oraz *), a więc można maksymalnie ocenić 3 restauracje.</p>
          <p class="card-text">Trzeba przydzielić co najmniej jedną gwiazdkę co najmniej jednej pizzerii aby rekord został dodany.</p>
          <a href="results.php" class="card-link">Wyniki dotychczasowe</a>
        </div>
      </div>
      <div style="margin-top: 2rem;">
        <p><label for="user" style="width: 5%">Imię</label>
          <input type="text" name="user" value="<?php echo $user; ?>"></p>
        <p><?php echo $nameErr; ?></p>
        <p>
      </div>
      <label for="bosco">Bosco</label><br />
      <select name="bosco">
        <option value="0"> </option>
        <option value="1">*</option>
        <option value="2">**</option>
        <option value="3">***</option>
      </select>
      </p>
      <p>
        <label for="bube">Bube</label><br />
        <select name="bube">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="iggy">Iggy</label><br />
        <select name="iggy">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="mania">Mania Smaków</label><br />
        <select name="mania">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="margherita">Margherita</label><br />
        <select name="margherita">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="muzyczna">Muzyczna</label><br />
        <select name="muzyczna">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="niezly">Niezły Dym</label><br />
        <select name="niezly">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="nova">Nova</label><br />
        <select name="nova">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="ogien">Ogień</label><br />
        <select name="ogien">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="oliwa">Oliwa i ogień</label><br />
        <select name="oliwa">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="pipi">Pi</label><br />
        <select name="pipi">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="piec">Piec na Szewskiej</label><br />
        <select name="piec">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="pany">Pizza Pany</label><br />
        <select name="pany">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="pizzaso">Pizzaso</label><br />
        <select name="pizzaso">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="portofino">Portofino</label><br />
        <select name="portofino">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="quattro">Quattro gusti</label><br />
        <select name="quattro">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="si">Si</label><br />
        <select name="si">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="tutti">Tutti Santi</label><br />
        <select name="tutti">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <label for="vaffa">Vaffa Napoli</label><br />
        <select name="vaffa">
          <option value="0"> </option>
          <option value="1">*</option>
          <option value="2">**</option>
          <option value="3">***</option>
        </select>
      </p>
      <p>
        <input class="btn btn-primary" type="Submit" value="Wyślij"></input>
    </fieldset>
  </form>
</div>