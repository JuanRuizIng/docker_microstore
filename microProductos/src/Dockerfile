FROM node:latest

EXPOSE 3002

WORKDIR /microProductos

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

COPY controllers /microProductos/controllers
COPY models /microProductos/models
COPY index.js /microProductos

CMD node index.js