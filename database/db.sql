DROP DATABASE IF EXISTS diw_db;
CREATE DATABASE diw_db;
USE diw_db;

    CREATE TABLE users (
        id VARCHAR(36),
        name VARCHAR(32),
        surname VARCHAR(64),
        email VARCHAR(64),
        password VARCHAR(64),
    );

    CREATE TABLE cards (
        id VARCHAR(36),
        user_id VARCHAR(36),
        name VARCHAR(64),
        cvv SMALLINT,
        number VARCHAR(64),
        expiration_date TIMESTAMP NULL
    );

    CREATE TABLE addresses (
        id VARCHAR(36),
        user_id VARCHAR(36),
        name VARCHAR(64),
        number VARCHAR(16),
        street VARCHAR(32),
        city VARCHAR(32),
        pc SMALLINT,
        telefon INT,
        reciver_name VARCHAR(64)
    );

    CREATE TABLE users_orders (
        id VARCHAR(36),
        user_id VARCHAR(36),
        order_id VARCHAR(36)
    );

    CREATE TABLE orders (
        id VARCHAR(36),
        requested_at TIMESTAMP NULL,
        shiped_at TIMESTAMP NULL,
        recived_at TIMESTAMP NULL
    );

    CREATE TABLE order_items (
        id VARCHAR(36),
        order_id VARCHAR(36),
        product_id VARCHAR(36),
        amount TINYINT
    );

    CREATE TABLE product_parents (
        id VARCHAR(36)
    );

    CREATE TABLE products (
        id VARCHAR(36),
        product_parents_id VARCHAR(36)
    );

    CREATE TABLE carts (
        id VARCHAR(36)
    );

    CREATE TABLE cart_items (
        id VARCHAR(36),
        carts_id VARCHAR(36)
    );
