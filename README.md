{
  "$schema": "http://json-schema.org/draft-07/schema#",
  "type": "array",
  "items": {
    "type": "object",
    "required": [
      "id",
      "createdAt",
      "clientName",
      "contactNumber",
      "address",
      "state",
      "city",
      "pinCode"
    ],
    "properties": {
      "id": {
        "type": "string"
      },
      "createdAt": {
        "type": "string",
        "format": "date-time"
      },
      "clientName": {
        "type": "string",
        "minLength": 1
      },
      "contactNumber": {
        "type": "string",
        "pattern": "^[0-9]{10}$"
      },
      "address": {
        "type": "string"
      },
      "state": {
        "type": "string"
      },
      "city": {
        "type": "string"
      },
      "pinCode": {
        "type": "string",
        "pattern": "^[0-9]{6}$"
      }
    }
  }
}