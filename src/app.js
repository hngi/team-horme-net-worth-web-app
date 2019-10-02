import express from 'express';
import bodyParser from 'body-parser';
import dotenv from 'dotenv';

// 
import router from './routes/index.route'

const app = express();

dotenv.config();

// configure body-parser
app.use(bodyParser.json({ extended: true }));

const Port = process.env.PORT || 3000;

app.use(function (req, res, next) {
 
    // origins
    res.setHeader('Access-Control-Allow-Origin', '*');
  
    // Request methods 
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE');
  
    // Request headers you wish to allow
    res.setHeader('Access-Control-Allow-Headers', 'Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers,X-Access-Token,XKey,Authorization');

    next();
});

// routes 
app.use('/', router)

// 
app.listen(Port, () => {
    console.log(`app is running on port ${Port}`)
})