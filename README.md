# CREDIT
*This is a slightly modified version of [adamchasetayler/httpbin-ngrok](https://github.com/adamchasetaylor/httpbin-ngrok). To keep the repo clean I created a new one, but the majority of the credit goes to them and if you find this useful you should check out [their version](https://github.com/adamchasetaylor/httpbin-ngrok)!*

## httpbin-ngrok: HTTP Request & Response Service with Ngrok

Pre-Requisites
- Docker
- git
- No running service on Ports 3030, 4040
- Ngrok account
- .env with `NGROK_AUTH` token in the project root

### Running
From the root directory:
```sh
docker-compose up
```

Load up the Launchpad to find your Ngrok and HTTPBin URLs http://localhost:3030

To exit:
```sh
ctrl+c
```

See http://httpbin.org and https://ngrok.com for more information.

### SEE ALSO
- https://hub.docker.com/r/kennethreitz/httpbin/
- https://hub.docker.com/r/wernight/ngrok/

### Even more credits!
- [kennethreitz](https://github.com/postmanlabs/httpbin)
- [wernight](https://github.com/wernight/docker-ngrok)
- [adamchasetaylor](https://github.com/adamchasetaylor/httpbin-ngrok)
