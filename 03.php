mysql -u root -p
import mysql.connector


conn = mysql.connector.connect(
    host="localhost",
    user="root",
    password="root"
)

cursor = conn.cursor()


cursor.execute("CREATE DATABASE IF NOT EXISTS school_schedule;")
cursor.execute("USE school_schedule;")


cursor.execute("""
CREATE TABLE IF NOT EXISTS class_schedule (
    class_id INT AUTO_INCREMENT PRIMARY KEY,
    class_name VARCHAR(100) NOT NULL,
    day_of_week ENUM('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday') NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL
);
""")


cursor.executemany("""
INSERT INTO class_schedule (class_name, day_of_week, start_time, end_time)
VALUES (%s, %s, %s, %s)
""", [
    ('Mathematics', 'Monday', '08:00:00', '09:30:00'),
    ('English', 'Tuesday', '10:00:00', '11:30:00'),
    ('Physics', 'Wednesday', '13:00:00', '14:30:00'),
    ('Chemistry', 'Thursday', '09:00:00', '10:30:00'),
    ('History', 'Friday', '14:00:00', '15:30:00')
])


conn.commit()

