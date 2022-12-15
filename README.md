# Food website

# installation

    - download and install xamp from <a href = "https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.12/xampp-windows-x64-8.1.12-0-VS16-installer.exe">here</a>
    - Run xampp and start Apache and MySQL
    - in the browser goto <a>http://localhost/phpmyadmin/</a>
    - create a new database named "food_website"
    - create `blog` table with (created_at : TIMESTAMP, title : VARCHAR, author: VARCHAR, body : TEXT, image : LONGBLOB)
    - create `menu` table with ( name : VARCHAR, category: VARCHAR, description : TEXT, price : INT)
    - create `orders` table with ( full_name : VARCHAR, food_name: VARCHAR, phone_number: VARCHAR, order_details : TEXT, address : TEXT, quantity : INT)
