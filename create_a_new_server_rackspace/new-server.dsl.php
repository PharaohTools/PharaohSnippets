EnvironmentConfig configure
  label "Lets add an environment to our papyrusfile for our new server"
  guess true
  environment-name "prod-haproxy"
  tmp-dir "/tmp/"
  keep-current-environments true
  no-manual-servers true
  add-single-environment true

Boxify box-add
  label "Ask Rackspace API to create our node"
  guess true
  environment-name "prod-haproxy"
  provider-name "Rackspace"
  box-amount "1"
  image-id "1a31fdc8-3900-4411-8c08-d8cbf3c9417c"
  region-id "LON"
  size-id "2"
  server-prefix "pharaoh-tools"
  box-user-name "root"
  private-ssh-key-path "KS::id_rsa"
  ssh-key-name "goldenballs"
  wait-for-box-info true
  wait-until-active true