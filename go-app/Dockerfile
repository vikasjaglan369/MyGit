# Start with the official Golang image
FROM golang:1.18 as build

# Set the working directory
WORKDIR /app

# Copy the Go module files and build the binary
COPY go.mod  ./
COPY main.go ./
RUN go mod download
COPY . .
RUN go build -o myapp

# Create a minimal image to run the Go application
FROM gcr.io/distroless/base-debian10
COPY --from=build /app/myapp /myapp
ENTRYPOINT ["/myapp"]

