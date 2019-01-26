CREATE TABLE "items" (
    "id" SERIAL PRIMARY KEY,
    "name" varchar(255) NOT NULL,
	"done" BOOLEAN NOT NULL,
	"created" DATE NOT NULL DEFAULT CURRENT_DATE
);


