/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: ES
 */
 jQuery.extend(jQuery.validator.messages, {
  required: "<label class='control-label' for='inputError'>Este campo es obligatorio.</label></label>",
  remote: "<label class='control-label' for='inputError'>Por favor, rellena este campo.</label>",
  email: "<label class='control-label' for='inputError'>Por favor, escribe una dirección de correo válida</label>",
  url: "<label class='control-label' for='inputError'>Por favor, escribe una URL válida.</label>",
  date: "<label class='control-label' for='inputError'>Por favor, escribe una fecha válida.</label>",
  dateISO: "<label class='control-label' for='inputError'>Por favor, escribe una fecha (ISO) válida.</label>",
  number: "<label class='control-label' for='inputError'>Por favor, escribe un número entero válido.</label>",
  digits: "<label class='control-label' for='inputError'>Por favor, escribe sólo dígitos.</label>",
  creditcard: "<label class='control-label' for='inputError'>Por favor, escribe un número de tarjeta válido.</label>",
  equalTo: "<label class='control-label' for='inputError'>Por favor, escribe el mismo valor de nuevo.</label>",
  accept: "<label class='control-label' for='inputError'>Por favor, escribe un valor con una extensión aceptada.</label>",
  maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});