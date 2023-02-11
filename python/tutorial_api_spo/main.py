from dotenv import load_dotenv
import os
import base64
from requests import post, get
import json

load_dotenv() # carga directamente las variables de entorno

client_id = os.getenv("CLIENT_ID")
client_secret = os.getenv("CLIENT_SECRET")

# print(client_id, client_secret)


def get_token(): #para conseguir el token de autorización
    auth_string = client_id + ":" + client_secret
    auth_bytes = auth_string.encode("utf-8")
    auth_base64 = str(base64.b64encode(auth_bytes), "utf-8")
    
    url = "https://accounts.spotify.com/api/token"
    headers = {
        "Authorization": "Basic " + auth_base64,
        "Content-Type": "application/x-www-form-urlencoded"
    }
    
    data = {"grant_type": "client_credentials"}
    result = post(url, headers=headers, data=data)
    json_result = json.loads(result.content)
    token = json_result["access_token"]
    return token 

def get_auth_header(token):
    return{"Authorization": "Bearer " + token}


def search_for_artist(token, artist_name): #para poder buscar por artista
    url = "https://api.spotify.com/v1/search"
    headers = get_auth_header(token)
    query = f"?q={artist_name}&type=artist&limit=1"
    
    query_url = url + query
    result = get(query_url, headers=headers)
    json_result = json.loads(result.content)["artists"]["items"]
    # print(json_result)
    
    if len(json_result) == 0:
        print("No artist with this name exists...")
        return None
    
    return json_result[0]

def get_songs_by_artist(token, artist_id): #buscar canciones de un determinado artista
    url = f"https://api.spotify.com/v1/artists/{artist_id}/top-tracks?country=ES"
    headers = get_auth_header(token)
    result = get(url, headers=headers)
    json_result = json.loads(result.content)["tracks"]
    return json_result

token = get_token()
# print(token)
result = search_for_artist(token, "Kendrick Lamar")
print(result["name"])
artist_id = result["id"]
songs = get_songs_by_artist(token, artist_id)
# print(songs)

for idx, song in enumerate(songs): #permite mostrar el listado de canciones en un formato legible y no com json
    print(f"{idx + 1}. {song['name']}")