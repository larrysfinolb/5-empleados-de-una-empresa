<?php
// Variable bandera para determinar si ocurre algun error o no.
$error = false;

// Variables necesarias para realizar todos los calculos.
$femaleEmployees = 0;
$highSalaryMarriedMen = 0;
$mediumHighSalaryWidowedWomen = 0;
$averageAgeMen = 0;

// Verificamos que todas las variables hayan sido pasadas por POST.
if (
  isset($_POST["register"]) && isset($_POST["fullname"]) && isset($_POST["age"]) && isset($_POST["civilStatus"]) &&
  isset($_POST["gender1"]) && isset($_POST["gender2"]) && isset($_POST["gender3"]) && isset($_POST["gender4"]) &&
  isset($_POST["gender5"]) && isset($_POST["salary"])
) {
  $fullname = $_POST["fullname"];
  $age = $_POST["age"];
  $civilStatus = $_POST["civilStatus"];
  $gender = [$_POST["gender1"], $_POST["gender2"], $_POST["gender3"], $_POST["gender4"], $_POST["gender5"]];
  $salary = $_POST["salary"];

  // Verificamos que ninguna de las variables (Array) esten vacias.
  if (!empty($fullname) && !empty($age) && !empty($civilStatus) && !empty($gender) && !empty($salary)) {

    // Verificamos que los datos en cada posicion del Array fullname sean un String.
    foreach ($fullname as $value) {
      if (!is_string($value)) {
        $error = true;
        break;
      }
    }
    // Verificamos que los datos en cada posicion del Array age sean un Int.
    foreach ($age as $value) {
      if (!is_numeric($value)) {
        $error = true;
        break;
      }
    }
    // Verificamos que los datos en cada posicion del Array civilStatus sean un correcto.
    foreach ($civilStatus as $value) {
      if ($value !== "married" && $value !== "single" && $value !== "widowed") {
        $error = true;
        break;
      }
    }
    // Verificamos que los datos en cada posicion del Array gender sean correcto.
    foreach ($gender as $value) {
      if ($value !== "man" && $value !== "woman") {
        $error = true;
        break;
      }
    }
    // Verificamos que los datos en cada posicion del Array salary sean correcto.
    foreach ($salary as $value) {
      if ($value !== "lowSalary" && $value !== "mediumSalary" && $value !== "highSalary") {
        $error = true;
        break;
      }
    }

    // Verificamos que no haya ocurrido ningun error que ninguna de las verificaciones anteriores.
    if (!$error) {
      // Calculamos el total de empleados del sexo femenino.
      foreach ($gender as $value) {
        if ($value === "woman") $femaleEmployees += 1;
      }

      // Calculamos el total de hombres casados que ganan más de 2500 Bs
      foreach ($gender as $key => $value) {
        if ($value === "man" && $civilStatus[$key] === "married" && $salary[$key] === "highSalary") $highSalaryMarriedMen += 1;
      }

      // Calculamos el total de mujeres viudas que ganan más de 1000 Bs
      foreach ($gender as $key => $value) {
        if ($value === "woman" && $civilStatus[$key] === "widowed" && $salary[$key] !== "lowSalary") $mediumHighSalaryWidowedWomen += 1;
      }

      // Calculamos la edad promedio de los hombres.
      $employeesMan = 0;
      foreach ($gender as $key => $value) {
        if ($value === "man") {
          $employeesMan += 1;
          $averageAgeMen += $age[$key];
        }
      }
      if ($employeesMan === 0) {
        $averageAgeMen = "No hay hombres en la lista.";
      } else {
        $averageAgeMen = round($averageAgeMen / $employeesMan);
      }
    }
  } else {
    $error = true;
  }
} else {
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5 empleados de una empresa</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body class="font-mono">
  <main class="mx-auto p-5 bg-slate-100 min-h-screen flex flex-col justify-center align-center gap-5">
    <h1 class="text-3xl font-bold text-center uppercase">5 empleados de una empresa - Resultados</h1>
    <?php
    if ($error) {
    ?>
      <p class="text-lg font-bold uppercase text-center">Los calculos no han podido llevarse a cabo, por favor, vaya y complete <a class="underline text-blue-500" href="./index.php">el formulario</a></p>

    <?php
    } else {
    ?>
      <ul class="list-disc list-inside w-fit">
        <li>Total de empleados del sexo femenino: <span class="font-bold"><?php echo $femaleEmployees ?></span></li>
        <li>Total de hombres casados que ganan más de 2500 Bs: <span class="font-bold"><?php echo $highSalaryMarriedMen ?></span></li>
        <li>Total de mujeres viudas que ganan más de 1000 Bs: <span class="font-bold"><?php echo $mediumHighSalaryWidowedWomen ?></span></li>
        <li>Edad promedio de los hombres: <span class="font-bold"><?php echo $averageAgeMen ?></span></li>
      </ul>
      <a class="bg-blue-500 border rounded-lg p-2 font-bold uppercase text-white shadow text-center" href="./index.php">Ir de nuevo al formulario</a>
    <?php
    }
    ?>
  </main>
</body>

</html>