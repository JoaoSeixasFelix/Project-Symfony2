# Use an official PHP runtime as a parent image
FROM php:7.4-cli

# Set the working directory to /app
WORKDIR /app

# Install Composer
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/* \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

# Copy the current directory contents into the container at /app
COPY . /app

# Run Composer install
RUN composer install

# Make port 8000 available to the world outside this container
EXPOSE 8000

# Define environment variable
ENV APP_ENV=dev

# Run Symfony server
CMD ["symfony", "server:start", "--no-tls", "--port=8000", "--allow-http"]