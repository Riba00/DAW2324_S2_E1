import mysql.connector

try:
    connection = mysql.connector.connect(
        host="mariadb",
        user="alumne",
        password="alumne1234",
        database="projectx"
    )

    if connection.is_connected():
        print("Conexión a la base de datos exitosa!")
except Exception as e:
    print("Error al conectar a la base de datos:", str(e))