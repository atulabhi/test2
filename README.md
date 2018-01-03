# openebs-website

# Deployement details

We are running an ingress service at 35.193.106.198 on GKE.

All services related to OpenEBS.io and mayadata.io need to be pointed towards 35.193.106.198

Currently, following domains are resolving to this ingress:

mayadata.io
www.mayadata.io
staging.mayadata.io

openebs.io
www.openebs.io
staging.openebs.io

openebs.org
www.openebs.org
staging.openebs.org


```
$ kubectl describe ing
Name:             mayadata-nginx-ingress
Namespace:        default
Address:          35.193.106.198
Default backend:  default-http-backend:80 (10.28.1.8:8080)
TLS:
  mayadata-secret terminates mayadata.io,www.mayadata.io,openebs.org,www.openebs.org,staging.mayadata.io,staging.openebs.io
Rules:
  Host                 Path  Backends
  ----                 ----  --------
  mayadata.io
                       /        stage-mayadata-service:80 (<none>)
                       /echo/   echoheaders:80 (<none>)
  www.mayadata.io
                       /        stage-mayadata-service:80 (<none>)
                       /echo/   echoheaders:80 (<none>)
  openebs.org
                       /        www-openebs-service:80 (<none>)
                       /echo/   echoheaders:80 (<none>)
  www.openebs.org
                       /        www-openebs-service:80 (<none>)
                       /echo/   echoheaders:80 (<none>)
  staging.openebs.io
                       /        staging-openebs-service:80 (<none>)
                       /echo/   echoheaders:80 (<none>)
  staging.mayadata.io
                       /        staging-mayadata-service:80 (<none>)
                       /echo/   echoheaders:80 (<none>)
Annotations:
  rewrite-target:  /
Events:
  Type    Reason  Age                 From                Message
  ----    ------  ----                ----                -------
  Normal  UPDATE  12s (x24 over 15d)  ingress-controller  Ingress default/mayadata-nginx-ingress
```


##Flux details for openebs.io: TBD
<Atul to update this section>

##Flux details for staging.openebs.io: TBD
<Atul to update this section>


##Flux details for mayadata.io: TBD
<Atul to update this section>


##Flux details for staging.mayadata.io: TBD
<Atul to update this section>

