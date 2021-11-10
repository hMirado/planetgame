/**
    USER
 */
CREATE TABLE customer(
    userID int(10) auto_increment primary key,
    lname varchar(255),
    fname varchar(255),
    email varchar(255),
    phone varchar(255),
    password varchar(255),
    address varchar(255),
    city varchar(255),
    country varchar(255),
    status BOOLEAN NOT NULL DEFAULT 1
);
CREATE TABLE admin(
    adminID int(10) auto_increment primary key,
    lname varchar(255),
    fname varchar(255),
    email varchar(255),
    phone varchar(255),
    password varchar(255),
    address varchar(255),
    city varchar(255),
    country varchar(255),
    status BOOLEAN NOT NULL DEFAULT 1
);

/**
    PRODUCT
 **/
CREATE TABLE category(
    `categoryId` INT(10) NOT NULL AUTO_INCREMENT,
    `categoryName` VARCHAR(255) NOT NULL,
    `categoryStatus` BOOLEAN,
    PRIMARY KEY (`categoryId`)
);
CREATE TABLE subcategory(
    `subcategoryId` INT(10) NOT NULL AUTO_INCREMENT,
    `subcategoryName` VARCHAR(255) NOT NULL,
    `subcategoryStatus` BOOLEAN,
    `categoryId` INT(10) NOT NULL,
    PRIMARY KEY (`subcategoryId`),
    FOREIGN KEY (categoryId) REFERENCES category(categoryId)
);
CREATE TABLE brand (
    `brandId` INT(10) NOT NULL AUTO_INCREMENT,
    `brandName` VARCHAR(255) NOT NULL,
    `brandStatus` BOOLEAN,
     PRIMARY KEY (`brandId`),
     UNIQUE `uniqueBrandName` (`brandName`)
);
CREATE TABLE product (
    `productId` INT(10) NOT NULL AUTO_INCREMENT,
    `productName` VARCHAR(255) NOT NULL,
    `productDescription` TEXT NOT NULL,
    `productPrice` INT(10) NOT NULL,
    `productCategoryId` INT(10) NOT NULL,
    `productBrandId` INT(10) NOT NULL,
    `productSubcategoryId` INT(10) NOT NULL,
     PRIMARY KEY (`productId`),
     FOREIGN KEY (productCategoryId) REFERENCES category(categoryId),
     FOREIGN KEY (productBrandId) REFERENCES brand(brandId),
     FOREIGN KEY (productSubcategoryId) REFERENCES subcategory(subcategoryId)
);
/*ALTER TABLE product
add column productSubcategoryId INT(10);
ALTER TABLE product
ADD FOREIGN KEY (productSubcategoryId) REFERENCES subcategory(subcategoryId);
ALTER TABLE product
add column noSerie VARCHAR(255) UNIQUE;*/
CREATE TABLE productImage (
    `imageId` INT(10) NOT NULL AUTO_INCREMENT,
    `image` LONGBLOB NOT NULL,
    `imageProductId` INT(10) NOT NULL,
     PRIMARY KEY (`imageId`),
     FOREIGN KEY (imageProductId) REFERENCES product(productId)
);
CREATE TABLE stock (
    `stockId` INT(10) NOT NULL AUTO_INCREMENT,
    `stockQuantity` INT(0),
    `stockProductId` INT(10) NOT NULL,
     PRIMARY KEY (`stockId`),
     FOREIGN KEY (stockProductId) REFERENCES product(productId)
);
CREATE TABLE promo(
    promoId INT(10) NOT NULL AUTO_INCREMENT,
    promoStart date NOT NULL,
    promoEnd date NOT NULL,
    promoPrice date NOT NULL,
    promoProduct int(10) NOT NULL,
    PRIMARY KEY (promoId),
    FOREIGN KEY (promoProduct) REFERENCES product(productId)
);

/*
    IMAGES
 */

CREATE TABLE imageType(
    imageTypeId INT(10) NOT NULL AUTO_INCREMENT,
    type VARCHAR(255) NOT NULL,
    PRIMARY KEY (imageTypeId)
);

CREATE TABLE image(
    imageId INT(10) NOT NULL AUTO_INCREMENT,
    image LONGBLOB NOT NULL,
    alt TEXT,
    status boolean NOT NULL DEFAULT 1,
    type INT(10) NOT NULL,
    PRIMARY KEY (imageId),
    FOREIGN KEY (type) REFERENCES imageType(imageTypeId)
);

/**
    SELL
 */
CREATE TABLE payment (
    paymentId INT(10) NOT NULL AUTO_INCREMENT,
    paymentType VARCHAR(255) NOT NULL,
    paymentStatus INT(1) NOT NULL,
    paymentMessagge TEXT,
    paymentDate DATETIME NOT NULL,
    paymentUserID int(10) NOT NULL,
    PRIMARY KEY (paymentId),
    FOREIGN KEY (paymentUserID) REFERENCES customer(userID)
);
CREATE TABLE shipping (
    shippingId INT(10) NOT NULL AUTO_INCREMENT,
    lName varchar(255),
    fname varchar(255),
    email varchar(255),
    phone varchar(255),
    address varchar(255),
    city varchar(255),
    country varchar(255),
    shippingDate DATETIME NOT NULL,
    shippingUserID int(10) NOT NULL,
    PRIMARY KEY (shippingId),
    FOREIGN KEY (shippingUserID) REFERENCES customer(userID)
);
CREATE TABLE buy (
    buyId INT(10) NOT NULL AUTO_INCREMENT,
    noSerie VARCHAR(255) UNIQUE,
    buyDate DATETIME NOT NULL,
    buyProductId int(10) NOT NULL,
    buyUserID int(10) NOT NULL,
    PRIMARY KEY (buyId),
    FOREIGN KEY (buyProductId) REFERENCES product(productId),
    FOREIGN KEY (buyUserID) REFERENCES customer(userID)
);

CREATE OR REPLACE VIEW v_product AS
SELECT p.productId, p.productName AS name, p.productDescription AS description, p.productPrice AS price,
        b.brandName AS marque, c.categoryName AS categorie, sc.subcategoryName as subcategory,
        CASE WHEN s.stockQuantity IS NULL THEN 0 ELSE s.stockQuantity END stock
FROM product p
INNER JOIN brand b ON p.productBrandId=b.brandId
INNER JOIN category c ON p.productCategoryId=c.categoryId
INNER JOIN subcategory sc ON p.productSubcategoryId=sc.subcategoryId
LEFT JOIN stock s ON p.productId=s.stockProductId;

CREATE OR REPLACE VIEW v_image_type AS
SELECT it.imageTypeId as id, it.type, CASE WHEN count(i.imageId) = 0 THEN 0 ELSE count(i.imageId) END nombre
FROM imageType it
LEFT JOIN image i ON it.imageTypeId=i.type
GROUP BY it.type
ORDER BY it.type ASC;

CREATE OR REPLACE VIEW v_image AS
SELECT i.imageId as id, i.image, i.alt, i.status, i.type, iT.type
FROM image AS i
INNER JOIN imageType iT on i.type = iT.imageTypeId;
