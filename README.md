# phpunit-selenium
Example of Using PHPUnit Selenium<br>

Gunakan contoh code ini dan jalankan langkah-langkah di bawah ini, pastikan anda membuka layar cmd dan sudah melakukan cd ke dalam folder contoh code ini<br><br>

Langkah-langkah untuk Install PHP Unit - Selenium<br>
=================================================<br>
- Install PHP Unit<br>
1. Download di sini https://phpunit.de/<br>
2. Rename phpunit-x.x.x.phar jadi phpunit.phar<br>
3. Pindahkan phpunit.phar tersebut ke folder apa aja, misal C:\phpunit\<br>
4. Buka Environment Variables, add pada PATH "C:\phpunit\"<br>
5. Restart Komp<br>
<br>
- Install Composer<br>
1. Download di sini https://getcomposer.org/Composer-Setup.exe<br>
2. Install seperti biasa, restart komp<br>
<br>
- Install PHPUnit-Selenium<br>
1. Buka cmd.exe atau windows+r ketikkan cmd, jalankan command di bawah ini<br>
<code>composer require --dev phpunit/phpunit</code><br>
<code>composer require --dev phpunit/phpunit-selenium</code><br>
jangan tutup cmd nya<br>
<br>
3. Download file selenium webdriver di http://docs.seleniumhq.org/download/<br>
<br>
Yap sudah ready untuk jalankan PHPUnit-Selenium nya.<br>
<br>
<br>
Langkah-langkah untuk menjalankan PHP Unit - Selenium<br>
=====================================================<br>
1. run command di bawah ini di cmd<br>
<code>java -jar "selenium-server-standalone-#.jar"</code><br>
ganti # dengan versi selenium server, misal : java -jar "selenium-server-standalone-2.53.0.jar"<br>
<br>
2. run command di bawah ini di cmd<br>
<code>phpunit --verbose "tests\UserSubscriptionTest"</code> <br>