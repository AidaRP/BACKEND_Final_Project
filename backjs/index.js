const express = require('express');
const cors = require('cors');
const router = require('./router.js');

const app = express();
const PORT = process.env.PORT || 5000;

//Cors configuration
let corsOptions = {
  origin: "*",
  methods: "GET, HEAD, PUT, PATCH, POST, DELETE",
  preflightContinue: false,
  optionSuccessStatus: 204,
};

//Middleware
app.use(express.json());
app.use(cors(corsOptions)); 

//Routes
app.get('/', (req,res) => {res.send("Backend Deployado correctamente, enhorabuena guapisimaaaa!");});
app.use(router);
