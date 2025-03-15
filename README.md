# 🌍 Countries API

![GitHub repo size](https://img.shields.io/github/repo-size/3ezzy/countriesAPI)
![GitHub stars](https://img.shields.io/github/stars/3ezzy/countriesAPI?style=social)
![GitHub forks](https://img.shields.io/github/forks/3ezzy/countriesAPI?style=social)

A simple and efficient API that provides detailed information about countries, including their names, capitals, population, regions, and more.

## 🚀 Features

✅ Get detailed country data (name, capital, population, languages, etc.)  
✅ Filter countries by region or name  
✅ Lightweight and fast response time  
✅ Free and open-source  

## 📌 Installation

Clone the repository and install dependencies:

```sh
git clone https://github.com/3ezzy/countriesAPI.git
cd countriesAPI
npm install
```

## 📖 Usage

Run the API locally:

```sh
npm start
```

Access the API endpoints:

```sh
GET /countries
GET /countries/{countryCode}
GET /countries/region/{regionName}
```

Example Response:
```json
{
  "name": "Morocco",
  "capital": "Rabat",
  "population": 36910560,
  "region": "Africa",
  "languages": ["Arabic", "Berber"]
}
```

## 📡 API Endpoints
| Method | Endpoint | Description |
|--------|------------------------|----------------------|
| GET | `/countries` | Get all countries |
| GET | `/countries/{countryCode}` | Get details of a specific country |
| GET | `/countries/region/{regionName}` | Get countries from a region |

## 🛠 Technologies Used
- Node.js
- Express.js
- REST API

## 🤝 Contributing
Contributions are welcome! Feel free to submit a pull request or open an issue.

## 📜 License
This project is open-source and available under the [MIT License](LICENSE).

---

⭐ Star this repo if you find it useful!
