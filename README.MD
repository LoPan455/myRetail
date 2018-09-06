Installation Instructions:

Pre Requisites:

Docker installed on the local machine
Node installed on the local machine


To install myRetail on a local PC running macOS or Linux:

From a terminal prompt close this repo and move into the directory:

`git clone https://github.com/LoPan455/myRetail.git`
`cd myRetail`

Build the Docker images:

`docker-compose build`

Run the Docker containers (`web` and `database`):
`docker-compose up`

Seed the data with the following commands:
`docker exec -t myretail_database_1 mongoimport --db myretail --collection products --file products.json --type json --jsonArray -u root -p password2841 --authenticationDatabase admin`

`docker exec -t myretail_database_1 mongoimport --db myretail --collection prices --file pricing.json --type json --jsonArray -u root -p password2841 --authenticationDatabase admin`

Once the install is done you can test the REST service by starting a terminal session into the `web` container:

`docker-exec -ti myretail_web_1 bash`

Once inside the container, a cURL request to the following URLs will return the required data:

`curl http://localhost/products` -> will list all products in the `Products` collection
`curl htto://localhost/product/<id>` -> will retrieve product and price data for a single product.




Challenge:

My Retail REST API

myRetail is a rapidly growing company with HQ in Richmond, VA and over 200 stores
across the east coast. myRetail wants to make its internal data available to any number
of client devices, from myRetail.com to native mobile apps.

The goal for this exercise is to create an end-to-end Proof-of-Concept for a products API,
which will aggregate product data from multiple sources and return it as JSON to the
caller.

Your goal is to create a RESTful service that can retrieve product and price details by ID.
The URL structure is up to you to define, but try to follow some sort of logical
convention.

Build an application that performs the following actions:

Example:
* Responds to an HTTP GET request at /products/{id} and delivers product data as
JSON (where {id} will be a number.
* Example product IDs: 15117729, 16483589, 16696652, 16752456, 15643793)
* Example response: {&quot;id&quot;:13860428,&quot;name&quot;:&quot;The Big Lebowski (Blu-ray)
(Widescreen)&quot;,&quot;current_price&quot;:{&quot;value&quot;: 13.49,&quot;currency_code&quot;:&quot;USD&quot;}}
* Performs an HTTP GET to retrieve the product name from an external API. (For
this exercise the data will come from redsky.target.com, but let’s just pretend
this is an internal resource hosted by myRetail)
http://redsky.target.com/v2/pdp/tcin/13860428?excludes=taxonomy,price,promotion,bulk
_ship,rating_and_review_reviews,rating_and_review_statistics,question_answer_statist
ics
* Reads pricing information from a NoSQL data store and combines it with the
product id and name from the HTTP request into a single response.  
* BONUS: Accepts an HTTP PUT request at the same path (/products/{id}),
containing a JSON request body similar to the GET response, and updates the
product’s price in the data store.