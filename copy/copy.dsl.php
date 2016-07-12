File exists
  label "Create an example file"
  file /tmp/test-source-file
  target /tmp/target
  recursive true

File should-have-line
  label "Put some example content in the example file"
  file /tmp/test-source-file
  search "Some example content"

Copy put
  label "Copy the file"
  source /tmp/test-source-file
  target /tmp/test-target-file
  recursive true