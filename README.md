# 🛠️ PruebaBackend

> Backend Technical Assessment - Client Management System CRUD

**Author:** José Eduardo Tirado Verbel  
**Demo:** [View Live Demo](https://jotive.github.io/PruebaBackend)

## 📝 Overview

This repository contains a comprehensive backend technical assessment that demonstrates proficiency in server-side development using PHP and MySQL. The project implements a complete CRUD (Create, Read, Update, Delete) client management system with database integration and best practices in backend architecture.

## ✨ Features

- ✅ Full CRUD operations for client management
- ✅ MySQL database integration
- ✅ RESTful API architecture
- ✅ Data validation and sanitization
- ✅ Secure database connections
- ✅ Error handling and logging
- ✅ Clean and maintainable code structure
- ✅ Professional backend architecture

## 🛠️ Tech Stack

- **PHP** - Server-side programming language
- **MySQL** - Relational database management system
- **Apache/Nginx** - Web server
- **PHPMyAdmin** - Database administration (optional)
- **Git** - Version control

## 📁 Project Structure

```
PruebaBackend/
├── config/              # Configuration files
│   └── database.php     # Database connection
├── controllers/         # Business logic controllers
├── models/              # Data models
├── views/               # Presentation layer
├── api/                 # API endpoints
├── public/              # Public assets (CSS, JS, images)
├── sql/                 # Database schema and seeds
│   └── gestionclientes.sql
└── README.md            # Project documentation
```

## 📦 Database Configuration

### Database Details

```
Database Name: gestionclientes
Username:      ventas1
Password:      ventas123
Host:          localhost
Port:          3306 (default)
```

### Database Schema

The system includes tables for:
- **clientes** (clients) - Main client information
- Users management
- Transactions log (if applicable)

## 🚀 Getting Started

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher / MariaDB 10.3+
- Apache/Nginx web server
- Composer (optional, for dependencies)
- PHPMyAdmin (optional, for database management)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/jotive/PruebaBackend.git
   cd PruebaBackend
   ```

2. **Set up the database:**
   ```bash
   # Create the database
   mysql -u root -p
   CREATE DATABASE gestionclientes;
   
   # Import the schema
   mysql -u root -p gestionclientes < sql/gestionclientes.sql
   
   # Create user and grant permissions
   CREATE USER 'ventas1'@'localhost' IDENTIFIED BY 'ventas123';
   GRANT ALL PRIVILEGES ON gestionclientes.* TO 'ventas1'@'localhost';
   FLUSH PRIVILEGES;
   ```

3. **Configure the application:**
   ```php
   // config/database.php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'gestionclientes');
   define('DB_USER', 'ventas1');
   define('DB_PASS', 'ventas123');
   ```

4. **Start the development server:**
   ```bash
   # Using PHP built-in server
   php -S localhost:8000
   
   # Or configure Apache/Nginx virtual host
   # Point document root to project directory
   ```

5. **Access the application:**
   - Navigate to `http://localhost:8000` in your browser
   - Or access through your configured virtual host

## 📚 API Endpoints

### Client Management

```
GET    /api/clients        - Get all clients
GET    /api/clients/:id    - Get client by ID
POST   /api/clients        - Create new client
PUT    /api/clients/:id    - Update client
DELETE /api/clients/:id    - Delete client
```

### Request/Response Examples

**Create Client (POST /api/clients)**
```json
{
  "nombre": "Juan Pérez",
  "email": "juan.perez@example.com",
  "telefono": "+57 300 1234567",
  "direccion": "Calle 123 #45-67, Bogotá"
}
```

**Response:**
```json
{
  "success": true,
  "message": "Cliente creado exitosamente",
  "data": {
    "id": 1,
    "nombre": "Juan Pérez",
    "email": "juan.perez@example.com",
    "telefono": "+57 300 1234567",
    "direccion": "Calle 123 #45-67, Bogotá"
  }
}
```

## 🎯 Assessment Goals Achieved

✅ Complete CRUD functionality  
✅ Secure database operations  
✅ RESTful API design  
✅ Data validation and error handling  
✅ Clean code architecture  
✅ Professional backend development practices  
✅ SQL injection prevention  
✅ Proper separation of concerns  

## 📸 Screenshots

_Note: Add screenshots showing the client management interface, database structure, and API responses_

## 🛡️ Security Considerations

- Input validation and sanitization
- Prepared statements to prevent SQL injection
- Password hashing for user authentication
- HTTPS recommended for production
- Environment-based configuration
- Database credentials management

## 🛣️ Roadmap & Future Enhancements

- [ ] JWT authentication implementation
- [ ] API rate limiting
- [ ] Unit and integration tests
- [ ] Docker containerization
- [ ] CI/CD pipeline with GitHub Actions
- [ ] API documentation with Swagger/OpenAPI
- [ ] Logging and monitoring system
- [ ] Advanced search and filtering

## 📊 Testing

```bash
# Run PHP unit tests (if configured)
php vendor/bin/phpunit

# Test API endpoints with curl
curl -X GET http://localhost:8000/api/clients
curl -X POST http://localhost:8000/api/clients \
  -H "Content-Type: application/json" \
  -d '{"nombre":"Test Client","email":"test@example.com"}'
```

## 🤝 Contributing

This is a technical assessment project, but suggestions and feedback are welcome!

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/improvement`)
3. Commit your changes (`git commit -am 'Add improvement'`)
4. Push to the branch (`git push origin feature/improvement`)
5. Open a Pull Request

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

## 📧 Contact

**José Eduardo Tirado Verbel**
- Portfolio: [jotive.com.co](https://jotive.com.co)
- GitHub: [@jotive](https://github.com/jotive)
- Email: jotive@gmail.com

---

⭐ If you found this project helpful, please consider giving it a star!
