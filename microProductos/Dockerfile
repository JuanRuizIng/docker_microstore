FROM node:latest

EXPOSE 3002

WORKDIR /productos

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

COPY src/controllers /productos/src/controllers
COPY src/models /productos/src/models
COPY src/index.js /productos/src

CMD node src/index.js
