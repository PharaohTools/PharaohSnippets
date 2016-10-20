Logging log
  log-message "Lets disable Firewall to change settings"

Firewall disable

Logging log
  log-message "Lets deny all input"

Firewall default
  policy "deny"

Firewall allow
  label "Lets allow SSH input"
  port "ssh/tcp"

Firewall allow
  log-message "Lets allow HTTP input"
  port "http/tcp"

Firewall allow
  label "Lets allow HTTPS input"
  port "https/tcp"

Firewall enable
  label "Lets enable the Firewall"

Firewall reload
  label "Lets reload the settings if it was already enabled"

Logging log
  log-message "Firewall configuration complete"