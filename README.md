# GETTING PERUVIAN LEGAL INFORMATION

## GOAL

Build a web service to call SUNAT public internet services to get
Peruvian people legal information.

## DESCRIPTION

It is an App as part of a technical challenge in creating web services
on GCP and an app to get the Peruvian people's legal information from
Internal Revenue Services.

I used ruc.com.pe to create an account for free for seven days and to
get a token. The idea is to call the service with the ID of the tax
contributors and the token to get the information. You can call this web
service with the URL below. Test it with the Postman or Curl.

```
http://YOUR_WEB_SERVER_PUBLIC_IP/consulta-ruc-json.php?ruc=10111111114&token=79fda70b-89da-4920-a980-9fcc89d71591-f2d2ace8-cf7e-4a9a-acab-0737f8a32258
```

The result of the calling web service is a JSON object.

### TYPE OF APPLICATION

Legacy web service

### METHOD

GET

### RETURN

JSON

### PROGRAMMING LANGUAGE

php

### WEB SERVER

Apache

### VM

GCP Compute Engine VM, Debian 11.8.

### INSTALLED PACKAGES ON VM

apache2, php7.4-curl

### AUTHOR

Victor C (aka nmagko)
