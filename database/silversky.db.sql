BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "login_attempts" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"ip"	varchar NOT NULL,
	"email"	varchar NOT NULL,
	"password"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "portfolio_images" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"url"	text NOT NULL,
	"portfolio_id"	integer NOT NULL,
	"portfolio_type"	varchar NOT NULL DEFAULT 'App\Models\Portfolio',
	"created_at"	datetime,
	"updated_at"	datetime,
	FOREIGN KEY("portfolio_id") REFERENCES "portfolio"("id")
);
CREATE TABLE IF NOT EXISTS "portfolio" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"title"	text NOT NULL,
	"url"	text NOT NULL,
	"description"	text NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "services" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"title"	text NOT NULL,
	"url"	text NOT NULL,
	"description"	text NOT NULL,
	"short_description"	text NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "failed_jobs" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"uuid"	varchar NOT NULL,
	"connection"	text NOT NULL,
	"queue"	text NOT NULL,
	"payload"	text NOT NULL,
	"exception"	text NOT NULL,
	"failed_at"	datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS "password_resets" (
	"email"	varchar NOT NULL,
	"token"	varchar NOT NULL,
	"created_at"	datetime
);
CREATE TABLE IF NOT EXISTS "users" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"email"	varchar NOT NULL,
	"password"	varchar NOT NULL,
	"remember_token"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "migrations" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"migration"	varchar NOT NULL,
	"batch"	integer NOT NULL
);
INSERT INTO "login_attempts" ("id","ip","email","password","created_at","updated_at") VALUES (35,'::1','jari.zilverentant@gmail.com','rata-plan','2020-10-30 15:55:51','2020-10-30 15:55:51'),
 (36,'::1','jari.zilverentant@gmail.com','e','2020-10-30 15:59:49','2020-10-30 15:59:49');
INSERT INTO "portfolio_images" ("id","url","portfolio_id","portfolio_type","created_at","updated_at") VALUES (4,'images/solute_numerology.png',2,'App\Models\Portfolio',NULL,NULL),
 (5,'images/solute_plugin_backend.png',2,'App\Models\Portfolio',NULL,NULL),
 (6,'images/solute_plugin_frontend.png',2,'App\Models\Portfolio',NULL,NULL),
 (15,'\images\1604099714dogcenter_frontpage.png',1,'App\Models\Portfolio','2020-10-30 23:15:14','2020-10-30 23:15:14'),
 (16,'\images\1604099714dogcenter_plugin_backend.png',1,'App\Models\Portfolio','2020-10-30 23:15:14','2020-10-30 23:15:14'),
 (17,'\images\1604099714dogcenter_plugin_frontend.png',1,'App\Models\Portfolio','2020-10-30 23:15:14','2020-10-30 23:15:14');
INSERT INTO "portfolio" ("id","title","url","description","created_at","updated_at") VALUES (1,'Dogcenter','Dogcenter.nl','Dit is een website die ik gemaakt heb',NULL,NULL),
 (2,'Solute-Bewustwording','Solute-Bewustwording.nl','Dit is een website waar ik delen van gemaakt heb',NULL,NULL);
INSERT INTO "services" ("id","title","url","description","short_description","created_at","updated_at") VALUES (1,'Website laten maken','images/website.svg','Wij maken uw website op maat precies zoals u het wil hebben. Hiervoor gebruiken we Wordpress tenzij u specifiek een ander framework wilt gebruiken. Met Wordpress garanderen we dat uw website gemakkelijk aan de passen blijft voor u. Wordpress heeft veel thema''s en plugins; hiermee kunnen we uw website helemaal stylen en uniek maken zonder dat het project veel kost.','Wij maken een website naar uw wensen die goed bij uw bedrijf past. Zo gemaakt dat u het zelf gemakkelijk kan bijhouden.',NULL,'2020-10-30 21:21:35'),
 (2,'Website optimalisatie','images/cogs.svg','Wij optimaliseren uw website helemaal zodat het modern oogt en gemakkelijk te gebruiken is voor u en uw klanten. Ook kan het uw website makkelijker te vinden maken in zoekmachines zoals Google en Bing. Websites die tijden niet bijgehouden worden raken snel verouderd, daarom is het belangrijk om uw website regelmatig bij te houden en te moderniseren. ','Wij optimaliseren delen van jullie al bestaande website zodat gemakkelijker te navigeren is voor klanten.',NULL,NULL),
 (3,'Plugin maken','images/plugin.svg','Wilt u iets speciaals voor uw website maar kunt u geen goed passende plugin vinden ervoor? Wij kunnen een plugin maken voor u die compleet in uw algehele website past en helemaal voor u op maat gemaakt is. Dit betekent dat de plugin helemaal voor uw systeem gemaakt is en dus precies past met uw eigen stijl. ','Wij bouwen een plugin op maat die helemaal bij uw website past. Deze is dan uniek voor',NULL,NULL),
 (4,'Mobiele versie maken','images/mobile.svg','Wij maken een mobiele versie van uw website of zelfs een appje voor uw website.Met een thema kunnen we zorgen dat uw website er op een mobiel er netjes uitziet en compleet past.Mobiele websites zijn tegenwoordig enorm belangrijk veel mensen bekijken uw website op hun mobieltje en als dat niet goed werkt zullen ze wellicht snel wegklikken. Daarom vinden wij het belangrijk om een goede mobiele versie te maken van websites. Ook als u een website bij ons laat maken zit daar al een mobiele versie bij.','Wij maken een mobiele versie of app van jullie al bestaande website zodat klanten ook via de mobiel gemakkelijk uw site kan bezoeken.',NULL,NULL),
 (5,'Website thematiseren','images/style.svg','Wij geven uw website een nieuw likje verf zodat het goed bij uw bedrijf en haar bedrijfskleuren past.','Wij geven uw website een nieuw likje verf zodat het goed bij uw bedrijf en haar bedrijfskleuren past.',NULL,NULL),
 (6,'En meer','\images\1604093234other.svg','Als wat u zoek er niet tussen staat, stuur een mailtje dan kijken wij of het mogelijk is.','Als wat u zoek er niet tussen staat, stuur een mailtje dan kijken wij of het mogelijk is.',NULL,'2020-10-30 21:27:21');
INSERT INTO "users" ("id","email","password","remember_token","created_at","updated_at") VALUES (1,'jari.zilverentant@gmail.com','$2y$10$czcXLgneoR8VaumYPBEClOygKYSk5F7xuqAV9vohrIdvYs8z8c2Ye','Cm1FoXTYjzNPTU5UqI9KF53alaV06xE1DjnFHxswXbNLWn8AyqA8ozOqb2zw','2020-10-30 15:11:12','2020-10-30 15:11:12');
INSERT INTO "migrations" ("id","migration","batch") VALUES (1,'2014_10_12_000000_create_users_table',1),
 (2,'2014_10_12_100000_create_password_resets_table',1),
 (3,'2019_08_19_000000_create_failed_jobs_table',1),
 (4,'2020_10_28_124831_create_services_table',1),
 (5,'2020_10_28_124927_create_portfolio_table',1),
 (6,'2020_10_29_234423_create_login_attempts',1);
CREATE UNIQUE INDEX IF NOT EXISTS "failed_jobs_uuid_unique" ON "failed_jobs" (
	"uuid"
);
CREATE INDEX IF NOT EXISTS "password_resets_email_index" ON "password_resets" (
	"email"
);
CREATE UNIQUE INDEX IF NOT EXISTS "users_email_unique" ON "users" (
	"email"
);
COMMIT;
