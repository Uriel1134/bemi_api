# 🔐 Authentification API – Laravel + Mobile

Ce projet met en place une authentification API simplifiée pour une application mobile. L’objectif est de permettre l’inscription, la connexion et l'accès sécurisé aux routes via token.

---

## ⚙️ Technologies utilisées

- Laravel 12
- API REST (JSON)
- Authentification via **token bearer**
- Sanctum pour la gestion de tokens

---

## 🧩 Endpoints disponibles

### 📥 Inscription (register)

**Méthode :** `POST`  
**URL :** `/api/auth/register`

**Body JSON :**
```json
{
  "name": "Bertran TEST",
  "email": "test@yoyo.com",
  "password": "secret",
  "password_confirmation": "secret",
  "phone": "+229 01 40 40 40 40"
}
```
### Reponse : 
```json
{

  "success": true,
  "message": "Inscription réussie",
  "data": {
    "user": {
      "name": "Bertran TEST",
      "email": "test@yoyo.com",
      "phone": "+229 01 40 40 40 40",
      "updated_at": "2025-04-25T10:10:57.000000Z",
      "created_at": "2025-04-25T10:10:57.000000Z",
      "id": 2,
      "profile_photo_url": "https://ui-avatars.com/api/?name=T&color=7F9CF5&background=EBF4FF"
    },
    "token": "2|1X4JaWuCtN2edW9brCmRslXgcX67auFr5GAxyY30f136918b"
  }
}
```


### 🔑 Connexion (login)

**Méthode :** `POST`  
**URL :** `/api/auth/login`

**Body JSON :**
```json
{
  "email": "test@yoyo.com",
  "password": "secret"
}
```

### Reponse:
```json
{
  "success": true,
  "message": "Connexion réussie",
  "data": {
    "user": {
      "id": 4,
      "name": "Bertran TEST",
      "email": "test@yoyo.com",
      "phone": "+229 01 40 40 40 40",
      "city": null,
      "email_verified_at": null,
      "two_factor_confirmed_at": null,
      "totalPoints": 0,
      "level": 0,
      "isActive": 0,
      "profile_photo_path": null,
      "current_team_id": null,
      "created_at": "2025-04-25T10:10:57.000000Z",
      "updated_at": "2025-04-25T10:10:57.000000Z",
      "profile_photo_url": "https://ui-avatars.com/api/?name=T&color=7F9CF5&background=EBF4FF"
    },
    "token": "3|99nHvyswNcBhkJ6CojjvY4u7J1UAXFgBFKn3Ob0X3bfbbf88"
  }
}
```

# Session active
Le "token" sera à stocker en cache.
Une fois l'utilisateur connecté, chacunes de ses requetes vers le serveur devront etre accompagées du token en en-tête

### Exemple de requete en format JSON :


```json
{
  "method": "GET",
  "url": "/api/check-auth",
  "headers": {
    "Accept": "application/json",
    "Authorization": "Bearer 3|99nHvyswNcBhkJ6CojjvY4u7J1UAXFgBFKn3Ob0X3bfbbf88"
  },
  "body": null
}

```
