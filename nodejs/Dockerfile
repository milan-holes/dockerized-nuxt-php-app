FROM node:10-alpine

WORKDIR /var/www/app

COPY ./app/package*.json ./
RUN npm install

COPY . .

CMD [ "npm", "run", "dev" ]