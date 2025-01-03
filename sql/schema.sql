CREATE DATABASE DEV_BLOG;

USE DEV_BLOG;

CREATE TABLE users (
    id INT AUTO_INCREMENT,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    userName VARCHAR(30) NOT NULL UNIQUE,
    passwordHash VARCHAR(60) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    role VARCHAR(20),
    PRIMARY KEY (id)
);


CREATE TABLE admin (
    id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES users (id)
);


CREATE TABLE author (
    id INT,
    bio TEXT,
    picture VARCHAR(100),
    website VARCHAR(40),
    joined DATETIME DEFAULT CURRENT_TIMESTAMP,
    work VARCHAR(30),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES users (id)
);

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
