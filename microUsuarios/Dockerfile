FROM node:latest
EXPOSE 3001
WORKDIR /usuarios
RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios
COPY src/controllers /usuarios/src/controllers
COPY src/models /usuarios/src/models
COPY src/index.js /usuarios/src
CMD node src/index.js
