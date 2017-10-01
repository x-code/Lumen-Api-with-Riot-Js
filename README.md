
This application provides an example of:
1. Building a complete RESTful API in PHP using the Lumen framework.
2. Consuming these services using RiotJS, Axios & Bootstrap

Set Up API:

1. Create a MySQL database name "lumen_api".
2. Execute lumen_api.sql to create and populate the "news" table:

	mysql lumen_api -u root < lumen_api.sql

3. Deploy the webapp included in this repository.
4. update contens in .env for setting database
5. composer install 
6. run api with php -S localhost:8000 -t public 
7. Access the application in your browser. For example: localhost:8000 and get news article in localhost:8000/news/.


Set Up RiotJS:
1. Open folder client index.html make sure the connection parameters match your API Url in var rootUrl
2.  $ npm install
    $ npm start
3. Access the application in your browser. For example: http://localhost/client/ 

Postman API
https://www.getpostman.com/collections/66d5fb58be9e7124dcb0

Regards,
Rian Firandika

