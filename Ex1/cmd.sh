# Fixing Temporary Failure resolving at deb.debian.org: 

# Update docker json daemon DNS resolver by : `{
#   "dns": ["8.8.8.8", "8.8.4.4"]
# }` 

ifconfig /flushdns

docker-compose up --build

