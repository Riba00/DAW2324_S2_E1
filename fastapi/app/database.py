# database.py

import mysql.connector

db_config = {
    "host": "mariadb",
    "user": "alumne",
    "password": "alumne1234",
    "database": "projectx",
}

connection = mysql.connector.connect(**db_config)