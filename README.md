# HOW TO USE

1. Install DOCKER
2. Pull PHP image from dockerhub (`docker pull php`)
3. Pull NGINX image from dockerhub (`docker pull nginx`)
4. Add to your hosts file `127.0.0.1 my.docker.com`
5. Pull this project `git clone https://github.com/DevilSAM/docker_moex.git ~/moex`
6. Go to this directory `cd ~/moex`
7. Run `docker-compose build`
8. Run `docker-compose up`
9. Visit "my.docker.com" in your browser

P.S. You can change the address for use.
All you need is replace **my.docker.com** to **your-own-name** in the ./nginx/default.conf (line 3)
Of cause you need change **my.docker.com** to **your-own-name** on 4th step of this manual.