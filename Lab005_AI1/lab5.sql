CREATE DATABASE trips;

CREATE TABLE countries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  iso_code CHAR(3) NOT NULL,
  currency VARCHAR(255) NOT NULL,
  total_area FLOAT NOT NULL,
  official_language VARCHAR(255) NOT NULL
);

CREATE TABLE tours (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  continent VARCHAR(255) NOT NULL,
  duration_days INT NOT NULL,
  description TEXT NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  image_name VARCHAR(255) NOT NULL,
  country_id INT, FOREIGN KEY (country_id) REFERENCES countries(id)
);

INSERT INTO countries (name, iso_code, currency, total_area, official_language) VALUES
('USA', 'US', 'USD', 9834000, 'angielski'),
('Chiny', 'CHN', 'CNY', 9597000, 'chinski');

INSERT INTO tours (name, continent, duration_days, description, price, image_name, country_id) VALUES
('Wycieczka na Kolorado', 'Ameryka Północna', 5, 'Kolorado, pasmo górskie w USA.', 2000.00, 'kolorado.jpg', (SELECT id FROM countries WHERE name = 'USA')),
('Wycieczka na Everest', 'Azja', 10, 'Wycieczka na do Chin na Everest.', 4000.00, 'everest.jpg', (SELECT id FROM countries WHERE name = 'Chiny'));

