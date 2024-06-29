
CREATE TABLE users (
  id integer [primary key, auto_increment]
  name varchar
  email varchar [unique]
  email_verified_at timestamp [nullable]
  password varchar
  remember_token varchar [nullable]
  created_at timestamp [nullable]
  updated_at timestamp [nullable]
)
