# colorChangeWebpage

Welcome to the Color-Changing Web Application project! This interactive web application allows users to change the background color of the webpage by entering their name and a color name. Let's dive into the project components to understand how it works.

## Personalized User Experience
### User Customization
Users are greeted with a warm welcome and invited to input their name.
By entering their name and selecting a color, users can instantly transform the background of the web application to match their mood or style.
### Tailored Interaction
The application provides a seamless and intuitive experience, allowing users to express their creativity and individuality.
Users can experiment with different colors until they find the perfect match, making their visit to the web application a truly personalized experience.


## How it Works

### 1. Database Setup
The project utilizes a MySQL database named `color_database` with a table called `user_colors`. This table stores user data including an `id`, `username`, and the `selected_color` chosen by the user.

### 2. Frontend (HTML, CSS, JavaScript)
#### HTML
- The user interface is clean and user-friendly, featuring input fields for the user's name and color name.
- Users can input their name and the desired color, then click the "Change Color" button.

#### CSS
- The application has a visually appealing layout with a centered container.
- Input fields and buttons have a modern, responsive design, enhancing the user experience.

#### JavaScript
- The `changeColor()` JavaScript function is triggered when the "Change Color" button is clicked.
- It extracts user inputs, sets the background color of the webpage, and sends data to the server asynchronously using AJAX.

### 3. Backend (PHP)
- The PHP script establishes a connection to the database and handles incoming POST requests.
- It retrieves user inputs, constructs an SQL query, and inserts the data into the `user_colors` table.
- The script provides appropriate feedback to the user based on the success or failure of the database operation.

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL (MariaDB)
- **Web Server:** Localhost (127.0.0.1)

## How to Use
1. Enter your name in the "Enter Your name" field.
2. Enter the desired color name in the "Enter Color Name" field.
3. Click the "Change Color" button.
4. Witness the magic as the webpage background color changes to the selected color!

## Setup Instructions
1. Ensure you have PHP, MySQL (or MariaDB), and a web server installed on your system.
2. Import the provided SQL dump to create the necessary database and table.
3. Place the HTML, CSS, JavaScript, and PHP files in the appropriate directories accessible by your web server.
4. Access the application through your web browser.

## WebPage Preview
![Screenshot 2023-11-05 093859](https://github.com/Saranya81/colorChangeWebpage/assets/124616598/90a55f90-5a18-4466-b376-033069b1baa0)
![Screenshot 2023-11-05 093922](https://github.com/Saranya81/colorChangeWebpage/assets/124616598/df82559b-5463-44f3-a4c8-2c15a3dd83a1)


Feel free to explore, modify, and enhance this project according to your preferences. Happy coding! 🌈✨
