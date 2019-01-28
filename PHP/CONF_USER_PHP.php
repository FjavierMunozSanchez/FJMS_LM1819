#Para configurar el usuario en PHP
#Para configurar esto vamos a XAMPP y en el servidor APACHE damos a "config" y en Apache (httpd.conf)
#Copiamos estas líneas al final del documento que nos aparece para crear un "Host virtual"
#Esto lo podemos hacer cuantas veces queramos para crear distintas Webs en un mismo servidor.

<IfModule alias_module>
 Alias /curso "C:\Users\Alumno\Desktop\Repositorios\FJMS_LM1819\PHP"

 <Directory "C:\Users\Alumno\Desktop\Repositorios\FJMS_LM1819\PHP">
  Options Indexes FollowSymLinks Includes ExecCGI
  AllowOverride all
  Order allow,deny
  Allow from all
  Require all granted
 </Directory>
</IfModule>