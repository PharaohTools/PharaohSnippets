Ping once
  label "Ping google and yahoo once"
  target www.google.com,www.yahoo.com

Ping ten
  label "Ping google ten times"
  target www.google.com
  interval 1

Ping until-responding
  label "Ping google until it responds"
  target www.google.com
  interval 1
  max-wait 10
