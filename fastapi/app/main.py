from typing import Union
import base64
import requests
from fastapi import FastAPI
import sqlite3

url = "https://api.picanova.com/api/beta"
app = FastAPI()

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
            
            return {"data": products}
        else:
            return {"message": f"Error al obtener productos. Código de estado: {response.status_code}"}

    except Exception as e:
        return {"message": f"Error: {str(e)}"}
    

@app.get("/generateImages")
def generateImages():
    return "generateImages"
    pass
    