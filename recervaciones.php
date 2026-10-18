<?php include_once'includes/templates/header.php';?>
  <seccion class="seccion contenedor-barra">
      <h2>Registro de Usuarios</h2>
      <form id="datos_usuario"class="registro"action="validar_registro.php"method="post">
          <div id="datos_usuario"class="registro caja clearfix">
             <h3>Datos personales</h3>
             <div class="campo">
                 <label for="nombres">Nombre</label>
                 <input type="text"id="nombres"name="nombres"placeholder="Nombres"><br>
             </div>
              <div class="campo">
                 <label for="apellidos">Apellidos</label>
                 <input type="text"id="apellidos"name="apellidos"placeholder="Apellido"><br>
                 <div class="campo">
                 <label for="celular">Celular</label>
                 <input type="number"id="celular"name="celular"placeholder="Celular"><br>
                 <div class="campo">
                 <label for="email">Correo <br>electronico</label>
                 <input type="email"id="email"name="email"placeholder="Correo">
                 <div id="error">
       
                 </div>
                 <label for="nom"><br>CONTRASEÑA PARA GAME</label> <br>
       <input type="text"name="nombre"id="nombre"
       placeholder="******"maxlength="15"
       requiered>
       <br>
       <label for="nacionalidad">NACIONALIDAD</label>
       <select name="nacionalidad" id="nacionalidad">
           <option value="bol">Boliviana</option>
           <option value="arg">Argentina</option>
           <option value="chi">Chilena</option>
            <option value="pe">Peruana</option>
             </select>
       <label for="GAME">PLATAFORMA DE GAME</label>
       <select name="GAME" id="GAME">
       <option value="P">PLAY 4</option>
       <option value="X">XBOX</option>
       <option value="M">MICROSOFT</option>
       <option value="A">ANDROI.10</option>
       </select>
             </div>
             </div>
             </div>
          </div>
          <div id="paquetes"class="paquetes">
             <h3>Numero de pases</h3>
               <ul class="lista-precios clearfix">
           <li>
               <div class="tabla-precio">
                    <h3>NOVATOS</h3>
                   <p class="numero">50 BS</p>
                   <ul>
                      <li><i class="fas fa-check"></i>Individual</li>
                       <li><i class="fas fa-check"></i>1500 PUNTOS </li>
                       <li><i class="fas fa-check"></i>Todas las guias</li>
                       <li><i class="fas fa-check"></i>Todos los manuales</li>
                        <li><i class="fas fa-check"></i>reglas del juego + codigo de ingreso **** </li>
                   </ul>
                   <div class="orden">
                       <lavel form="pase_universitario">Pases deseados</lavel>
                       <input type="number"min="0"id="pase_universitario"name="pase[]"size="3"placeholder="0">
                   </div>
               </div>
           </li>
            <li>
               <div class="tabla-precio">
                  <h3>GAMER</h3>
                   <p class="numero">100 BS</p>
                   <ul>
                      <li><i class="fas fa-check"></i>Individual</li>
                       <li><i class="fas fa-check"></i>1000 PUNTOS</li>
                       <li><i class="fas fa-check"></i>Todas las guias</li>
                       <li><i class="fas fa-check"></i>Todos los manuales</li>
                        <li><i class="fas fa-check"></i>reglas del juego + 
                        codigo de ingreso **** </li>
                   </ul>
                  <div class="orden">
                       <lavel form="pase_profecional">Pases deseados</lavel>
                       <input type="number"min="0"id="pase_profecional"name="pase[]"size="3"placeholder="0">
               </div>
               </div>
           </li>
           <li>
               <div class="tabla-precio">
                   <h3>Grupos</h3>
                   <p class="numero">350 BS</p>
                   <ul> 
                      <li><i class="fas fa-check"></i>equipo de 5</li>
                       <li><i class="fas fa-check"></i>1600 PUNTOS </li>
                       <li><i class="fas fa-check"></i>Todas las gias</li>
                       <li><i class="fas fa-check"></i>Todos los manuales</li>
                        <li><i class="fas fa-check"></i>reglas del juego+codigo de ingreso **** </li>
                   </ul>
               <div class="orden">
                       <lavel form="pase_grupal">Pases deseados</lavel>
                       <input type="number"min="0"id="pase_grupal"size="3"name="pase[]"placeholder="0">
               </div>
               </div>
           </li>
        </ul>
              
          </div>
          <div id="eventos" class="eventos clearfix">
              <h3>Elige tus eventos:</h3>
              <div class="caja">
                  <div id="miercoles" class="contenido-dia clearfix">
                  <h4>Miercoles</h4>
                  <div>
                      <p>Talleres:</p>
                      <label ><input type="checkbox"name="registro[]"id="taller_01"value="taller_01"><time>10:00</time>Responsive Web Design</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_02"value="taller_02"><time>12:00</time>Flexbox</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_03"value="taller_03"><time>14:00</time>HTML5 y CSS3</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_04"value="taller_04"><time>17:00</time>Drupal</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_05"value="taller_05"><time>19:00</time>Wordpress</label>
                  </div>
                  <div>
                      <p>Conferencias:</p>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_01"value="conferencia_01"><time>10:00</time>Como ser Freelancer</label>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_02"value="conferencia_02"><time>17:00</time>Tecnologias del futuro</label>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_03"value="conferencia_03"><time>19:00</time>Pasos para crear un Negocio Rentable</label>
                  </div>
                   <div>
                      <p>Seminarios:</p>
                      <label ><input type="checkbox"name="registro[]"id="seminarios_01"value="seminarios_01"><time>10:00</time>Diseño UI y UX para moviles</label>
                     
                  </div>
              </div>
              <div id="jueves" class="contenido-dia clearfix">
                  <h4>Jueves</h4>
                  <div>
                      <p>Talleres:</p>
                      <label ><input type="checkbox"name="registro[]"id="taller_06"value="taller_06"><time>10:00</time>Angular</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_07"value="taller_07"><time>12:00</time>PHP y MYSQL</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_08"value="taller_08"><time>14:00</time>JavaScript</label>
                       <label ><input type="checkbox"name="registro[]"id="taller_09"value="taller_09"><time>17:00</time>SEO el GOOGLE</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_10"value="taller_10"><time>19:00</time>De Photoshop a HTML5 y CSS3</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_11"value="taller_11"><time>21:00</time>PHP Medio y Avanzado</label>
                     
                  </div>
                  <div>
                      <p>Conferencias:</p>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_04"value="conferencia_04"><time>10:00</time>Como crear una tienda online que venda millones en pocos dias</label>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_05"value="conferencia_05"><time>17:00</time>Los mejores lugares para encontrar trabajo</label>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_06"value="conferencia_06"><time>19:00</time>Pasos para crear un negocio rentable</label>
                  </div>
                   <div>
                      <p>Seminarios:</p>
                      <label ><input type="checkbox"name="registro[]"id="seminarios_02"value="seminarios_02"><time>10:00</time>Aprende a programar en una mañana</label>
                     
                      <label ><input type="checkbox"name="registro[]"id="seminarios_03"value="seminarios_03"><time>17:00</time>Diseño UI y UX para moviles</label>
                     
                  </div>
              </div>
              <div id="viernes" class="contenido-dia clearfix">
                  <h4>Viernes</h4>
                  <div>
                      <p>Talleres:</p>
                      <label ><input type="checkbox"name="registro[]"id="taller_12"value="taller_12"><time>10:00</time>Laravel</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_13"value="taller_13"><time>12:00</time>Crear tu propia API</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_14"value="taller_14"><time>14:00</time>JavaScript y jQuery</label>
                       <label ><input type="checkbox"name="registro[]"id="taller_15"value="taller_15"><time>17:00</time>Creando plantillas para WordPress</label>
                      <label ><input type="checkbox"name="registro[]"id="taller_16"value="taller_16"><time>19:00</time>Tiendas virtuales de Magneto</label>
                     
                  </div>
                  <div>
                      <p>Conferencias:</p>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_07"value="conferencia_07"><time>10:00</time>Como hacer marketing en linea</label>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_08"value="conferencia_08"><time>17:00</time>Con que lenguaje debo empezar</label>
                      <label ><input type="checkbox"name="registro[]"id="conferencia_09"value="conferencia_09"><time>19:00</time>Frameworks y librerias Open Source</label>
                  </div>
                   <div>
                      <p>Seminarios:</p>
                      <label ><input type="checkbox"name="registro[]"id="seminarios_04"value="seminarios_04"><time>14:00</time>Creando una App en Android en una tarde</label>
                     
                      <label ><input type="checkbox"name="registro[]"id="seminarios_05"value="seminarios_05"><time>17:00</time>Creando una App en IOS en una tarde</label>
                     
                  </div>
              </div>
          </div>
          </div>
          <div id="resumen" class="resumen">
              <h3>Resumen y Extras</h3>
              <div class="caja clearfix">
                  <div class="extras">
                      <div class="orden">
                          <label for="poleras_evento">Polera del Evento( --60BS--) <small>Color negro con el logo </small>    </label>
                         <input type="number"main="0"id="poleras_evento"size="3"name="pedido_polera"placeholder="0">
                      </div>
                      <div class="orden">
                          <label for="chamarras_evento">Chamarra del Evento( --180BS--) <small>Color negro con el logo </small>    </label>
                         <input type="number"main="0"id="chamarras_evento"size="3"name="pedido_chamarra"placeholder="0">
                      </div>
                      <div class="orden">
                          <label for="gorras_evento">Gorra del Evento( --30BS--) <small>Color negro con el logo </small>    </label>
                         <input type="number"main="0"id="gorras_evento"size="3"name="pedido_gorra"placeholder="0">
                      </div>
                      <div class="orden">
                          <label for="regalo">Seleccione un regalo  </label><br>
                            <select name="regalo" id="regalo"required>
                                <option value=" ">-Seleccione un regalo-</option>
                                 <option value="1">-Boligrafo-</option>
                                  <option value="2">-Stikers-</option>
                                  <option value="3">-Taza-</option>
                            </select>
                      </div>
                      <input type="button"id="calcular"class="button"value="calcular">
                  </div>
                  <div class="total">
                      <p>Resumen</p>
                      <div id="lista_productos">
                          
                      </div>
                        <p>Total</p>
                      <div id="suma_total">
                          
                      </div>
                      <input type="hidden" name="total_pedido" id="total_pedido" >
                      <input type="submit" id="btnregistro" class="button" values="Pagar" name="submit">
                  </div>
              </div>
          </div>
      </form>
  </seccion>
 
 
  <?php include_once'includes/templates/fooder.php';?>