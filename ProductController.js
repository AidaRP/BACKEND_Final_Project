const axios = require('axios');
const ProductsController = {};

//GET 
ProductsController.getAllProducts = (req, res) => {
  Product.findAll()
  .then(data => {
    res.send(data)
  });
};

module.exports = ProductsController;