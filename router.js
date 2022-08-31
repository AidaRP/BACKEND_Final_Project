const router = require('express').Router();

const ProductsRouter = require('./backjs/views/ProductsRouter');

router.use('/products', ProductsRouter);

module.exports = router;