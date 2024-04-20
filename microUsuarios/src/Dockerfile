FROM node:latest

EXPOSE 3001

WORKDIR /microUsuarios

RUN npm init --yes
RUN npm install express morgan mysql mysql2 axios

COPY controllers /microUsuarios/controllers
COPY models /microUsuarios/models
COPY index.js /microUsuarios

CMD node index.js