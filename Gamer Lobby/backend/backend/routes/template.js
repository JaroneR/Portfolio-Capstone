// Rename this file to your route's name
const express = require("express");
const ModelName = require('../models/model-name');

const router = express.Router();

// READ ALL
router.get('', (req, res, next) => {
  res.contentType("application/json");
 // READ ALL operation code
});

// READ
router.get('/:id', (req, res, next) => {
  res.contentType("application/json");
  if (req.params.id) {
    // READ Operation Code
    // Find item in MongoDB which has the id of req.params.id 
    // (the parameter given in the GET url)
    ModelName.findOne({ _id: req.params.id }, (err, docName) => { // docName would be changed to your model name, such as... user
      // Here is an example of what a response will be similar to coding during the process. 
      // Send out example obj as JSON response
      res.send(JSON.stringify(docName));
    });
  } else {
    res.send(JSON.stringify({ message: "No results due to no queries." }));
  }
})

// CREATE
router.post('', (req, res, next) => {
  res.contentType("application/json");
  let values = req.body;
  if (values) {
    // CREATE Operation Code
  } else {
    res.send(JSON.stringify({ message: "Invalid" }));
  }
})

// UPDATE
router.put('', (req, res, next) => {
  res.contentType("application/json");
  let values = req.body;
  if (values) {
    // UPDATE Operation Code
  } else {
    res.send(JSON.stringify({ message: "Invalid Authorization, No token Given" }));
  }
})

// DELETE
router.delete('', (req, res, next) => {
  res.contentType("application/json");
  let values = req.body;
  if (values) {
    // DELETE Operation Code
  } else {
    res.send(JSON.stringify({ message: "Invalid Authorization, No Token Given" }));
  }
});

module.exports = router;
