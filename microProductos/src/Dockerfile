FROM node:latest

EXPOSE 3002

WORKDIR /microProductos

COPY controllers /microProductos/controllers
COPY models /microProductos/models
COPY index.js /microProductos

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

CMD node index.js