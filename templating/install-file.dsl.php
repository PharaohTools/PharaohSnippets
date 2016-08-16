Templating install
  label "Lets install a templated file"
  source "{{{ Facts::~::factGetCwd }}}/templating/Templates/source-template.tpl.php"
  target "/etc/settings"
  template_variable-one "value-one"
  template_variable-two "value-two"