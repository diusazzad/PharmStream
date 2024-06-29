
paste the code on https://dbdiagram.io/  and see results


TABLE users {
  id int [PK]
  name varchar
  email varchar [unique]
  email_verified_at datetime
  password varchar
  remember_token varchar
  created_at datetime
  updated_at datetime

  avatar varchar [null]
}

Table notifications{
  in uuid [pk]
  type varchar
  notifiable_type varchar
  notifiable_id bigint
  data text
  read_at datetime
  created_at datetime
  updated_at datetime
}

Table suppliers {
  id int [PK]
  name varchar
  email varchar [null]
  phone varchar [null]
  company varchar [null]
  address varchar [null]
  product varchar [null]
  comment text [null]
  created_at datetime
  updated_at datetime
}

Table categories {
  id int [PK]
  name varchar
  created_at datetime
  updated_at datetime
}

Table purchases {
  id int [PK]
  product varchar
  // category_id int [FK: categories(id)] [null]
  // supplier_id int [FK: suppliers(id)] [null]
  category_id int [ref: > categories.id]
  supplier_id int [ref: > suppliers.id]
  cost_price decimal [null]
  quantity varchar
  expiry_date varchar [null]
  image varchar [null]
  created_at datetime
  updated_at datetime
}

Table products {
  id int [PK]
  purchases_id int [ref: < purchases.id]  
  price decimal
  discount decimal [default: 0]
  description text [null]
  deleted_at datetime 
  created_at datetime
  updated_at datetime
}

Table sales {
  id int [PK]
  product_id int [ref: > products.id]
  total_price decimal
  deleted_at datetime 
  created_at datetime
  updated_at datetime
}
