# Ejemplo Docker Compose

Este proyecto contiene un ejemplo básico de cómo utilizar **Docker Compose** para levantar servicios de manera sencilla.

## Requisitos

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Uso

1. Clona este repositorio o descarga los archivos en tu máquina local.
2. Navega a la carpeta del proyecto:

    ```bash
    cd ejemplo_docker_compose
    ```

3. Levanta los servicios definidos en `docker-compose.yml`:

    ```bash
    docker-compose up -d
    ```

4. Para detener los servicios:

    ```bash
    docker-compose down
    ```

## Estructura del proyecto

```
ejemplo_docker_compose/
├── docker-compose.yml
└── Readme.md
```

## Notas

- Modifica el archivo `docker-compose.yml` según tus necesidades.
- Consulta la [documentación oficial de Docker Compose](https://docs.docker.com/compose/) para más información.

