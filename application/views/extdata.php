 if(result == 0)
                   {
                  
              window.location.href="<?php echo base_url(); ?>Admin/dashboard";
                   }
                    
       

                   if(result == 1)
                   {
                    
                      window.location.href="<?php echo base_url(); ?>Admin/admin_login";
                   }
                   
               }



               DirectoryIndex index.php
RewriteEngine on
RewriteCond $1 !^(index\.php|images|css|js|robots\.txt|favicon\.ico)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ ./index.php?/$1 [QSA,L]


server htaccess
DirectoryIndex index.php

RewriteEngine on
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond $1 !^(index\.php|robots\.txt)

RewriteRule ^(.*)$ index.php?/$1 [L]