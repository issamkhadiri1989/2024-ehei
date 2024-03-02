# Install the project

- clone the project

```
git clone https://github.com/issamkhadiri1989/2024-supmti.git && CD 2024-supmti
```

- run the command: 
```
docker compose build && docker compose up -d 
```

- run 
```
docker compose exec server bash
```

- inside the container run 

```
composer self-update
composer install
```


- in the browser run go to `http://localhost/`