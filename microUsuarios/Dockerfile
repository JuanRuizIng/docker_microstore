FROM node:latest

EXPOSE 3001

WORKDIR /microUsuarios

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

COPY src/controllers /microUsuarios/src/controllers
COPY src/models /microUsuarios/src/models
COPY src/index.js /microUsuarios/src

CMD node index.js