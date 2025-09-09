<?php
$conexion = new mysqli("localhost", "root", "", "bybpro");
if ($conexion->connect_error) die("Error de conexión");

// Obtener testimonios
$testimonios = [];
$resultado = $conexion->query("SELECT * FROM testimonios ORDER BY fecha DESC LIMIT 9");
while ($fila = $resultado->fetch_assoc()) {
    $testimonios[] = $fila;
}
$conexion->close();
?>

<!-- Slider móvil -->
<div class="block md:hidden overflow-x-auto">
  <div class="flex space-x-4 pb-4">
    <?php foreach ($testimonios as $fila):
      $inicial = strtoupper(substr($fila['nombre'], 0, 1));
      $color = sprintf("#%06X", crc32($fila['nombre']));
    ?>
      <div class="min-w-[280px] max-w-[300px] w-[300px] bg-white p-4 rounded-xl shadow flex-shrink-0">
        <div class="flex items-center space-x-3 mb-3">
          <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold" style="background-color: <?= $color ?>;">
            <?= $inicial ?>
          </div>
          <div>
            <h4 class="text-blue-800 text-sm font-semibold"><?= htmlspecialchars($fila['nombre']) ?></h4>
            <span class="text-xs text-gray-500"><?= htmlspecialchars($fila['cargo'] . ($fila['empresa'] ? ', ' . $fila['empresa'] : '')) ?></span>
          </div>
        </div>
        <p class="text-gray-700 text-sm mb-2 italic">"<?= htmlspecialchars($fila['mensaje']) ?>"</p>
        <div class="text-yellow-400 text-sm"><?= str_repeat("⭐", $fila['calificacion']) ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Grid escritorio -->
<div class="hidden md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  <?php foreach ($testimonios as $fila):
    $inicial = strtoupper(substr($fila['nombre'], 0, 1));
    $color = sprintf("#%06X", crc32($fila['nombre']));
  ?>
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <div class="flex items-center space-x-4 mb-4">
        <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold" style="background-color: <?= $color ?>;">
          <?= $inicial ?>
        </div>
        <div>
          <h4 class="text-blue-800 font-semibold"><?= htmlspecialchars($fila['nombre']) ?></h4>
          <span class="text-sm text-gray-500"><?= htmlspecialchars($fila['cargo'] . ($fila['empresa'] ? ', ' . $fila['empresa'] : '')) ?></span>
        </div>
      </div>
      <p class="text-gray-700 mb-3 italic">"<?= htmlspecialchars($fila['mensaje']) ?>"</p>
      <div class="text-yellow-400 text-sm"><?= str_repeat("⭐", $fila['calificacion']) ?></div>
    </div>
  <?php endforeach; ?>
</div>
