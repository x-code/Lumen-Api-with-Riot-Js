
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

Regards,
Rian Firandika

