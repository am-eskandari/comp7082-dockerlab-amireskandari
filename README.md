Here’s a summary of all the commands used in this process:

### 1. **Stop and Remove Docker Containers**
   - This command stops all running containers and removes them, clearing the current setup:
     ```bash
     docker-compose down
     ```

### 2. **Start and Rebuild Docker Containers**
   - This command rebuilds and starts the containers in detached mode:
     ```bash
     docker-compose up -d --build
     ```

### 3. **Check Running Containers**
   - This command lists all currently running Docker containers:
     ```bash
     docker ps
     ```

### 4. **Connect to the MySQL Container**
   - This command enters the MySQL container's shell:
     ```bash
     docker exec -it comp7082-dockerlab-amireskandari-db-1 mysql -u am-eskandari -p
     ```
   - When prompted, enter the password (`2314`).

### 5. **MySQL Commands Used Inside the Container**
   - Switch to the correct database:
     ```sql
     USE labdb;
     ```
   - Create the `student` table:
     ```sql
     CREATE TABLE student (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(50),
         student_id INT
     );
     ```
   - Insert data into the `student` table:
     ```sql
     INSERT INTO student (name, student_id) VALUES ('Amir E********', A118****);
     ```
   - Verify data in the `student` table:
     ```sql
     SELECT * FROM student;
     ```
   - Exit the MySQL shell:
     ```sql
     EXIT;
     ```

### 6. **Check on: http://localhost:8080/**