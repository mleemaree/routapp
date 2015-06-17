<ul class="nav navmenu-nav">
      <li>
       <form class="navbar-form navbar-left full-width" role="search">
            <div class="form-group full-width" style="text-align:center;">
              <input type="text" class="form-control" id="menu-search" placeholder="Introduce tu busqueda">
            </div>
        </form>
      </li>
        <form action="search-rutas.php" method="GET" target="_blank" accept-charset="UTF-8"
  enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
          <li>
            <div class="input-group full-width" style="padding: 0 5%;">
              <input type="text" class="form-control" id="province-select" aria-label="province-selector" placeholder="Provincia">
            </div>
          </li>
          <li class="filter">
            <span class="filtro-name">Tipo de Exjercicio</span>
            <ul class="tipo-exjercicio category">
              <li class="filtro-type">
                <input id="todos" type="checkbox">
                <label for="todos">Todos</label>
              </li>
              <li class="filtro-type">
                <input id="resistencia" type="checkbox">
                <label for="resistencia">Resistencia</label>
              </li>
              <li class="filtro-type">
                <input id="velocidad" type="checkbox">
                <label for="velocidad">Velocidad</label>
              </li>
              <li class="filtro-type">
                <input id="potencia" type="checkbox">
                <label for="potencia">Potencia</label>
              </li>
              <li class="filtro-type">
                <input id="elasticidad" type="checkbox">
                <label for="elasticidad">Elasticidad</label>
              </li>
              <li class="filtro-type">
                <input id="musculation" type="checkbox">
                <label for="musculation">Musculation</label>
              </li>
              <li>Mostrar todos</li>
            </ul>
          </li>
          <li class="filter">
            <span class="filtro-name">Trazado</span>
            <ul class="trazado category">
              <li class="filtro-type">
                <input id="lineal" type="checkbox">
                <label for="lineal">Lineal</label>
              </li>
              <li class="filtro-type">
                <input id="circular" type="checkbox">
                <label for="circular">Circular</label>
              </li>
            </ul>
          </li>
          <li class="filter">
            <span class="filtro-name">Distancia</span>
            <ul class="distancia category">
              <li class="filtro-type">
                <input id="5km" type="checkbox">
                <label for="5km">Menos de 5 km</label>
              </li>
              <li class="filtro-type">
                <input id="5-10km" type="checkbox">
                <label for="5-10km">De 5 a 10km</label>
              </li>
              <li class="filtro-type">
                <input id="10-15km" type="checkbox">
                <label for="10-15km">De 10 a 15km</label>
              </li>
              <li class="filtro-type">
                <input id="15-20km" type="checkbox">
                <label for="15-20km">De 15 a 20km</label>
              </li>
              <li class="filtro-type">
                <input id="20-25km" type="checkbox">
                <label for="20-25km">De 20 a 25km</label>
              </li>
              <li class="filtro-type">
                <input id="25km" type="checkbox">
                <label for="25km">Mas de 25km</label>
              </li>
            </ul>
          </li>
          <li class="filter">
            <span class="filtro-name">Zona a Ejercitar</span>
            <ul class="zona category">
              <li class="filtro-type">
                <input id="todas" type="checkbox">
                <label for="todas">Todas</label>
              </li>
              <li class="filtro-type">
                <input id="piernas" type="checkbox">
                <label for="piernas">Piernas</label>
              </li>
              <li class="filtro-type">
                <input id="brazos" type="checkbox">
                <label for="brazos">Brazos</label>
              </li>
              <li class="filtro-type">
                <input id="torso" type="checkbox">
                <label for="torso">Torso</label>
              </li>
              <li class="filtro-type">
                <input id="espalda" type="checkbox">
                <label for="espalda">Espalda</label>
              </li>
              <li class="filtro-type">
                <input id="abdominales" type="checkbox">
                <label for="abdominales">Abdominales</label>
              </li>
            </ul>
          </li>
          <li class="filter">
            <span class="filtro-name">Material Adicional</span>
            <ul class="material category">
              <li class="filtro-type">
                <input id="trx" type="checkbox">
                <label for="trx">TRX</label>
              </li>
              <li class="filtro-type">
                <input id="balon" type="checkbox">
                <label for="balon">Balon de Pilates</label>
              </li>
              <li class="filtro-type">
                <input id="teraband" type="checkbox">
                <label for="teraband">Teraband</label>
              </li>
              <li class="filtro-type">
                <input id="kettlebell" type="checkbox">
                <label for="kettlebell">Kettlebell</label>
              </li>
              <li class="filtro-type">
                <input id="espalda-tool" type="checkbox">
                <label for="espalda-tool">Espalda</label>
              </li>
              <li class="filtro-type">
                <input id="abdominales-tool" type="checkbox">
                <label for="abdominales-tool">Abdominales</label>
              </li>
            </ul>
          </li>
          <li class="filter">
            <span class="filtro-name">Caracteristicas Especiales</span>
            <ul class="especiales category">
              <li class="filtro-type">
                <input id="fuentes" type="checkbox">
                <label for="fuentes">Fuentes de agua potable</label>
              </li>
              <li class="filtro-type">
                <input id="public-transport" type="checkbox">
                <label for="public-transport">Transporte Publico</label>
              </li>
              <li class="filtro-type">
                <input id="parking" type="checkbox">
                <label for="parking">Parking cercano</label>
              </li>
              <li class="filtro-type">
                <input id="parques" type="checkbox">
                <label for="parques">Parques</label>
              </li>
              <li class="filtro-type">
                <input id="iluminadas" type="checkbox">
                <label for="iluminadas">Zonas iluminadas</label>
              </li>
              <li class="filtro-type">
                <input id="sans-trafic" type="checkbox">
                <label for="sans-trafic">Zonas sin trafico</label>
              </li>
            </ul>
          </li>
          <li class="filter">
            <input id="submit-filters" type="submit" value="Submit">
          </li>
        </form>
      </ul>
  </div>