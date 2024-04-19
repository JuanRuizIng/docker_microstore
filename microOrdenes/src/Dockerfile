FROM node:latest

EXPOSE 3003

WORKDIR /microOrdenes

COPY controllers /microOrdenes/controllers
COPY models /microOrdenes/models
COPY index.js /microOrdenes

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

CMD node index.js