INSERT INTO roles (title) VALUES ('ADMINISTRATOR');

INSERT INTO users (username, email, `password`, password_salt, roles_id)
VALUES ('john.doe', 'john.doe@gmail.com', MD5('toto31*'), MD5('123'), 1);

INSERT INTO forms (title) VALUES ('satisfaction_survey');

INSERT INTO questions (title) VALUES ('Évaluer de 1 à 5 le respect du délai de livraison');
INSERT INTO questions (title) VALUES ('Évaluer de 1 à 5 l''état du colis à sa réception');
INSERT INTO questions (title) VALUES ('Évaluer de 1 à 5 le comportement du livreur');

INSERT INTO products (title, price_ht) VALUES ('Lampe', 12.99);
INSERT INTO products (title, price_ht) VALUES ('Stylo', 4.99);