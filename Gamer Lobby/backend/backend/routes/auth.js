const express = require("express");
const Account = require('../models/account');

const router = express.Router();

// POST Authentication
router.post('', (req, res, next) => {
  res.contentType("application/json");
  // AUTHENTICATION operations
});

module.exports = router;