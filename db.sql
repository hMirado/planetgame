CREATE TABLE customer(
    userID int(10) auto_increment primary key,
    lname varchar(255),
    fname varchar(255),
    email varchar(255),
    phone varchar(255),
    password varchar(255),
    address varchar(255),
    city varchar(255),
    country varchar(255)
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
    country varchar(255)
);
CREATE TABLE category(
    `categoryId` INT(10) NOT NULL AUTO_INCREMENT,
    `categoryName` VARCHAR(255) NOT NULL,
    `categoryStatus` BOOLEAN,
    PRIMARY KEY (`categoryId`)
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
    `productDesciption` TEXT NOT NULL,
    `productPrice` INT(10) NOT NULL,
    `productCategoryId` INT(10),
    `productBrandId` INT(10),
     PRIMARY KEY (`productId`),
     FOREIGN KEY (productCategoryId) REFERENCES category(categoryId),
     FOREIGN KEY (productBrandId) REFERENCES brand(brandId)
);
CREATE TABLE image (
    `imageId` INT(10) NOT NULL AUTO_INCREMENT,
    `image` LONGBLOB NOT NULL,
    `imageCaption` VARCHAR(255) NOT NULL,
    `imageAlt` VARCHAR(255) NOT NULL,
    `imageProductId` INT(10),
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
CREATE TABLE payment (
    paymentId INT(10) NOT NULL AUTO_INCREMENT,
    paymentType VARCHAR(255) NOT NULL,
    paymentStatus INT(1) NOT NULL,
    paymentMessagge TEXT,
    paymentUserID int(10),
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
    shippingUserID int(10),
    PRIMARY KEY (shippingId),
    FOREIGN KEY (shippingUserID) REFERENCES customer(userID)
);
