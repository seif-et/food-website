# Food website

# installation

1. download and install xamp from <a href = "https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.12/xampp-windows-x64-8.1.12-0-VS16-installer.exe">here</a>
2. Move the project root folder into `C/xampp/htdocs`
3. Run xampp and start Apache and MySQL
4. in the browser goto <a>http://localhost/phpmyadmin/</a>
5. create a new database named "food_website"
6. create `blog` table with (created_at : TIMESTAMP, title : VARCHAR, author: VARCHAR, body : TEXT, image : LONGBLOB)
7. create `menu` table with ( name : VARCHAR, category: VARCHAR, description : TEXT, price : INT)
8. create `orders` table with ( full_name : VARCHAR, food_name: VARCHAR, phone_number: VARCHAR, order_details : TEXT, address : TEXT, quantity : INT)
9. create `gallery` table with ( image : LONGBLOB, tag: VARCHAR)
