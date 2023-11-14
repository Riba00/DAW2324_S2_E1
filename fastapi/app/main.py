from typing import Union
import base64
import requests
from fastapi import FastAPI
import sqlite3
from fastapi.middleware.cors import CORSMiddleware
from openai import OpenAI
from pydantic import BaseModel
from dotenv import load_dotenv


""" AIXO SERÀ LA CREACIÓ DE LA TAULA A LA BASE DE DADES
conn = sqlite3.connect('ejemplo.db')
cursor = conn.cursor()

# Crea una tabla para almacenar información de productos
cursor.execute('''
    CREATE TABLE IF NOT EXISTS productos (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT,
        descripcion TEXT
    )
''')

conn.commit()
"""

url = "https://api.picanova.com/api/beta"
app = FastAPI()

origins = [
    "http://php-apache:8003",
]

app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

usuari = "virtual-vision"
contrasenya = "2b8af5289aa93fc62eae989b4dcc9725"

# Codificar las credenciales en Base64 para el encabezado de autorización
encriptacio = base64.b64encode(f"{usuari}:{contrasenya}".encode("utf-8")).decode("utf-8")
headers = {
    "Authorization": f"Basic {encriptacio}"
}
@app.get("/")
def get_products():
    return "hola"

@app.get("/products")
def get_products():
    try:
        # Realizar la solicitut GET a través del proxy amb autenticació bàsica(usuari:contrasenya)
        response = requests.get(url + "/products", headers=headers) 

        # Verificar el codig d'estat de la resposta
        if response.status_code == 200:
            products = response.json()
            
            """ Continuació de insertar informació a la taula
            for product in products:
                cursor.execute("INSERT INTO productos (nombre, descripcion) VALUES (?, ?)", (product.get("name", ""), product.get("description", "")))
            conn.commit()
            """
            
            return {"data": products}
        else:
            return {"message": f"Error al obtener productos. Código de estado: {response.status_code}"}

    except Exception as e:
        return {"message": f"Error: {str(e)}"}
    
class RequestData(BaseModel):
    topic: str
@app.post("/generateImages")
async def generateImages(request_data: RequestData):
    topic = request_data.topic

    response = {
        "created": 1699298517,
        "data": [
            {
                "url": "https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699833600&semt=sph"
            },
            {
                "url": "https://img.freepik.com/premium-photo/mountain-lake-with-mountain-background_931553-20878.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1699228800&semt=sph"
            },
            {
                "url": "https://cdn.pixabay.com/photo/2015/04/19/08/32/rose-729509_640.jpg"
            }
        ]
    }

    return response["data"]
    
