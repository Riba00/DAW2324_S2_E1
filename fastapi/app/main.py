from typing import Union
import base64
import requests
from fastapi import FastAPI
import sqlite3
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel


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
            
            return {"data": products}
        else:
            return {"message": f"Error al obtener productos. Código de estado: {response.status_code}"}

    except Exception as e:
        return {"message": f"Error: {str(e)}"}
    
class RequestData(BaseModel):
    topic: str

@app.post("/generateImages")
async def generateImages(request_data: RequestData):
    # API CALL
    # load_dotenv()
    # client = OpenAI()
    # topic = request_data.topic
    # response = client.images.generate(
    #     prompt=topic,
    #     n=3,
    #     size="256x256"
    # )

    # API RESPONSE SIMULATION
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
    
