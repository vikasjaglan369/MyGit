# Start with the official Node.js image
FROM node:18.17.0-alpine

# Set the working directory
WORKDIR /app

# Copy package.json and package-lock.json
COPY package.json package-lock.json ./

# Install dependencies
RUN yarn install --production

# Copy the rest of the application code
COPY . .

# Build the Next.js application
RUN yarn build

# Expose the port Next.js uses
EXPOSE 3000

# Command to start the application
CMD ["yarn", "start"]

