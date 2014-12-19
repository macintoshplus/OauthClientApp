OauthClientApp
==============

An application symfony 2 use OauthServerApp

# Install

1) Clone this repository
2) Install vendors 

```shell
$ php composer install
```

3) Configure database and create it.
4) Create database schema

```shell
$ php app/console doctrine:schema:create
```

# Configure

Open `app/config/hwi_oauth.yml` and change this key for your Oauth server.


# Use OAuth Client and Server

1) Install OAuthServerApp and configure it (add user, client)
2) Install OAuthClientApp
3) Configure the client OAuth in `app/config/hwi_oauth.yml`
4) Open browser and go to home page of OauthClientApp.


# Link

Fos User Bundle :
https://github.com/FriendsOfSymfony/FOSUserBundle

Hwi Oauth Bundle :
https://github.com/hwi/HWIOAuthBundle
