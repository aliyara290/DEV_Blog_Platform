CREATE DATABASE DEV_BLOG;

USE DEV_BLOG;

CREATE TABLE users (
    id INT AUTO_INCREMENT,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30),
    bio TEXT,
    picture VARCHAR(100),
    website VARCHAR(40),
    joined DATETIME DEFAULT CURRENT_TIMESTAMP,
    work VARCHAR(30),
    userName VARCHAR(30) NOT NULL UNIQUE,
    passwordHash VARCHAR(60) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    role VARCHAR(20),
    PRIMARY KEY (id)
);


-- CREATE TABLE admin (
--     id INT,
--     PRIMARY KEY (id),
--     FOREIGN KEY (id) REFERENCES users (id)
-- );


-- CREATE TABLE author (
--     id INT,
--     PRIMARY KEY (id),
--     FOREIGN KEY (id) REFERENCES users (id)
-- );

CREATE TABLE categories (
    categoryId INT AUTO_INCREMENT,
    categoryName VARCHAR(50) NOT NULL,
    PRIMARY KEY (categoryId)
);


CREATE TABLE articles (
    articleId INT AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    content TEXT NOT NULL,
    categoryId INT NOT NULL,
    featuredImage VARCHAR(255),
    status ENUM('active', 'pending') NOT NULL DEFAULT 'pending',
    authorId INT NOT NULL,
    createdAt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    views INT DEFAULT 0,
    PRIMARY KEY (articleId),
    FOREIGN KEY (categoryId) REFERENCES categories (categoryId) ON DELETE CASCADE,
    FOREIGN KEY (authorId) REFERENCES users (id) ON DELETE CASCADE
);

CREATE TABLE tags (
    tagId INT AUTO_INCREMENT,
    tagName VARCHAR(50) NOT NULL,
    PRIMARY KEY (tagId)
);

CREATE TABLE articleTag (
    tagId INT NOT NULL,
    articleId INT NOT NULL,
    PRIMARY KEY (tagId, articleId),
    FOREIGN KEY (tagId) REFERENCES tags (tagId) ON DELETE CASCADE,
    FOREIGN KEY (articleId) REFERENCES articles (articleId) ON DELETE CASCADE
);


-- Insert records into `users`
-- INSERT INTO users (firstName, lastName, userName, passwordHash, email, role) VALUES
-- ('John', 'Doe', 'johndoe', 'hashedpassword1', 'john.doe@example.com', 'author'),
-- ('Jane', 'Smith', 'janesmith', 'hashedpassword2', 'jane.smith@example.com', 'admin'),
-- ('Alice', 'Johnson', 'alicej', 'hashedpassword3', 'alice.johnson@example.com', 'author'),
-- ('Bob', 'Brown', 'bobb', 'hashedpassword4', 'bob.brown@example.com', 'user');

-- -- Insert records into `admin`
-- INSERT INTO admin (id) VALUES
-- (2);

-- -- Insert records into `author`
-- INSERT INTO author (id, bio, picture, website, work) VALUES
-- (1, 'Tech enthusiast and writer', 'john.jpg', 'https://johndoe.com', 'Writer'),
-- (3, 'Passionate developer and coder', 'alice.jpg', 'https://alice.dev', 'Developer');

-- -- Insert records into `categories`
-- INSERT INTO categories (categoryName) VALUES
-- ('Technology'),
-- ('Lifestyle'),
-- ('Education'),
-- ('Entertainment');

-- -- Insert records into `articles`
-- INSERT INTO articles (title, slug, content, categoryId, featuredImage, status, authorId, views) VALUES
-- ('The Future of AI', 'the-future-of-ai', 'Content about AI', 1, 'ai.jpg', 'active', 1, 100),
-- ('Healthy Living Tips', 'healthy-living-tips', 'Content about healthy living', 2, 'health.jpg', 'active', 1, 50),
-- ('Top Programming Languages', 'top-programming-languages', 'Content about programming', 1, 'coding.jpg', 'pending', 3, 75);

-- -- Insert records into `tags`
-- INSERT INTO tags (tagName) VALUES
-- ('Technology'),
-- ('Health'),
-- ('AI'),
-- ('Programming');

-- -- Insert records into `articleTag`
-- INSERT INTO articleTag (tagId, articleId) VALUES
-- (1, 1), -- Technology tag for "The Future of AI"
-- (3, 1), -- AI tag for "The Future of AI"
-- (2, 2), -- Health tag for "Healthy Living Tips"
-- (4, 3); -- Programming tag for "Top Programming Languages"
