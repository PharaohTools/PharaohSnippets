Ping once
  label "Ping google once"
  target www.google.com
  interval 3

Ping ten
  label "Ping google ten times"
  target www.google.com
  interval 3

Ping until-responding
  label "Ping google until it responds"
  target www.google.com
  interval 3
  max-wait 30
