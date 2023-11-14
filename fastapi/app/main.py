from typing import Union
import base64
import requests
from fastapi import FastAPI, Depends, HTTPException, status
from jose import JWTError, jwt
from fastapi.security import OAuth2PasswordBearer 
from dotenv import load_dotenv
import os

load_dotenv()

url = "https://api.picanova.com/api/beta"
app = FastAPI()

# Credenciales para la API externa
external_api_user = "virtual-vision"
external_api_password = "2b8af5289aa93fc62eae989b4dcc9725"

encriptacio =  base64.b64encode(f"{external_api_user}:{external_api_password}".encode("utf-8")).decode("utf-8")
headerspica = {
    "Authorization": f"Basic {encriptacio}"
}
# Variables de entorno
SECRET_KEY = os.getenv("SECRET_KEY")
ALGORITHM = os.getenv("ALGORITHM")

oauth2_scheme = OAuth2PasswordBearer(tokenUrl="token")

# Funciones auxiliares
def create_token(data: dict):
    return jwt.encode(data, SECRET_KEY, algorithm=ALGORITHM)

def get_current_user(token: str = Depends(oauth2_scheme)):
    credentials_exception = HTTPException(
        status_code=status.HTTP_401_UNAUTHORIZED,
        detail="Invalid credentials",
        headers={"WWW-Authenticate": "Bearer"},
    )
    try:
        payload = jwt.decode(token, SECRET_KEY, algorithms=[ALGORITHM])
        return payload
    except JWTError:
        raise credentials_exception

# Rutas protegidas
@app.post("/token")
def login():
    credentials_exception = HTTPException(
        status_code=status.HTTP_401_UNAUTHORIZED,
        detail="Invalid credentials",
        headers={"WWW-Authenticate": "Bearer"},
    )
    try:
        # Realiza la autenticación y verifica las credenciales
        # Puedes adaptar esta lógica según tus necesidades específicas
        if True:  # Reemplaza esto con tu lógica de autenticación
            # Ejemplo de datos que se pueden incluir en el token
            data = {"sub": external_api_user}
            access_token = create_token(data)
            return {"access_token": access_token, "token_type": "bearer"}
        else:
            raise credentials_exception
    except Exception as e:
        return {"message": f"Error: {str(e)}"}

@app.get("/products")
def get_products(current_user: dict = Depends(get_current_user)):
    try:
        response = requests.get(url + "/products", headers=headerspica)
        
        if response.status_code == 200:
            products = response.json()
            return {"data": products}
        else:
            return {"message": f"Error al obtener productos. Código de estado: {response.status_code}"}

    except Exception as e:
        return {"message": f"Error: {str(e)}"}
