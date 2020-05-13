<div class="ui modal small contact-form-modal" >
  <i class="close icon"></i>
  <div class="header">
    ¡Contactenos!
  </div>
  <div class=" content">
    <div class="ui form" id="contact-form">
        <div class="field">
          <label>Nombre</label>
          <input type="text" name="name" id="name" placeholder="Nombre">
        </div>
        <div class="field">
          <label>Correo</label>
          <input type="text" name="email" id="email" placeholder="Correo">
        </div>
        <div class="field">
          <label>Mensaje</label>
          <textarea rows="4" name="message" id="message" placeholder="Mensaje" maxlength="2000"></textarea>
        </div>
        <div class="ui error message" id="contact-errors"></div>
         <div class="ui success message hidden" id="contact-success">
            <p>¡Su mensaje ha sido enviado exitosamente!</p>
          </div>
         <button class="ui primary fluid button submit" id="contact-form-submit">
           ¡Enviar!
        </button>
    </div>
  </div>
</div>
