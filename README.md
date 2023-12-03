# OBTENCIÓN DE INFORMACIÓN JURÍDICA

## OBJETIVO:

Implementar un web service que consuma servicios de Sunat para obtener
datos de persona juridica según RUC.

## DESCRIPCIÓN:

Debido que el link provisto en el reto técnico siempre retorna RUC no
existe, se ha creado un nuevo Web service publicado en GCP, válido por 2
meses o hasta que se acabe el presupuesto, lo que ocurra primero. :))

Se generó un registro en ruc.com.pe, el token provisto es válido por 7
días, después de ello debe usted generar su propio registro y generar su
token para poder continuar usando el Web service, reemplazar el valor de
ruc con uno válido, también, si usted tiene un token válido, puede
reemplazarlo en la llamada al web service, la llamada pública a dicho
web service es la siguiente (puede probarse independientemente en
postman):

```
http://34.16.161.4/consulta-ruc-json.php?tipo=2&ruc=10111111114&token=79fda70b-89da-4920-a980-9fcc89d71591-f2d2ace8-cf7e-4a9a-acab-0737f8a32258
```

La llamada retorna el JSON que es obtenido desde ruc.com.pe. La variable
GET con nombre tipo se ha puesto por comptabilidad con el web service
provisto en el reto técnico y es opcional para este web service. Para
ruc.com.pe sólo es necesario el ruc y el token.

### TIPO DE APLICACIÓN:

Legacy web service

### MÉTODO:

GET

### RESULTADO RETORNO:

JSON

### LENGUAJE DE PROGRAMACIÓN:

php

### SERVIDOR WEB:

Apache

### VM:

GCP Compute Engine VM, Debian 11.8.

### PAQUETES INSTALADOS EN VM:

apache2, php7.4-curl

### AUTOR:

Victor C (aka nmagko)
