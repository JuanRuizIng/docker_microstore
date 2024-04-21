FROM node:latest

EXPOSE 3002

WORKDIR /microProductos

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

COPY src/controllers /microProductos/src/controllers
COPY src/models /microProductos/src/models
COPY src/index.js /microProductos/src

CMD node index.js