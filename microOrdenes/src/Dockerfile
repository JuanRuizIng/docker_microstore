FROM node:latest

EXPOSE 3003

WORKDIR /microOrdenes

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

COPY controllers /microOrdenes/controllers
COPY models /microOrdenes/models
COPY index.js /microOrdenes

CMD node index.js