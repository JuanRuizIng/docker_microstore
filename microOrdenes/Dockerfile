FROM node:latest

EXPOSE 3003

WORKDIR /ordenes

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

COPY src/controllers /ordenes/src/controllers
COPY src/models /ordenes/src/models
COPY src/index.js /ordenes/src

CMD node src/index.js
