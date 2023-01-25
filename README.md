Portal web de la empresa Envasadora San Gabriel SRL
## Laravel

Desarrollado con Laravel 8

## LIberar selinux  DEBIAN y Centos
se tiene que configurar los siguitnes accesos para lavarel en selinux

semanage fcontext -a -t httpd_sys_rw_content_t "/var/www/html/esg.com.pe/dev/storage(/.*)?"
semanage fcontext -a -t httpd_sys_rw_content_t "/var/www/html/esg.com.pe/dev/bootstrap/cache(/.*)?"
chcon -R -t httpd_sys_rw_content_t /var/www/html/esg.com.pe/dev/storage
restorecon -Rv /var/www/html/esg.com.pe/dev/


## GIT
cd ~/.ssh/
eval $(ssh-agent)
ssh-keygen -t ed25519 -b 4096 -C "soporte@miasoftware.net" -f server-evil
ssh-add ~/.ssh/server-evil

ssh -T git@bitbucket.org
