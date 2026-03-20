# Client Data

This folder stores client data files that can be committed to GitHub.

## Default file

- `clients.json`: starter JSON file for saved client records

## Suggested usage

1. Export or collect client data into `data/clients.json`
2. Commit the updated file to the repository
3. Push to GitHub so the latest data is versioned with the project

## Format

Use a JSON array of client objects, for example:

```json
[
  {
    "id": "1710000000000",
    "createdAt": "2026-03-20T12:00:00.000Z",
    "clientName": "Sample Client",
    "contactNumber": "9876543210",
    "address": "Sample Address",
    "state": "Karnataka",
    "city": "Bengaluru",
    "pinCode": "560001"
  }
]
```
