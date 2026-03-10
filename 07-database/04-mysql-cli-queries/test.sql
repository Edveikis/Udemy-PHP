CREATE TABLE posts
(
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  body TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts(title, body) VALUES('Post 4', 'This is the body of post 4'), ('Post 5', 'This is the body of post 5'),
('Post 6', 'This is the body of post 6'), ('Post 7', 'This is the body of post 7'), ('Post 8', 'This is the body of post 8'),
('Post 9', 'This is the body of post 9'), ('Post 10', 'This is the body of post 10');