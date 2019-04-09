# Error404AutoBan
Automatically ban hackers trying to find WordPress vulnerabilities.

This uses an error 404 redirect to look for someone trying to access WordPress vulnerabilities such as the wp-admin folder. They don't know if you have WordPress or not. They are hoping you do so they can hack into your site. Also, I have discovered certain scan tools that hackers use. The user agent string is an advertisement for the scan tool. An example is masscan. If I find this in the user agent string and they causes a 404 error, they are trying to hack in. They also get banned.

You can change the list of what causes the ban to happen at the top of http-errors/404.php.

The http-errors/404.php page looks like a Microsoft IIS error page. But I am running NGINX web server.

To make 404 errors redirect to http-errors/404.php, add these lines in your .conf file in /etc/nginx/site-available if you are using NGINX:

recursive_error_pages off;

error_page 404 = /http-errors/404.php;
    
In order for php to ban an IP using the program iptables, php must be allowed to run iptables as sudo.
To give php access to run iptables as sudo, create a file called /etc/sudoers.d/www-data-sudoers and put this line in it:

www-data ALL=(ALL) NOPASSWD: /sbin/iptables

Some people say that php should not have access to run iptables as sudo. If  you feel that way, you could write the IP address to a file and have some other program read the file and ban them. But whatever you do, you need some fast way to ban that IP from your entire server. Because one second after they try this failed attempt at hacking in, they'll be trying 50 other things automatically. This eliminates unnecessary traffic on your server. These people write programs that automatically try every vulnerability they can think of. If there was a new vulnerability that was just discovered that they know about, but you don't, they'll get in. Unless you ban their IP when they first tried to get in.

I also log these into a database and I have over 17,000 unique IP addresses of hackers so far.

