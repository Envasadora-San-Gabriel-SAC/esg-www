<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios</title>
  <style>
    :root {
      --verdigris: #00ACB1;
      --pistachio: #9CCB73;
      --Myrtle-green: #367A73;
      --floral-white: #FAF9F4;
      --jet: #343434;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: var(--floral-white);
      color: var(--jet);
    }

    .servicio {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 4rem 8%;
      gap: 2rem;
    }

    .servicio:nth-child(even) {
      flex-direction: row-reverse;
      background: #fff;
    }

    .servicio:nth-child(odd) {
      background: var(--floral-white);
    }

    .servicio img {
      width: 45%;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      object-fit: cover;
    }

    .texto {
      width: 55%;
    }

    .texto h2 {
      font-size: 1.8rem;
      color: var(--Myrtle-green);
      margin-bottom: 1rem;
    }

    .texto p {
      line-height: 1.6;
      text-align: justify;
    }

    @media (max-width: 900px) {
      .servicio {
        flex-direction: column;
        text-align: center;
      }
      .servicio:nth-child(even) {
        flex-direction: column;
      }
      .servicio img, .texto {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <section class="servicio">
    <img src="diesel.jpg" alt="Abastecimiento de Diesel">
    <div class="texto">
      <h2>Abastecimiento de Diesel</h2>
      <p>
        Solucionamos el problema del abastecimiento de combustibles para las maquinarias, equipos y unidades de todos nuestros clientes, surtiéndolos directamente en la obra, en el mismo punto de ejecución de la misma; al igual que en sus locales, puntos de acopio o sedes. Diseñamos y adaptamos cada abastecimiento de manera personalizada, acorde a las necesidades o exigencias de la operación de cada cliente. Nuestro servicio tiene alcance a nivel nacional.
      </p>
    </div>
  </section>

  <section class="servicio">
    <img src="solventes.jpg" alt="Distribución de Solventes">
    <div class="texto">
      <h2>Distribución de Solventes de Petroperú</h2>
      <p>
        Se obtiene por un proceso químico denominado extracción cáustica de los destilados de petróleo, principalmente de las fracciones de querosene y diésel. Es utilizado como disolvente o diluyente. Sus usos principales son: solventes para resinas, lacas, esmaltes, caucho, tintas, cuero, gasolina para aviación, agente desengrasante, producción de resinas epóxicas, elaboración de perfumes, producción de insecticidas y repelentes, limpieza de ropa en seco, diluyentes de pintura, quitaesmaltes y removedores de pegamento, además de detergentes.
      </p>
    </div>
  </section>

  <section class="servicio">
    <img src="resinas.jpg" alt="Producción y Distribución de Resinas">
    <div class="texto">
      <h2>Producción y Distribución de Resinas</h2>
      <p>
        Resina de uso General formulada para ser aplicada como refuerzo entre las sucesivas capas de fibra de vidrio (PRFV). Se usa en la fabricación de acabados sanitarios tipo mármol como refuerzo en la capa posterior, también en la parte posterior como refuerzo en sanitarios de colores completos como lavatorios, pisos para duchas, tinas, jacuzzis y en tableros para cocina. Además, en acabados automotrices, maniquíes, cortavientos vehiculares, piezas en general, etc.
      </p>
    </div>
  </section>

</body>
</html>
