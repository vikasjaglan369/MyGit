# MyGit

This repository contains a multi-component application including a Go application, a Next.js (TypeScript) application, and a WordPress site. The application is containerized using Docker and orchestrated using Docker Compose.

# Overview

Go Application: A simple web server that serves "Hello, World!" on port 8080.
Next.js Application: A React-based web application running on port 3000.
WordPress: A WordPress site configured to run on port 8081.

# Prerequisites

Docker: Ensure you have Docker installed. 
Docker Compose: Ensure you have Docker Compose installed. 
Git: Ensure you have Git installed. 

# Setup

      ##############Clone the Repository:###############

git clone https://github.com/vikasjaglan369/MyGit.git MyApp ; cd MyApp

      ###############Environment Variables:###############

Create a .env file at the root of the project and add the following variables:

# Database environment variables
MYSQL_ROOT_PASSWORD=password
MYSQL_DATABASE=wordpress

# Staging environment variables for CI/CD (example values, replace with actual)
STAGING_HOST=your_staging_host
STAGING_USERNAME=your_staging_username
SSH_PRIVATE_KEY=your_ssh_private_key
DOCKER_USERNAME=your_docker_username
DOCKER_PASSWORD=your_docker_password

      ##############Build and Run the Containers:###############

Use Docker Compose to build and start the containers.

docker-compose up --build

      ##############Accessing the Applications:###############

Go Application: http://localhost:8080
Next.js Application: http://localhost:3000
WordPress: http://localhost:8081


# Directory Structure

go-app/: Contains the Go application code and Dockerfile.
next-app/: Contains the Next.js application code and Dockerfile.
wordpress/: Contains custom themes/plugins for the WordPress site.


# CI/CD Pipeline

The repository includes GitHub Actions workflows for continuous integration and deployment:

Go Application: .github/workflows/go-deploy.yml
Next.js Application: .github/workflows/next-deploy.yml
WordPress: .github/workflows/wordpress-deploy.yml

# Troubleshooting

Port Conflicts: Ensure the ports 8080, 3000, and 8081 are not being used by other applications.
Docker Issues: If you encounter issues with Docker, ensure you have the latest version installed and try restarting the Docker service.

## Contact Information

If you have any questions or need further assistance, feel free to reach out to me:

- **Name**: Vikas Jaglan
- **Email**: vikasjaglan369@gmail.com
- **GitHub**: [vikasjaglan369](https://github.com/vikasjaglan369)
- **Docker Hub**: [vikas369](https://hub.docker.com/u/vikas369)
- **Phone Number**: 91-9138105989
- **Location**: New Delhi / INDIA

I am available to help and look forward to connecting with you!

