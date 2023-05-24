# Farming System

## Description
The Farming System is a web-based application built using the PHP Laravel framework that aims to assist farmers in managing their agricultural activities effectively. It provides farmers with valuable information about crop prices, weather forecasts, and agricultural tips, enabling them to make informed decisions for their farming operations.

## Features
- Registration: Farmers can register accounts to access the system and receive news and alerts.
- Crop Price Inquiry: Farmers can inquire about the prices of various crops managed by the agriculture agency.
- Weather Forecast: Farmers can check the weather forecast for their specific regions to plan their farming activities accordingly.
- Agriculture Tips: The system provides farmers with agriculture tips and recommendations based on the current weather conditions.
- Admin Panel: The system includes an admin panel to manage crop prices, news updates, farmer details, and the mailing list.
- Farming Agency Interaction: The system allows the farming agency to verify uploaded crop prices, receive complaints and reports from farmers, and provide news and alerts.

## Technologies Used
- Backend Framework: PHP Laravel
- Frontend: HTML, CSS, JavaScript
- Database: SQL (Structured Query Language)

## Installation
1. Clone the repository: `git clone <repository_url>`
2. Install the required dependencies: `composer install`
3. Configure the database settings in `.env` file
4. Generate application key: `php artisan key:generate`
5. Run database migrations: `php artisan migrate`
6. Start the development server: `php artisan serve`

## Usage
1. Access the application by navigating to the provided URL.
2. Register a farmer account or login with existing credentials.
3. Explore the different features of the system, such as crop price inquiry, weather forecast, and agriculture tips.
4. Admins can access the admin panel to manage system data and interact with the farming agency.


## License
This project is licensed under the [MIT License](LICENSE).
