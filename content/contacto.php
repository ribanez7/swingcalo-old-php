<?php include_once '../layouts/content/header.php'; ?>

<div id="frm" class="container">
    <form id="formulario" class="five columns" method="post" action="http://forms.melodysoft.com" name="formContacto">
        <input type="hidden" name="id" value="Swingcalo">
        <fieldset>
                <ol>
                    <li>
                        <label for="name">Nombre:<span>(obligatorio)</span></label>
                        <input class="required" type="text" name="name" id="name" required/>                       
                    </li>
                    <li>
                        <label for="mail">E-mail:<span>(obligatorio)</span></label>                        
                        <input class="required" type="email" name="mail" id="mail" required />                        
                    </li>
                    <li>
                        <label for="tel">Teléfono:</label>
                        <input type="tel" name="tel" id="tel"/>                    
                    </li>
                    <li>
                        <label for="message">Tu mensaje:<span>(obligatorio)</span></label>                        
                        <textarea class="required" name="message" id="message" required></textarea>
                    </li>
                </ol>
        </fieldset>
        <fieldset>
            <legend>Ayúdanos a mejorar el sitio:</legend>
            <ol>
                <li>
                    <label for="puntua">¿Qué nota le pones a la web?<br />(del 1 al 5)</label>
                    <input type="range" name="puntua" min="1" max="5" value="3" />
                </li>
                <li>
                    <fieldset>
                        <label for="">¿Desde dónde la has visitado?</label>
                        <label for="regularRadio1">
                        <input type="radio" name="radios" id="ord" value="Ordenador" />
                        <span>Ordenador</span>
                        </label>
                        <label for="RegularRadio2">
                        <input type="radio" name="radios" id="tab" value="Tablet" />
                        <span>Tablet</span>
                        </label>
                        <label for="RegularRadio3">
                        <input type="radio" name="radios" id="mov" value="Móvil" />
                        <span>Móvil</span>
                        </label>
                    </fieldset>
                </li>
            </ol>  
        </fieldset>
    <input type="submit" value="Enviar"/>        
    </form>
    <div id="rider" class="ten columns" style="float: right;">
      <h3>Rider:</h3>
      <img src="../public/img/riders/ridergran.png" alt="Rider Swingcaló" title="Rider Swingcaló" />
      <img src="../public/img/riders/ridermiggran.png" alt="Rider Swingcaló" title="Rider Swingcaló" />
      <img src="../public/img/riders/ridermigpetit.png" alt="Rider Swingcaló" title="Rider Swingcaló" />
      <img src="../public/img/riders/riderpetit.png" alt="Rider Swingcaló" title="Rider Swingcaló" />
      <h3>Especificaciones técnicas:</h3>
      <p>
          -El violín y la guitarra solista utilizan pastilla con conexión vía jack. <br />
          -Contrabajo, clarinete y guitarra rítmica utilizan micro de condensador propio, conexión vía canon. Se necesita phantom. <br />
      </p>
      <h3>Requerimientos mínimos para backline:</h3>
      <p>
          -Dos sillas sin brazos.<br />
          -Un micro de voz.<br />
          -Dos monitores.
      </p>
    </div> 
</div>
   
<?php include_once '../layouts/common/footer.php'; ?>