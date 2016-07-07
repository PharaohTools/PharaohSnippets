EnvironmentConfig configure
  label "Lets add an empty environment to our papyrusfile for our new server"
  guess true
  environment-name "test-environment"
  tmp-dir "/tmp/"
  keep-current-environments true
  no-manual-servers true
  add-single-environment true

Boxify box-add
  label "Ask DigitalOceanV2 API to create our node"
  guess true
  environment-name "test-environment"
  provider-name "DigitalOceanV2"
  box-amount "1"
  image-id "14530089"
  region-id "lon1"
  size-id "512mb"
  server-prefix "tutorial"
  box-user-name "root"
  key-path "KS::id_rsa"
  ssh-key-name "some-key-name"
  wait-for-box-info true
  wait-until-active true