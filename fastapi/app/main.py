from typing import Union
import base64
import requests
from fastapi import FastAPI, Depends, HTTPException, status
from fastapi.security import OAuth2PasswordBearer, OAuth2PasswordRequestForm
from jose import JWTError, jwt
import secrets

app = FastAPI()

url = "https://api.picanova.com/api/beta"

# Configuración de autenticación
SECRET_KEY = secrets.token_urlsafe(32)
ALGORITHM = "HS256"
oauth2_scheme = OAuth2PasswordBearer(tokenUrl="token")

def create_token(data: dict):
    return jwt.encode(data, SECRET_KEY, algorithm=ALGORITHM)

def verify_token(token: str = Depends(oauth2_scheme)):
    credentials_exception = HTTPException(
        status_code=status.HTTP_401_UNAUTHORIZED,
        detail="Invalid token",
        headers={"WWW-Authenticate": "Bearer"},
    )
    try:
        payload = jwt.decode(token, SECRET_KEY, algorithms=[ALGORITHM])
        return payload
    except JWTError:
        raise credentials_exception

# Ruta protegida con autenticación
@app.get("/products")
def get_products(credentials: dict = Depends(verify_token)):
    try:
        # Realizar la solicitud GET a través del proxy con autenticación básica (usuario:contrasenya)
        response = requests.get(url + "/products", headers={"Authorization": headers["Authorization"]})

        # Verificar el código de estado de la respuesta
        if response.status_code == 200:
            products = response.json()
            return {"data": products}
        else:
            return {"message": f"Error al obtener productos. Código de estado: {response.status_code}"}

    except Exception as e:
        return {"message": f"Error: {str(e)}"}

# Endpoint para obtener un token JWT (sustituye este endpoint por tu sistema de autenticación real)
@app.post("/token")
async def login(form_data: OAuth2PasswordRequestForm = Depends()):
    credentials_exception = HTTPException(
        status_code=status.HTTP_401_UNAUTHORIZED,
        detail="Invalid credentials",
        headers={"WWW-Authenticate": "Bearer"},
    )
    try:
        # Simulamos un sistema de autenticación, verifica las credenciales en tu aplicación
        if form_data.username == "virtual-vision" and form_data.password == "2b8af5289aa93fc62eae989b4dcc9725":
            # Generar un token con los datos del usuario (en este caso, solo el nombre de usuario)
            token = create_token({"sub": form_data.username})
            return {"access_token": token, "token_type": "bearer"}
        else:
            raise credentials_exception
    except JWTError:
        raise credentials_exception

    

@app.get("/generateImages")
def generateImages():
    return "generateImages"
    pass