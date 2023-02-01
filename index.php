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
  <main class="mx-auto p-5 bg-slate-100 min-h-screen">
    <h1 class="text-3xl font-bold text-center uppercase mb-5">5 empleados de una empresa - Formulario</h1>
    <form class="grid grid-cols-1 md:grid-cols-3 gap-5" action="./result.php" method="POST">
      <div class="flex flex-col gap-1 p-5 border rounded-lg bg-white shadow">
        <h2 class="text-lg font-bold uppercase text-center">Empleado 1</h2>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="fullname1">Nombre y Apellido</label>
          <input class="rounded-lg shadow border-slate-400" required type="text" name="fullname[]" id="fullname1">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="age1">Edad de la persona</label>
          <input class="rounded-lg shadow border-slate-400" required type="number" name="age[]" id="age1">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="civilStatu1s">Estado Civil</label>
          <select class="rounded-lg shadow border-slate-400" name="civilStatus[]" id="civilStatus1">
            <option value="single" default>Soltero(a)</option>
            <option value="married">Casado(a)</option>
            <option value="widowed">Viduo(a)</option>
          </select>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="man1">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender1" id="man1" value="man" checked>
            Hombre
          </label>
          <label class="font-semibold text-gray-600" for="woman1">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender1" id="woman1" value="woman">
            Mujer
          </label>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="salary1">Sueldo</label>
          <select class="rounded-lg shadow border-slate-400" name="salary[]" id="salary1">
            <option value="lowSalary" default>Menos de 1000Bs</option>
            <option value="mediumSalary">Entre 1000 y 2500Bs</option>
            <option value="highSalary">Más de 2500Bs</option>
          </select>
        </div>
      </div>
      <div class="flex flex-col gap-1 p-5 border rounded-lg bg-white shadow">
        <h2 class="text-lg font-bold uppercase text-center">Empleado 2</h2>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="fullname2">Nombre y Apellido</label>
          <input class="rounded-lg shadow border-slate-400" required type="text" name="fullname[]" id="fullname2">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="age2">Edad de la persona</label>
          <input class="rounded-lg shadow border-slate-400" required type="number" name="age[]" id="age2">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="civilStatus2">Estado Civil</label>
          <select class="rounded-lg shadow border-slate-400" name="civilStatus[]" id="civilStatus2">
            <option value="single" default>Soltero(a)</option>
            <option value="married">Casado(a)</option>
            <option value="widowed">Viduo(a)</option>
          </select>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="man2">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender2" id="man" value="man" checked>
            Hombre
          </label>
          <label class="font-semibold text-gray-600" for="woman2">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender2" id="woman2" value="woman">
            Mujer
          </label>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="salary2">Sueldo</label>
          <select class="rounded-lg shadow border-slate-400" name="salary[]" id="salary2">
            <option value="lowSalary" default>Menos de 1000Bs</option>
            <option value="mediumSalary">Entre 1000 y 2500Bs</option>
            <option value="highSalary">Más de 2500Bs</option>
          </select>
        </div>
      </div>
      <div class="flex flex-col gap-1 p-5 border rounded-lg bg-white shadow">
        <h2 class="text-lg font-bold uppercase text-center">Empleado 3</h2>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="fullname3">Nombre y Apellido</label>
          <input class="rounded-lg shadow border-slate-400" required type="text" name="fullname[]" id="fullname3">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="age3">Edad de la persona</label>
          <input class="rounded-lg shadow border-slate-400" required type="number" name="age[]" id="age3">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="civilStatus3">Estado Civil</label>
          <select class="rounded-lg shadow border-slate-400" name="civilStatus[]" id="civilStatus3">
            <option value="single" default>Soltero(a)</option>
            <option value="married">Casado(a)</option>
            <option value="widowed">Viduo(a)</option>
          </select>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="man3">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender3" id="man3" value="man" checked>
            Hombre
          </label>
          <label class="font-semibold text-gray-600" for="woman3">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender3" id="woman3" value="woman">
            Mujer
          </label>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="salary3">Sueldo</label>
          <select class="rounded-lg shadow border-slate-400" name="salary[]" id="salary3">
            <option value="lowSalary" default>Menos de 1000Bs</option>
            <option value="mediumSalary">Entre 1000 y 2500Bs</option>
            <option value="highSalary">Más de 2500Bs</option>
          </select>
        </div>
      </div>
      <div class="flex flex-col gap-1 p-5 border rounded-lg bg-white shadow">
        <h2 class="text-lg font-bold uppercase text-center">Empleado 4</h2>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="fullname4">Nombre y Apellido</label>
          <input class="rounded-lg shadow border-slate-400" required type="text" name="fullname[]" id="fullname4">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="age4">Edad de la persona</label>
          <input class="rounded-lg shadow border-slate-400" required type="number" name="age[]" id="age4">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="civilStatus4">Estado Civil</label>
          <select class="rounded-lg shadow border-slate-400" name="civilStatus[]" id="civilStatus4">
            <option value="single" default>Soltero(a)</option>
            <option value="married">Casado(a)</option>
            <option value="widowed">Viduo(a)</option>
          </select>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="man4">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender4" id="man4" value="man" checked>
            Hombre
          </label>
          <label class="font-semibold text-gray-600" for="woman4">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender4" id="woman4" value="woman">
            Mujer
          </label>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="salary4">Sueldo</label>
          <select class="rounded-lg shadow border-slate-400" name="salary[]" id="salary4">
            <option value="lowSalary" default>Menos de 1000Bs</option>
            <option value="mediumSalary">Entre 1000 y 2500Bs</option>
            <option value="highSalary">Más de 2500Bs</option>
          </select>
        </div>
      </div>
      <div class="flex flex-col gap-1 p-5 border rounded-lg bg-white shadow">
        <h2 class="text-lg font-bold uppercase text-center">Empleado 5</h2>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="fullname5">Nombre y Apellido</label>
          <input class="rounded-lg shadow border-slate-400" required type="text" name="fullname[]" id="fullname5">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="age5">Edad de la persona</label>
          <input class="rounded-lg shadow border-slate-400" required type="number" name="age[]" id="age5">
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="civilStatus5">Estado Civil</label>
          <select class="rounded-lg shadow border-slate-400" name="civilStatus[]" id="civilStatus5">
            <option value="single" default>Soltero(a)</option>
            <option value="married">Casado(a)</option>
            <option value="widowed">Viduo(a)</option>
          </select>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="man5">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender5" id="man5" value="man" checked>
            Hombre
          </label>
          <label class="font-semibold text-gray-600" for="woman5">
            <input class="rounded-lg shadow border-slate-400" required type="radio" name="gender5" id="woman5" value="woman">
            Mujer
          </label>
        </div>
        <div class="flex flex-col">
          <label class="font-semibold text-gray-600" for="salary5">Sueldo</label>
          <select class="rounded-lg shadow border-slate-400" name="salary[]" id="salary5">
            <option value="lowSalary" default>Menos de 1000Bs</option>
            <option value="mediumSalary">Entre 1000 y 2500Bs</option>
            <option value="highSalary">Más de 2500Bs</option>
          </select>
        </div>
      </div>

      <button class="col-span-full bg-blue-500 border rounded-lg p-2 font-bold uppercase text-white shadow" type="submit" name="register">Calcular</button>
    </form>
  </main>
</body>

</html>