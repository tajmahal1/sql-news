1. Edit the dbconfig configuration on line:

    ```php
    public $servername = "localhost";
    public $username = "root";
    public $password = ".";
    public $dbname = "portfolio";
    ```
2. After updating the database configuration, initiate the database import 
3. Go to https://phppasswordhash.com/
4. Generate a hashed password using PASSWORD_DEFAULT and place it in the variable $hashed_password within the getHashedPassword function.
   on dbconfig.php 
   ```php
    public function getHashedPassword()
    {
        $hashed_password = 'yourhashedpasswordresulthere';
        return $hashed_password;
    }
   ```
5. Start the server :
   To initiate the server, execute the following command in your terminal:
    ```sh
    php -S localhost:8000
    ```
    > This command will start a PHP server locally on port 8000. You can now access your web application by navigating to http://localhost:8000 in your web browser.

## Managing the Web App

Access the management interface for your web application at: http://localhost:8000/manage
