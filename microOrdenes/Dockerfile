FROM node:latest

EXPOSE 3003

WORKDIR /microOrdenes

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

COPY src/controllers /microOrdenes/src/controllers
COPY src/models /microOrdenes/src/models
COPY src/index.js /microOrdenes/src

CMD node index.js